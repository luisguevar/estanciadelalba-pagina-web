@extends('layouts.header')
@section('contenidoPrincipal')
    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image: url(assets/images/demo/seccion-banner.jpeg);">
        <div class="container">
            <div class="page-header__content text-center">
                <h2>Libro Reclamaciones</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Libro Reclamaciones</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========== contact Section start Here========== -->
    <div>

        <div class="container d-flex justify-content-center mt-5">
            <div class="col-md-8">
                <h3 class="mb-4">Libro de Reclamaciones</h3>
                <form id="reclamacionForm">
                    @csrf

                    <!-- Reclamante -->
                    <div class="mb-3">
                        <label class="form-label">Nombre del Reclamante</label>
                        <input type="text" name="cNombreReclamante" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Domicilio</label>
                        <input type="text" name="cDomicilioReclamante" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tipo de Documento</label>
                            <br>
                            <select name="nTipoDocumentoReclamante" class="form-select w-100" required>
                                <option value="1">DNI</option>
                                <option value="2">CE</option>
                                <option value="3">RUC</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">N° Documento</label>
                            <input type="text" name="cNroDocumentoReclamante" class="form-control" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" name="cTelefonoReclamante" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico</label>
                        <input type="email" name="cEmailReclamante" class="form-control" required>
                    </div>


                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tipo de Bien Contratado</label>
                            <br>
                            <select name="nTipoBien" class="form-select w-100" required>


                                <option value="0">Producto</option>
                                <option value="1">Servicio</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Monto Reclamado</label>
                            <br>
                            <input type="number" name="nMontoReclamadoBien" class="form-control" step="0.01" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label ">Moneda</label>
                            <br>
                            <select name="nMoneda" class="form-select w-100" required>
                                <option value="0">Soles</option>
                                <option value="1">Dólares</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Descripción del Bien</label>
                            <br>
                            <textarea name="cDescripcionBien" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tipo de Disconformidad</label>
                            <br>
                            <select name="nTipoDisconformidad" class="form-select w-100" required>
                                <option value="1">Reclamo</option>
                                <option value="2">Queja</option>
                            </select>
                        </div>
                    </div>




                    <div class="mb-3">
                        <label class="form-label">Detalle de la Disconformidad</label>
                        <br>
                        <textarea name="cDetalleDisconformidad" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pedido del Reclamante</label>
                        <textarea name="cPedidoDisconformidad" class="form-control" required></textarea>
                    </div>


                    <br>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="aceptaTerminos" required>
                        <label class="form-check-label" for="aceptaTerminos">
                            Declaro que la información proporcionada es verídica y autorizo el envío del presente formulario
                            como constancia de mi reclamo, asumiendo su validez como firma digital.
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <!-- Botón actualizado con ID -->
                            <button id="btnEnviar" type="submit"
                                style="border:white; margin-top:3px; width: 100%; height: 40px; padding: 5px 10px; text-align: center; 
