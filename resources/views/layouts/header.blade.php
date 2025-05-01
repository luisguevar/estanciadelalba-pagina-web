<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estancia del Alba</title>

    <link rel="shortcut icon" href="assets/images/main.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="assets/css/style.css">

    @livewireStyles
</head>

<body>
    <style>
        /*  body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        } */

        /*   main {
            flex: 1;
            padding: 20px;
        }
 */
        footer {
            background-color: #13172b;
            color: #fff !important;
            padding: 40px 20px;
            position: relative;
            width: 100%;
            animation: fadeIn 2s ease-in-out;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 10px;
            animation: slideIn 1s ease-in-out;
        }

        .footer-section h3 {
            border-bottom: 2px solid #fff !important;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .social-media a {
            margin: 0 10px;
            color: #fff;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s;
        }

        .social-media a:hover {
            color: #1da1f2;
        }

        .map-container {
            width: 100%;
            height: 200px;
            margin-top: 20px;
        }

        .newsletter input[type="email"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        .newsletter button {
            padding: 10px 20px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter button:hover {
            background-color: #777;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    <!-- ========== Header Section Starts Here========== -->
    <header class="header-section header-2">
        <div class="header-holder">
            <div class="header-menu-part">
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-area">
                            <ul class="left">
                                <li>
                                    <i class="fa-solid fa-phone"></i> <span>+51 987 836 286</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i> <span>recepcion@estanciadelalba.com</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i> Av. Vía de Evitamiento Sur 1260, Cajamarca
                                </li>
                            </ul>
                            {{--  <div class="lang-select">
                                <span><i class="fa-solid fa-globe"></i></span>

                                <select class="form-select" aria-label="Select Language">
                                    <option selected> English</option>
                                    <option value="1"> Spanish</option>
                                    <option value="2"> French</option>
                                    <option value="3"> Italian</option>
                                </select>
                            </div> --}}
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="header-bottom d-flex justify-content-between align-items-center" style="padding: 1%;">

                        <div class="w-25 d-none d-lg-block">
                            <img src="assets/images/demo/logo_hotel.png" style="width: 50%;" alt="logo">
                        </div>
                        <div class="header-wrapper justify-content-lg-end">
                            <div class="mobile-logo d-lg-none">
                                <a href="index.html"><img src="assets/images/demo/logo_hotel.png" alt="logo"></a>
                            </div>
                            <div class="menu-area">
                                <ul class="menu d-flex">
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="/nosotros">Nosotros</a></li>
                                    <li><a href="/reservar">Reservas</a></li>
                                    <li><a href="/habitaciones">Habitaciones</a></li>
                                    <li><a href="/contactanos">Contáctanos</a></li>
                                </ul>
                                <div class="header-bar d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="ellepsis-bar d-lg-none">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


    </header>
    <!-- ========== Header Section Ends Here========== -->


    @yield('contenidoPrincipal')






    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3 style="color: white">Sobre nosotros</h3>
                <p>En Estancia del Alba, nos especializamos en ofrecer una experiencia única, combinando elegancia,
                    comodidad y un servicio excepcional.
                </p>

            </div>
            <div class="footer-section">
                <h3 style="color: white">Contáctanos</h3>
                <p>Correo: recepcion@estanciadelalba.com</p>
                <p>Celular: +51 987 836 286</p>
                <div class="social-media">

                    <a href="mailto:recepcion@estanciadelalba.com">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61572457576662" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://wa.me/+51987836286" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/estanciadelalba/" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3 style="color: white">Visítanos</h3>
                <div class="map-container">
                    <iframe width="100%" height="100%" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.624757111126!2d-78.49936459999999!3d-7.1693028000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25bff5ed5a0eb%3A0xc1aef4eb5317a4f9!2sTransportes%20Turismo%20Dias%20-%20Cajamarca!5e0!3m2!1ses-419!2spe!4v1738641149388!5m2!1ses-419!2spe"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="footer-section newsletter">
                <h3 style="color: white">Políticas</h3>
                <p>Consulta nuestros
                    <a href="#" data-bs-toggle="modal" data-bs-target="#terminosModal">términos y condiciones</a>
                </p>
                {{--   <input type="email" placeholder="Enter your email" required> --}}

                {{--  <form action="{{ route('reservar') }}" class="booking__form">
                    <button type="submit">Reservar</button>
                </form> --}}

                <div style="display: flex; justify-content:left">
                    <a href="/reclamaciones"> <img src="assets/images/demo/libro.png" style="width: 50%;"
                            alt="logo"></a>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <p>&copy; <span id="year"></span> Estancia del Alba. Todos los derechos reservados.</p>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p style="color: black"><b>REGLAMENTO INTERNO DEL USUARIO</b></p>
                        <div class="px-4">

                            <p style="color: black;font-size: 15px; ">
                                Estimado(a) huésped leer el REGLAMENTO INTERNO del hotel, tener en cuenta que todos sin
                                excepción, estarán sujetos a este reglamento que se considera como un contrato de
                                consentimiento y deberá ser respetado como tal.
                            </p>

                            <p style="color: black;font-size: 15px; ">
                                1. Check-in (Ingreso) 14:00 hrs. / Check-out (Salida) 11:00 hrs.; fuera de este horario
                                pueden disfrutar de las instalaciones del hotel mientras guardamos su equipaje sin
                                costo.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                2. Early Check-in (Ingreso antes de tiempo) / Late Check-out (salida posterior al
                                horario) tendrá un costo adicional y está sujeto a disponibilidad.
                            </p>
                            <p style="color: black;font-size: 15px;">
                                3. El huésped debe mostrar un documento de identidad válido y vigente para poder
                                realizar su check-in, todo menor de edad deberá ingresar con al menos uno de sus padres
                                o con permiso notarial.
                            </p>
                            <p style="color: black;font-size: 15px;">
                                4. Si Ud. desea prolongar su estadía comunique con 24 horas de anticipación a recepción.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                5. Todos los artículos destinados para el uso de los huéspedes, tales como toallas,
                                lámparas, copas, vasos, libros etc, deben permanecer en la habitación. Dado el caso de
                                la pérdida de alguno de estos artículos se procederá a hacer el cobro en el momento del
                                check out.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                6. Cualquier daño causado por huéspedes a la propiedad del hotel será cancelado por el
                                huésped en el momento del check out.
                            </p>


                            <p style="color: black;font-size: 15px;">
                                7. El hotel solicita a los huéspedes la gentileza de no extender ropas o toallas en las
                                ventanas de las habitaciones; no lanzar objetos por las ventanas.
                            </p>


                            <p style="color: black;font-size: 15px;">
                                8. Las visitas a los huéspedes podrán ser atendidas en los lobbies de recepción, previo
                                registro, mas no en las habitaciones. *Si hubiese una persona extra en la habitación el
                                valor de la ocupación será cargado a la cuenta del cliente.
                            </p>


                            <p style="color: black;font-size: 15px;">
                                9. Las llaves de las habitaciones deben entregarse en recepción en cada momento que el
                                huésped se retire, perderlas implica un costo de S/ 50.00 soles.
                            </p>


                            <p style="color: black;font-size: 15px;">
                                10. Se prohíbe tocar instrumentos musicales, radios o televisores a alto volumen o
                                fiestas ruidosas. Así mismo se informa que el hotel cuenta con un horario de silencio
                                para respetar el descanso de los demás huéspedes evitando hacer ruidos molestos desde
                                las 23:00 hrs. hasta las 07:00 hrs.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                11. Está prohibido fumar dentro de las habitaciones, hacerlo tendrá una penalidad de
                                renta de una noche cargado a la cuenta del cliente. (Ley 28705). Para el huésped en caso
                                de fumar, deberá hacerlo en la terraza la cual tiene área libre ventilada.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                12. Está prohibido el ingreso de armas de fuego, sustancias inflamables, explosivos,
                                estupefacientes y sustancias similares. Para el primer caso relacionado a efectivos
                                policiales, militares o civiles, deberán presentar en recepción su licencia de uso de
                                armas vigente.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                13. Está prohibido el ingreso de animales.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                14. El hotel no será responsable de ninguna manera por cualquier pérdida, robo o daño a
                                las pertenencias del huésped por cualquier causa en las áreas comunes. Los objetos de
                                valor del huésped deberán ser comunicados en recepción durante el check-in, para ser
                                custodiados en la caja fuerte común del hotel.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                15. En caso de reportarse manchas en los colchones, sábanas, cobertores, edredones o
                                toallas producto de su mal uso durante su estadía se cobrará un cargo adicional mínimo
                                de S/ 25.00 soles por prenda por concepto de lavandería, este monto puede incrementar de
                                acuerdo al estado y tamaño de la prenda.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                16. Estancia del Alba se reserva el derecho de permanencia de sus huéspedes, quienes
                                deben respetar las normas contenidas en el presente documento.
                            </p>

                        </div>


                        <p style="color: black"><b>POLITICA DE RESERVA Y CANCELACIÓN</b></p>
                        <div class="px-4">
                            <p style="color: black;font-size: 15px; ">
                                1. Se garantiza la reserva realizando el pago del 100% del hospedaje a través de la
                                página
                                web o mediante nuestro canal de Whatsapp, una vez hecho el check-in. La penalidad de
                                cancelación es 100% y pagos previos son no reembolsables.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                2. Las reservaciones se realizarán por medio del correo electrónico, página web o
                                WhatsApp.
                            </p>
                            <p style="color: black;font-size: 15px;">
                                3. El Hotel enviará una confirmación de disponibilidad en la fecha indicada en la
                                reserva,
                                tras recibir su información y/o solicitud.
                            </p>
                            <p style="color: black;font-size: 15px;">
                                4. No se efectuarán reembolsos, si quieres realizar la modificación de la fecha de tu
                                reserva por motivos de fuerza mayor la puedes reprogramar dentro de los siguientes 90
                                días.
                                Antes de modificar o cancelar tu reserva tenga en cuenta:
                            </p>

                            <ul style="color: black; margin-top: -10px">
                                <div class="room__amenities">

                                    <div class="room__amenities-content" style="width: 100%">
                                        <ul class="room__amenities-list">
                                            <li style="font-size: 15px" class="room__amenities-item"><span><i
                                                        class="fa-regular fa-circle-check"></i></span> Si quieres
                                                modificar
                                                la fecha de tu reserva debes hacerlo 8 días antes para evitar
                                                penalidades.
                                            </li>
                                            <li style="font-size: 15px" class="room__amenities-item"><span><i
                                                        class="fa-regular fa-circle-check"></i></span>
                                                El cambio está sujeto a la disponibilidad de habitaciones y al ajuste de
                                                tarifas por temporada. Si la nueva fecha seleccionada tiene una tarifa
                                                más
                                                alta, debes pagar la diferencia.
                                            </li>
                                            <li style="font-size: 15px" class="room__amenities-item"><span><i
                                                        class="fa-regular fa-circle-check"></i></span>Cancelaciones
                                                antes
                                                de las 24 horas tendrán el 100% de reembolso a favor del cliente.
                                            </li>
                                            <li style="font-size: 15px" class="room__amenities-item"><span><i
                                                        class="fa-regular fa-circle-check"></i></span> Cancelaciones
                                                entre
                                                las 24 horas y 0 horas antes no serán reembolsables.
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </ul>
                        </div>


                        <p style="color: black"><b>POLÍTICA DE NIÑOS</b></p>
                        <div class="px-4">
                            <p style="color: black;font-size: 15px; ">
                                1. Para efectos de la reserva, niños mayores de 5 años cuentan como adultos y deben ser
                                incluidos en el número total de huéspedes.
                            </p>

                            <p style="color: black;font-size: 15px;">
                                2. No contamos con cama supletoria, ni cuna.
                            </p>

                        </div>

                        <p style="color: black"><b>POLÍTICA DE SEGURIDAD</b></p>
                        <div class="px-4">
                            <p style="color: black;font-size: 15px; ">
                                1. Brindamos medidas de seguridad para proteger la información de la tarjeta de crédito,
                                nombre, dirección, correo electrónico y otra información personal que pueda proporcionar
                                en la sección de reserva o contacto de nuestro sitio web.
                            </p>



                        </div>


                    </div>
                    {{--  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div> --}}
                </div>
            </div>

        </div>

        <!-- Bootstrap solo dentro del modal -->



    </footer>
    <script>
        // Set the current year in the footer
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-up"></i></a>
    <!-- scrollToTop ending here -->

    <!-- vendor plugins -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/purecounter_vanilla.js"></script>
    <script src="assets/js/progressbar.min.js"></script>
    <script src="assets/js/custom.js"></script>
    {{--  <script src="https://cdn.jsdelivr.net/npm/bootstrap.native@4.0.0/bootstrap-native.min.js"></script> --}}

    @livewireScripts
    @stack('scripts')

</body>

</html>
