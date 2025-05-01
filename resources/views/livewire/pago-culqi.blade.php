<div>
    <button id="btn_pagar" type="button" class="btn btn-primary">Pagar</button>


    <!-- Loader en pantalla completa -->
    <div id="loader"
        style="
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    font-weight: bold;">
        Procesando pago...
    </div>


    <script src="https://checkout.culqi.com/js/v4"></script>
    <script>
        const btnPagar = document.getElementById('btn_pagar');
        const loader = document.getElementById('loader');

        btnPagar.addEventListener('click', function(e) {
            Culqi.publicKey = 'pk_test_5dc54bef7214c09f';
            Culqi.settings({
                title: 'Estancia Del Alba',
                currency: 'PEN',
                amount: 1000,
                order: 'ord_live_0CjjdWhFpEAZlxlz',
            });

            Culqi.options({
                lang: "auto",
                installments: false,
                paymentMethods: {
                    tarjeta: true,
                    yape: true,
                    bancaMovil: true,
                    agente: true,
                    billetera: true,
                    cuotealo: true,
                },
                style: {
                    logo: "https://static.culqi.com/v2/v2/static/img/logo.png",
                }
            });

            Culqi.open();
            e.preventDefault();
        });

        function culqi() {
            if (Culqi.token) {
                const token = Culqi.token.id;

                // 🔴 Cerrar el modal de Culqi
                Culqi.close();

                // 🔵 Mostrar el loader SOLO después de cerrar Culqi
                loader.style.display = "flex";
                btnPagar.disabled = true;

                // 🔵 Enviar el token a Livewire
                Livewire.emit('procesarPago', token);
            } else {
                console.log('Error: ', Culqi.error);
            }
        }

        window.addEventListener('pago-exitoso', function() {
            ocultarLoader();
            window.location.href = "/";
        });

        window.addEventListener('pago-fallido', function() {
            ocultarLoader();
            alert('Hubo un problema con el pago. Inténtalo nuevamente.');
        });

        function ocultarLoader() {
            loader.style.display = "none";
            btnPagar.disabled = false;
        }
    </script>
</div>
@livewireScripts