display: flex; justify-content: center; align-items: center; background-color: #c09b6c; 
color: white; text-decoration: none; border-radius: 4px; font-size: 14px; position: relative;">
                                Enviar
                            </button>

                        </div>
                    </div>

                </form>
            </div>
        </div>

        <script>
            function validarFormulario(data) {
                const errores = [];

                if (!data.cNombreReclamante || data.cNombreReclamante.length > 250 || !/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/.test(data
                        .cNombreReclamante)) {
                    errores.push("Nombre del reclamante inválido (solo letras, hasta 250 caracteres).");
                }

                if (!data.cDomicilioReclamante || data.cDomicilioReclamante.length > 300) {
                    errores.push("Domicilio inválido (hasta 300 caracteres).");
                }

                if (!["1", "2", "3"].includes(data.nTipoDocumentoReclamante)) {
                    errores.push("Tipo de documento inválido.");
                }

                if (!data.cNroDocumentoReclamante) {
                    errores.push("Número de documento es requerido.");
                } else {
                    if (data.nTipoDocumentoReclamante === "1" && !/^\d{8}$/.test(data.cNroDocumentoReclamante)) {
                        errores.push("DNI inválido (8 dígitos numéricos).");
                    } else if (data.nTipoDocumentoReclamante === "3" && !/^(10|20)\d{9}$/.test(data.cNroDocumentoReclamante)) {
                        errores.push("RUC inválido (11 dígitos, comienza en 10 o 20).");
                    }
                }

                if (!/^\d{7,15}$/.test(data.cTelefonoReclamante)) {
                    errores.push("Teléfono inválido (solo números, 7-15 dígitos).");
                }

                if (!/^[\w\.-]+@[\w\.-]+\.\w{2,4}$/.test(data.cEmailReclamante)) {
                    errores.push("Correo electrónico inválido.");
                }

                if (!data.nTipoBien || !["1", "0"].includes(data.nTipoBien)) {
                    errores.push("Tipo de bien contratado inválido.");
                }

                const monto = parseFloat(data.nMontoReclamadoBien);
                if (isNaN(monto) || monto < 0 || monto > 10000) {
                    errores.push("Monto reclamado inválido (máximo 10000).");
                }

                if (!data.cDescripcionBien || data.cDescripcionBien.length > 500) {
                    errores.push("Descripción del bien inválida (hasta 500 caracteres).");
                }

                if (!["1", "2"].includes(data.nTipoDisconformidad)) {
                    errores.push("Tipo de disconformidad inválido.");
                }

                if (!data.cDetalleDisconformidad || data.cDetalleDisconformidad.length > 500) {
                    errores.push("Detalle de disconformidad inválido (hasta 500 caracteres).");
                }

                if (!data.cPedidoDisconformidad || data.cPedidoDisconformidad.length > 500) {
                    errores.push("Pedido del reclamante inválido (hasta 500 caracteres).");
                }

                if (!["0", "1"].includes(data.nMoneda)) {
                    errores.push("Moneda inválida.");
                }

                if (!document.getElementById('aceptaTerminos').checked) {
                    errores.push("Debe aceptar los términos y condiciones.");
                }

                return errores;
            }

            document.getElementById('reclamacionForm').addEventListener('submit', async function(e) {
                e.preventDefault();

                const form = e.target;
                const submitButton = form.querySelector('button[type="submit"], button:not([type])');
                submitButton.disabled = true;
                submitButton.textContent = 'Enviando...';

                const formData = new FormData(form);

                const data = {
                    cNombreReclamante: formData.get('cNombreReclamante')?.trim(),
                    cDomicilioReclamante: formData.get('cDomicilioReclamante')?.trim(),
                    nTipoDocumentoReclamante: formData.get('nTipoDocumentoReclamante'),
                    cNroDocumentoReclamante: formData.get('cNroDocumentoReclamante')?.trim(),
                    cTelefonoReclamante: formData.get('cTelefonoReclamante')?.trim(),
                    cEmailReclamante: formData.get('cEmailReclamante')?.trim(),
                    nTipoBien: formData.get('nTipoBien'),
                    nMontoReclamadoBien: formData.get('nMontoReclamadoBien'),
                    cDescripcionBien: formData.get('cDescripcionBien')?.trim(),
                    nTipoDisconformidad: formData.get('nTipoDisconformidad'),
                    cDetalleDisconformidad: formData.get('cDetalleDisconformidad')?.trim(),
                    cPedidoDisconformidad: formData.get('cPedidoDisconformidad')?.trim(),
                    nMoneda: formData.get('nMoneda'),
                };

                const errores = validarFormulario(data);

                if (errores.length > 0) {
                    alert("Corrija los siguientes errores:\n\n" + errores.join("\n"));
                    submitButton.disabled = false;
                    submitButton.textContent = 'Enviar';
                    return;
                }

                try {
                    window.libroReclamacionApiUrl = "{{ $apiUrl }}";

                    const response = await fetch(window.libroReclamacionApiUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify(data)
                    });


                    const result = await response.json();

                    if (response.ok) {
                        alert('Reclamación enviada con éxito');
                        form.reset();
                    } else {
                        alert('Error al enviar, intente nuevamente');
                    }

                } catch (error) {
                    console.error(error);
                    alert(' Ocurrió un error de red.');
                }

                submitButton.disabled = false;
                submitButton.textContent = 'Enviar';
            });
        </script>


    </div>

    <!-- ========== contact Section ends Here========== -->
@endsection
