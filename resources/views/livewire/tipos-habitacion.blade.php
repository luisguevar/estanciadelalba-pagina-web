<section class="room padding-top padding-bottom">

    <style>
        .btn-brown {
            background-color: #c09b6c;
            /* Marrón */
            border-color: #c09b6c;
            color: white;
        }

        .btn-brown:hover {
            background-color: #967161;
            /* Marrón más claro */
            border-color: #967161;
        }

        .btn-brown:disabled {
            background-color: #d3d3d3;
            /* Gris */
            border-color: #d3d3d3;
            color: #6c757d;
        }
    </style>
    <style>
        .pagination button {
            padding: 8px 16px;
            margin: 0 4px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        .pagination button.active {
            background-color: #007bff;
            color: white;
        }

        .pagination button:hover {
            background-color: #ddd;
        }
    </style>



    <div class="container">

        @if ($exito || $error)

            @if ($exito)
                <div class="col-12 col-lg-12 order-1 order-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reserva Registrada.</h5>

                            <p>
                                Tu reserva ha sido registrada, se están validando los datos y pronto recibirás un correo
                                de
                                confirmación en <b>"{{ $cResCorreoTitular }}"</b>. Para más información puedes
                                comunicarte a

                                <a
                                    href="mailto:recepcion@estanciadelalba.com">recepcion@estanciadelalba.com</a>
                            </p>


                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12 col-lg-12 order-1 order-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ocurrió un problema con tu Reserva.</h5>

                            <p>
                                Tu reserva no ha sido registrada correctamente. Para más información puedes comunicarte
                                a
                                recepcion@estanciadelalba.com
                            </p>


                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @endif
        @else
            <div>
                @if ($bPago)



                    <div class="row">

                        <div class="col-12 col-lg-8 order-2 order-lg-1">
                            <div class="section-header">
                                <div class="section-header__content">
                                    <p class="subtitle">Completar Reserva</p>
                                    <h2>Detalle de la Estancia</h2>
                                </div>
                            </div>
                            <div class="booking__wrapper p-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <form class="booking__form">
                                            <div class="row justify-content-center g-4">
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResNombreTitular" class="form-label">Nombre del
                                                            Titular</label>
                                                        <div class="booking__form-input">
                                                            <input type="text" class="form-control"
                                                                wire:model="cResNombreTitular" placeholder="Nombres"
                                                                id="cResNombreTitular">
                                                            @error('cResNombreTitular')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResApellidoTitular" class="form-label">Apellidos
                                                            del
                                                            Titular</label>
                                                        <div class="booking__form-input">
                                                            <input type="text" class="form-control"
                                                                wire:model="cResApellidoTitular" placeholder="Apellidos"
                                                                id="cResApellidoTitular">
                                                            @error('cResApellidoTitular')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResCorreoTitular" class="form-label">Correo</label>
                                                        <div class="booking__form-input">
                                                            <input type="email" class="form-control"
                                                                wire:model="cResCorreoTitular" placeholder="Correo"
                                                                id="cResCorreoTitular">
                                                            @error('cResCorreoTitular')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResNroDocumentoTitular"
                                                            class="form-label">Documento de
                                                            Identidad</label>
                                                        <div class="booking__form-input">
                                                            <input type="text" class="form-control"
                                                                wire:model="cResNroDocumentoTitular"
                                                                placeholder="Documento de Identidad"
                                                                id="cResNroDocumentoTitular">
                                                            @error('cResNroDocumentoTitular')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResNroCelularTitular"
                                                            class="form-label">Celular</label>
                                                        <div class="booking__form-input">
                                                            <input type="text" class="form-control"
                                                                wire:model="cResNroCelularTitular" placeholder="Celular"
                                                                id="cResNroCelularTitular">
                                                            @error('cResNroCelularTitular')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResNroCelularReferencia" class="form-label">Número
                                                            de
                                                            Referencia <span
                                                                style="color: #a5a9ad">(Opcional)</span></label>
                                                        <div class="booking__form-input">
                                                            <input type="text" class="form-control"
                                                                wire:model="cResNroCelularReferencia"
                                                                placeholder="Número de Contacto de Referencia"
                                                                id="cResNroCelularReferencia">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="nResNroAdultos" class="form-label">Adultos</label>
                                                        <div class="booking__form-input">
                                                            <input type="number" class="form-control"
                                                                wire:model="nResNroAdultos" placeholder="Adultos"
                                                                id="nResNroAdultos" min="0" max="100">

                                                            @error('nResNroAdultos')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="nResNroNinos" class="form-label">Niños</label>
                                                        <div class="booking__form-input">
                                                            <input type="number" class="form-control"
                                                                wire:model="nResNroNinos" placeholder="Niños"
                                                                id="nResNroNinos" min="0" max="100">
                                                           {{--  @error('nResNroNinos')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="dResFechaCheckIn" class="form-label">Check
                                                            In</label>
                                                        <div class="booking__form-date">
                                                            <input type="text" class="date-input form-control"
                                                                wire:model="dResFechaCheckIn" placeholder="Check In"
                                                                id="dResFechaCheckIn" disabled>
                                                            @error('dResFechaCheckIn')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="dResFechaCheckOut" class="form-label">Check
                                                            Out</label>
                                                        <div class="booking__form-date">
                                                            <input type="text" class="date-input form-control"
                                                                wire:model="dResFechaCheckOut" placeholder="Check Out"
                                                                id="dResFechaCheckOut" disabled>
                                                            @error('dResFechaCheckOut')
                                                                <div style="color: red; font-size:small"> Campo requerido.
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="booking__form-inputgroup">
                                                        <label for="cResObservaciones" class="form-label">Comentarios
                                                            <span style="color: #a5a9ad">(Opcional)</span></label>
                                                        <div class="booking__form-input">
                                                            <textarea class="form-control textarea" wire:model="cResObservaciones" placeholder="Comentarios..."
                                                                id="cResObservaciones"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--  <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">RESERVAR</button>
                                </div> --}}
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-lg-4 order-1 order-lg-2">
                            <div class="card">
                                <div class="card-body">
                                    <div style="display: flex; justify-content:space-between">
                                        <div>
                                            <h5 class="card-title">Mi Reserva</h5>
                                        </div>
                                        <div>
                                            <div wire:ignore id="countdown"></div>
                                        </div>
                                    </div>



                                    <p>
                                        @if (count($selecciones) > 0)
                                            <div class="mt-3">
                                                {{-- <h4>Resumen de Habitaciones Seleccionadas</h4> --}}
                                                <ul>
                                                    <table style="width: 100%;">
                                                        @foreach ($selecciones as $idTipo => $cantidad)
                                                            <tr>
                                                                <td style="width:90%">
                                                                    <b>
                                                                        {{ $lstTiposHabitacion->firstWhere('id', $idTipo)['cNombreTipo'] }}</b>
                                                                </td>
                                                                {{--  <td style="width:3%"><button
                                                        wire:click="disminuirHabitacion({{ $idTipo }})"
                                                        class="btn btn-brown btn-sm"
                                                        {{ $cantidad == 0 ? 'disabled' : '' }}>-</button>
                                                </td>
                                                <td style="width:4%" class="text-center">
                                                    {{ $cantidad }}
                                                </td>

                                                <td style="width:30%">
                                                    <button
                                                        wire:click="aumentarHabitacion({{ $idTipo }})"
                                                        class="btn  btn-brown btn-sm"
                                                        {{ $cantidad == $lstTiposHabitacion->firstWhere('id', $idTipo)['nCantidadHabitaciones'] ? 'disabled' : '' }}>+</button>
                                                </td> --}}


                                                            </tr>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <ul>
                                                                        <table style="width: 100%; ">
                                                                            @foreach ($habitacionesSeleccionadas[$idTipo] as $habitacion)
                                                                                <tr>
                                                                                    <td style="width: 80%">
                                                                                        Habitación Número
                                                                                        {{ $habitacion['nNroHabitacion'] }}
                                                                                    </td>
                                                                                    <td style="width: 20%"
                                                                                        class="text-end">
                                                                                        S/.
                                                                                        {{ $habitacion['nPrecioTotal'] }}
                                                                                    </td>

                                                                                </tr>
                                                                            @endforeach
                                                                        </table>




                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </table>

                                                    <table style="width: 100%;">
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>
                                                                    <b>N° Máximo de huéspedes:</b>
                                                                </p>
                                                            </td>
                                                            <td colspan="1">
                                                                <p>
                                                                    <b>{{ $maximoHuespedes }}</b>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <table style="width: 100%;">
                                                        <tr>
                                                            <td colspan="3">
                                                                <p>
                                                                    <b>Total {{ $nTotalNoches }}
                                                                        {{ $nTotalNoches === 1 ? 'noche' : 'noches' }}:</b>

                                                                </p>
                                                            </td>
                                                            <td colspan="1" class="text-end">
                                                                <p>
                                                                    <b>S/ {{ $nTotalPrecio }}</b>
                                                                </p>
                                                            </td>
                                                        </tr>

                                                        acepto los terminos
                                                    </table>


                                                    <div style="margin-top: 10px;">
                                                        <label style="display: flex; align-items: center;">
                                                            <input type="checkbox" wire:model="bAceptar"
                                                                id="bAceptar">

                                                            <span style="margin-left: 5px;">Acepto los <a
                                                                    href="#" target="_blank">términos y
                                                                    condiciones</a></span>
                                                        </label>

                                                        @error('bAceptar')
                                                            <div style="color: red; font-size:small"> Campo requerido.
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div
                                                        style="display: flex; justify-content: end; margin-top: 10px;">
                                                        <a href="#" id="btn_pagar"
                                                            data-total="{{ $nTotalPrecio * 100 }}"
                                                            onclick="return false;" class="custom-btn"
                                                            style=" margin-top:3px; width: 100%; height: 40px; padding: 5px 10px; text-align: center; display: flex; justify-content: center; align-items: center; background-color: #c09b6c; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;">
                                                            <span>Realizar Pago</span>
                                                        </a>


                                                    </div>


                                                    {{-- <div>
                                                        <button id="btn_pagar" type="button"
                                                            class="btn btn-primary">Pagar</button>
                                                    </div> --}}

                                                    <style>
                                                        /* Estilos para el spinner */
                                                        .spinner {
                                                            width: 16px;
                                                            height: 16px;
                                                            border: 2px solid white;
                                                            border-top: 2px solid transparent;
                                                            border-radius: 50%;
                                                            animation: spin 0.8s linear infinite;
                                                            display: inline-block;
                                                            margin-right: 8px;
                                                        }

                                                        /* Animación del spinner */
                                                        @keyframes spin {
                                                            from {
                                                                transform: rotate(0deg);
                                                            }

                                                            to {
                                                                transform: rotate(360deg);
                                                            }
                                                        }

                                                        /* Estilo cuando el botón está deshabilitado */
                                                        .custom-btn[disabled] {
                                                            background-color: #a08b5c !important;
                                                            /* Color más opaco */
                                                            cursor: not-allowed;
                                                            pointer-events: none;
                                                        }
                                                    </style>



                                                    <!-- Botón CONTINUAR -->


                                                </ul>
                                            </div>


                                        @endif
                                    </p>



                                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                @else
                    <div class="row">

                        @if (count($tiposHabitacion) == 0)

                            <div class="col-12 col-lg-12 order-1 order-lg-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">No se econtraron habitaciones.</h5>

                                        <p>
                                            Seleccione fechas diferente para continuar.
                                        </p>


                                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-lg-8 order-2 order-lg-1">
                                <div class="room__wrapper">

                                    <div class="row g-4">
                                        @foreach ($tiposHabitacion as $tipo)
                                            <div class="col-xl-6 col-md-6">
                                                <div class="room__item room__item--style1">
                                                    <div class="room__item-inner">
                                                        <div class="room__item-thumb">

                                                            @if (isset($selecciones[$tipo['id']]))
                                                                <span
                                                                    style="   
                                position: absolute;
                                color: white;
                                font-size: 11px;
                                font-weight: bold;
                                color: #c09b6c;
                                background-color: transparent;
                                border: 1px solid #ffffff;
                                border-radius: 5px;
                                z-index: 10;
                                text-align: center;
                                visibility: visible;
                                border-radius: 5px;
                                top: 10px;
                                right: 10px;
                                padding: 5px 10px;">Seleccionado</span>
                                                            @else
                                                            @endif

                                                            <img style="    width: 450px;    height: 380px;"
                                                                src="{{ $tipo['cImagen'] }}" alt="room image">

                                                        </div>
                                                        <div class="room__item-content">
                                                            <!-- Etiqueta estado -->


                                                            <div class="room__item-header">
                                                                <div class="room__item-name">
                                                                    <ul class="rating">
                                                                        <li class="rating__star"><i
                                                                                class="fa-solid fa-star"></i>
                                                                        </li>
                                                                        <li class="rating__star"><i
                                                                                class="fa-solid fa-star"></i>
                                                                        </li>
                                                                        <li class="rating__star"><i
                                                                                class="fa-solid fa-star"></i>
                                                                        </li>
                                                                       {{--  <li class="rating__star"><i
                                                                                class="fa-solid fa-star"></i>
                                                                        </li>
                                                                        <li class="rating__star"><i
                                                                                class="fa-solid fa-star"></i>
                                                                        </li> --}}
                                                                    </ul>
                                                                    <h3><a onclick="return false"
                                                                            href="room-details.html">
                                                                            <span
                                                                                style="font-size: medium">{{ $tipo['cNombreTipo'] }}</span>
                                                                        </a></h3>
                                                                    <p>{{ $tipo['cNombreNivel'] }}</p>

                                                                </div>
                                                                <div class="room__item-price">
                                                                    <h3 style="font-size: x-large;"> S/
                                                                        {{ $tipo['nPrecioTotal'] }}</h3>
                                                                    <p>{{ $tipo['nTotalNoches'] }}
                                                                        {{ $tipo['nTotalNoches'] > 1 ? 'noches' : 'noche' }}
                                                                    </p>


                                                                </div>
                                                            </div>
                                                            <div class="room__item-body" style="margin-top: -12px">
                                                                <p>{{ $tipo['cDescripcionHabitacion'] }}</p>
                                                                <ul class="room__feature">
                                                                    <li class="room__feature-item">
                                                                        <div class="room__feature-icon">

                                                                            <img style="width:25px; height: 25px; "
                                                                                src="assets/images/room/icon/personas.png"
                                                                                alt="feature icon">
                                                                        </div>
                                                                        <div class="room__feature-text">
                                                                            <p
                                                                                style="font-size: 14px;    margin-top: 10px;">
                                                                                {{ $tipo['nNumeroPersonas'] }}

                                                                                {{ $tipo['nNumeroPersonas'] > 1 ? 'Huéspedes' : 'Huésped' }}
                                                                            </p>
                                                                        </div>
                                                                    </li>

                                                                    @foreach ($tipo['habitacion_servicios'] as $servicio)
                                                                        <li class="room__feature-item">
                                                                            <div class="room__feature-icon">


                                                                                @if ($servicio['servicio_id'] === 1)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/wifi.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($servicio['servicio_id'] === 2)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/ducha.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($servicio['servicio_id'] === 3)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/vista.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($servicio['servicio_id'] === 4)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/tv.png"
                                                                                        alt="feature icon">
                                                                                @endif


                                                                            </div>
                                                                            <div class="room__feature-text">


                                                                                @if ($servicio['servicio_id'] === 1)
                                                                                    <p
                                                                                        style="font-size: 14px;    margin-top: 10px;">
                                                                                        Wi-Fi</p>
                                                                                @endif
                                                                                @if ($servicio['servicio_id'] === 2)
                                                                                    <p
                                                                                        style="font-size: 14px;    margin-top: 10px;">
                                                                                        Agua caliente</p>
                                                                                @endif
                                                                                @if ($servicio['servicio_id'] === 3)
                                                                                    <p
                                                                                        style="font-size: 14px;    margin-top: 10px;">
                                                                                        Vistas</p>
                                                                                @endif
                                                                                @if ($servicio['servicio_id'] === 4)
                                                                                    <p
                                                                                        style="font-size: 14px;    margin-top: 10px;">
                                                                                        Smart tv</p>
                                                                                @endif
                                                                                {{--  <p>{{ $servicio['cNombreServicio'] }}</p> --}}
                                                                                <!-- Mostrar el nombre del servicio -->
                                                                            </div>
                                                                        </li>
                                                                    @endforeach

                                                                    @foreach ($tipo['lstCamas'] as $cama)
                                                                        <li class="room__feature-item">
                                                                            <div class="room__feature-icon">


                                                                                @if ($cama['tipoCama_id'] === 1)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/doble.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($cama['tipoCama_id'] === 2)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/individual.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($cama['tipoCama_id'] === 3)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/camarote.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($cama['tipoCama_id'] === 4)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/queen.png"
                                                                                        alt="feature icon">
                                                                                @endif

                                                                                @if ($cama['tipoCama_id'] === 5)
                                                                                    <img style="width:25px; height: 25px; "
                                                                                        src="assets/images/room/icon/king.png"
                                                                                        alt="feature icon">
                                                                                @endif
                                                                            </div>
                                                                            <div class="room__feature-text">
                                                                                <p
                                                                                    style="font-size: 14px;    margin-top: 10px;">
                                                                                    @if ($cama['tipoCama_id'] === 1)
                                                                                        <span>Doble</span>
                                                                                    @endif

                                                                                    @if ($cama['tipoCama_id'] === 2)
                                                                                        <span>Individual</span>
                                                                                    @endif

                                                                                    @if ($cama['tipoCama_id'] === 3)
                                                                                        <span>Camarote</span>
                                                                                    @endif

                                                                                    @if ($cama['tipoCama_id'] === 4)
                                                                                        <span>Queen</span>
                                                                                    @endif

                                                                                    @if ($cama['tipoCama_id'] === 5)
                                                                                        <span>King</span>
                                                                                    @endif

                                                                                    <span
                                                                                        style="text-transform: lowercase;">({{ $cama['nCantidad'] }})</span>

                                                                                </p>
                                                                                <!-- Mostrar el nombre del servicio -->
                                                                            </div>
                                                                        </li>
                                                                    @endforeach





                                                                    {{--  <li class="room__feature-item">
                                            <div class="room__feature-icon">
                                                <img src="assets/images/room/icon/3.png" alt="feature icon">
                                            </div>
                                            <div class="room__feature-text">
                                                <p>free wifi</p>
                                            </div>
                                        </li>

                                        <li class="room__feature-item">
                                            <div class="room__feature-icon">
                                                <img src="assets/images/room/icon/4.png" alt="feature icon">
                                            </div>
                                            <div class="room__feature-text">
                                                <p>36 sqm</p>
                                            </div>
                                        </li>

                                        <li class="room__feature-item">
                                            <div class="room__feature-icon">
                                                <img src="assets/images/room/icon/5.png" alt="feature icon">
                                            </div>
                                            <div class="room__feature-text">
                                                <p>Shower</p>
                                            </div>
                                        </li>

                                        <li class="room__feature-item">
                                            <div class="room__feature-icon">
                                                <img src="assets/images/room/icon/6.png" alt="feature icon">
                                            </div>
                                            <div class="room__feature-text">
                                                <p>Breakfast</p>
                                            </div>
                                        </li> --}}
                                                                </ul>
                                                                <!-- Botón para seleccionar o deseleccionar el tipo de habitación -->
                                                                @if (isset($selecciones[$tipo['id']]))
                                                                    <!-- Si el tipo de habitación ya está seleccionado, mostrar el botón "DESELECCIONAR" -->
                                                                    {{-- <button wire:click="deseleccionarHabitacion({{ $tipo['id'] }})"
                                        class="btn btn-warning">
                                        DESELECCIONAR
                                    </button> --}}

                                                                    <a href="#" onclick="return false;"
                                                                        wire:click="deseleccionarHabitacion({{ $tipo['id'] }})"
                                                                        style="    font-size: 13px;
                                                        padding: 7px 9px;
                                                        line-height: 1;
                                                        /* min-width: auto; */
                                                        /* height: auto; */
                                                        display: inline-block;
                                                            color:white"
                                                                        class="custom-btn"><span>Remover</span></a>
                                                                @else
                                                                    <!-- Si el tipo de habitación no está seleccionado, mostrar el botón "SELECCIONAR" -->
                                                                    {{-- <button wire:click="seleccionarHabitacion({{ $tipo['id'] }})"
                                        class="btn btn-primary" {{ $tipo['nCantidadHabitaciones']==0 ? 'disabled'
                                        : '' }}>
                                        SELECCIONAR
                                    </button> --}}

                                                                    <a href="#" onclick="return false;"
                                                                        class="custom-btn"
                                                                        wire:click="seleccionarHabitacion({{ $tipo['id'] }})"
                                                                        {{ $tipo['nCantidadHabitaciones'] == 0 ? 'disabled' : '' }}
                                                                        style="    font-size: 13px;
                                                            padding: 7px 9px;
                                                            line-height: 1;
                                                            /* min-width: auto; */
                                                            /* height: auto; */
                                                            display: inline-block;
                                                            color:white">
                                                                        <span>Seleccionar</span>
                                                                    </a>
                                                                @endif




                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div>
                                    <div class="mt-5 text-center">
                                        <!-- Paginación personalizada con formato Bootstrap -->
                                        <nav aria-label="Room listing Pagination">
                                            <ul class="pagination justify-content-center">
                                                <!-- Botón de "Anterior" -->
                                                @if ($tiposHabitacion->currentPage() > 1)
                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            wire:click="goToPage({{ $tiposHabitacion->currentPage() - 1 }})"
                                                            href="#" onclick="return false;">
                                                            <i class="fa-solid fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i
                                                                class="fa-solid fa-angle-left"></i></span>
                                                    </li>
                                                @endif

                                                <!-- Páginas numeradas -->
                                                @for ($i = 1; $i <= $tiposHabitacion->lastPage(); $i++)
                                                    <li
                                                        class="page-item {{ $i == $tiposHabitacion->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            wire:click="goToPage({{ $i }})" href="#"
                                                            onclick="return false;">{{ $i }}</a>
                                                    </li>
                                                @endfor

                                                <!-- Botón de "Siguiente" -->
                                                @if ($tiposHabitacion->currentPage() < $tiposHabitacion->lastPage())
                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            wire:click="goToPage({{ $tiposHabitacion->currentPage() + 1 }})"
                                                            href="#" onclick="return false;">
                                                            <i class="fa-solid fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <span class="page-link"><i
                                                                class="fa-solid fa-angle-right"></i></span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                    {{--  {{ $tiposHabitacion->links() }} --}}
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 order-1 order-lg-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="display: flex; justify-content:space-between">
                                            <div>
                                                <h5 class="card-title">Mi Reserva</h5>
                                            </div>
                                            <div>
                                                <div wire:ignore id="countdown"></div>
                                            </div>
                                        </div>


                                        @if (count($selecciones) == 0)
                                            <p class="card-text">Seleccione una habitación disponible para continuar.
                                            </p>
                                        @endif


                                        <p>
                                            @if (count($selecciones) > 0)
                                                <div class="mt-3">
                                                    {{-- <h4>Resumen de Habitaciones Seleccionadas</h4> --}}
                                                    <ul>
                                                        <table style="width: 100%;">
                                                            @foreach ($selecciones as $idTipo => $cantidad)
                                                                <tr>
                                                                    <td style="width:90%">
                                                                        <b>
                                                                            {{ $lstTiposHabitacion->firstWhere('id', $idTipo)['cNombreTipo'] }}</b>
                                                                    </td>
                                                                    <td style="width:3%"><button
                                                                            wire:click="disminuirHabitacion({{ $idTipo }})"
                                                                            class="btn btn-brown btn-sm"
                                                                            {{ $cantidad == 0 ? 'disabled' : '' }}>-</button>
                                                                    </td>
                                                                    <td style="width:4%" class="text-center">
                                                                        {{ $cantidad }}
                                                                    </td>

                                                                    <td style="width:30%">
                                                                        <button
                                                                            wire:click="aumentarHabitacion({{ $idTipo }})"
                                                                            class="btn  btn-brown btn-sm"
                                                                            {{ $cantidad == $lstTiposHabitacion->firstWhere('id', $idTipo)['nCantidadHabitaciones'] ? 'disabled' : '' }}>+</button>
                                                                    </td>


                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4">
                                                                        <ul>
                                                                            <table style="width: 100%; ">
                                                                                @foreach ($habitacionesSeleccionadas[$idTipo] as $habitacion)
                                                                                    <tr>
                                                                                        <td style="width: 80%">
                                                                                            Habitación Número
                                                                                            {{ $habitacion['nNroHabitacion'] }}
                                                                                        </td>
                                                                                        <td style="width: 20%"
                                                                                            class="text-end">
                                                                                            S/.
                                                                                            {{ $habitacion['nPrecioTotal'] }}
                                                                                        </td>

                                                                                    </tr>
                                                                                @endforeach
                                                                            </table>




                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </table>

                                                        <table style="width: 100%;">
                                                            <tr>
                                                                <td colspan="3">
                                                                    <p>
                                                                        <b>N° Máximo de huéspedes:</b>
                                                                    </p>
                                                                </td>
                                                                <td colspan="1">
                                                                    <p>
                                                                        <b>{{ $maximoHuespedes }}</b>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        {{--  <table style="width: 100%;">
                                            <tr>
                                                <td colspan="3">
                                                    <p>
                                                        <b>Total {{ $nTotalNoches }} noches:</b>
                                                    </p>
                                                </td>
                                                <td colspan="1" class="text-end">
                                                    <p>
                                                        <b>S/ {{ $nTotalPrecio }}</b>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table> --}}



                                                        <div
                                                            style="display: flex; justify-content: end; margin-top: 10px;">
                                                            <a href="#" onclick="return false;"
                                                                class="custom-btn" wire:click="continuar"
                                                                style=" margin-top:3px; width: 100%; height: 40px; padding: 5px 10px; text-align: center; display: flex; justify-content: center; align-items: center; background-color: #c09b6c; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;">
                                                                <span>Continuar</span>
                                                            </a>
                                                        </div>


                                                        <!-- Botón CONTINUAR -->


                                                    </ul>
                                                </div>


                                            @endif
                                        </p>



                                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        @endif






    </div>
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

    <script>
        // Duración del contador en segundos (5 minutos)
        var countdownDuration = 5 * 60;
        var countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            var minutes = Math.floor(countdownDuration / 60);
            var seconds = countdownDuration % 60;

            // Agregar un cero delante si es un solo dígito
            seconds = seconds < 10 ? '0' + seconds : seconds;
            countdownElement.innerHTML = minutes + ":" + seconds;

            if (countdownDuration > 0) {
                countdownDuration--;
            } else {
                window.location.href = "/";
            }
        }

        // Actualizar cada segundo
        setInterval(updateCountdown, 1000);
    </script>
    <script src="https://checkout.culqi.com/js/v4"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {

            // 🟢 Delegación de eventos: Capturar clicks en un contenedor padre
            document.body.addEventListener('click', function(e) {
                const btnPagar = e.target.closest('#btn_pagar'); // Busca el botón en el evento click
                if (!btnPagar) return; // Si no es el botón, no hace nada


            


                // Obtener los campos
                const bAceptar = document.getElementById('bAceptar'); // checkbox
                const nombreInput = document.getElementById('cResNombreTitular'); // text
                const apellidoInput = document.getElementById('cResApellidoTitular'); // text
                const correoInput = document.getElementById('cResCorreoTitular'); // correo
                const documentoInput = document.getElementById('cResNroDocumentoTitular'); // text
                const celularInput = document.getElementById('cResNroCelularTitular'); // text
                const adultosInput = document.getElementById('nResNroAdultos'); // int (>0)
                const ninosInput = document.getElementById('nResNroNinos'); // int (>=0)


                if (!bAceptar.checked) {
                    alert("⚠️ Debes aceptar los términos y condiciones para continuar.");
                    return;
                }
                // Función para validar campos vacíos
                function validarCampo(input, mensaje) {
                    if (!input.value.trim()) {
                        alert(`⚠️ ${mensaje}`);
                        input.style.border = "2px solid red";
                        input.focus();
                        return false;
                    }
                    input.style.border = ""; // Restablece el borde si es válido
                    return true;
                }

                // Función para validar correo electrónico
                function validarCorreo(input) {
                    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!regexCorreo.test(input.value.trim())) {
                        alert("⚠️ Ingresa un correo electrónico válido.");
                        input.style.border = "2px solid red";
                        input.focus();
                        return false;
                    }
                    input.style.border = "";
                    return true;
                }

                // Función para validar números enteros (>=0 o >0 según el caso)
                function validarEntero(input, mensaje, min) {
                    const valor = parseInt(input.value.trim(), 10);
                    if (isNaN(valor) || valor < min) {
                        alert(`⚠️ ${mensaje}`);
                        input.style.border = "2px solid red";
                        input.focus();
                        return false;
                    }
                    input.style.border = "";
                    return true;
                }

                // Validaciones
                if (!validarCampo(nombreInput, "El campo 'Nombre del Titular' es obligatorio.")) return;
                if (!validarCampo(apellidoInput, "El campo 'Apellido del Titular' es obligatorio.")) return;
                if (!validarCorreo(correoInput)) return;
                if (!validarCampo(documentoInput, "El campo 'Número de Documento' es obligatorio.")) return;
                if (!validarCampo(celularInput, "El campo 'Número de Celular' es obligatorio.")) return;
                if (!validarEntero(adultosInput, "Debe haber al menos 1 adulto.", 1)) return;
                if (!validarEntero(ninosInput, "El número de niños debe ser 0 o mayor.", 0)) return;


                const totalPrecio = btnPagar.getAttribute("data-total") || 0;
                const CULQI_PUBLIC_KEY = "{{ $CULQI_PUBLIC_KEY }}";

                Culqi.publicKey = CULQI_PUBLIC_KEY;
                Culqi.settings({
                    title: 'Estancia Del Alba',
                    currency: 'PEN',
                    amount: parseInt(totalPrecio),
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
                        logo: "https://scontent.ftru7-1.fna.fbcdn.net/v/t39.30808-6/475910176_122105542094748585_2097422628005241738_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEpKHctnYqyxmAl_VozHPvSsmhnwRN9UvOyaGfBE31S86ZApxcOOGYcuy2tEAuqMHnMoxusU9jgzgN_FOBfye4k&_nc_ohc=jiIwsRaMe20Q7kNvgEO6l1S&_nc_oc=AdgaAtYLhw74fgVw8FoLSBP4I36oe1HKHBtv97zpv1DGPbczioLNk7R1l5mrytmxk0o&_nc_zt=23&_nc_ht=scontent.ftru7-1.fna&_nc_gid=A3U3yz9iMDuuq8biQJ6fqyK&oh=00_AYC3IEBSV_dGkArw_jKEexvAhI6MR0dxKBMMl0Veaz4vWA&oe=67B1D67A",
                        bannerColor: '#13172B', // hexadecimal
                    }
                });

                Culqi.open();
                e.preventDefault();
            });

            window.culqi = function() {
                if (Culqi.token) {
                    const token = Culqi.token.id;

                    // 🔴 Cerrar el modal de Culqi
                    Culqi.close();

                    // 🔵 Mostrar el loader
                    document.getElementById('loader').style.display = "flex";

                    // 🔵 Emitir evento a Livewire
                    Livewire.emit('procesarPago', token);
                } else {
                    console.log('Error: ', Culqi.error);
                }
            };


            /*  window.addEventListener('pago-exitoso', function() {
                        ocultarLoader();
                        window.location.href = "/";
                    });

                    window.addEventListener('pago-fallido', function() {
                        ocultarLoader();
                        alert('Hubo un problema con el pago. Inténtalo nuevamente.');
                    });
             */
            function ocultarLoader() {
                loader.style.display = "none";
            }
        });
    </script> --}}


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.addEventListener("click", function(e) {
                const btnPagar = e.target.closest("#btn_pagar");
                if (!btnPagar) return;

                if (!validarFormulario()) return;

                iniciarPago(btnPagar.getAttribute("data-total") || 0);
                e.preventDefault();
            });

            window.culqi = function() {
                if (Culqi.token) {
                    procesarPago(Culqi.token.id);
                } else {
                    console.log("Error: ", Culqi.error);
                }
            };
        });

        function validarFormulario() {
            const campos = [{
                    id: "bAceptar",
                    tipo: "checkbox",
                    mensaje: "Debes aceptar los términos y condiciones para continuar."
                },
                {
                    id: "cResNombreTitular",
                    tipo: "text",
                    mensaje: "El campo 'Nombre del Titular' es obligatorio."
                },
                {
                    id: "cResApellidoTitular",
                    tipo: "text",
                    mensaje: "El campo 'Apellido del Titular' es obligatorio."
                },
                {
                    id: "cResCorreoTitular",
                    tipo: "email",
                    mensaje: "Ingresa un correo electrónico válido."
                },
                {
                    id: "cResNroDocumentoTitular",
                    tipo: "text",
                    mensaje: "El campo 'Número de Documento' es obligatorio."
                },
                {
                    id: "cResNroCelularTitular",
                    tipo: "text",
                    mensaje: "El campo 'Número de Celular' es obligatorio."
                },
                {
                    id: "nResNroAdultos",
                    tipo: "number",
                    min: 1,
                    mensaje: "Debe haber al menos 1 adulto."
                },
               /*  {
                    id: "nResNroNinos",
                    tipo: "number",
                    min: 0,
                    mensaje: "El número de niños debe ser 0 o mayor."
                } */
            ];

            for (const campo of campos) {
                const input = document.getElementById(campo.id);
                if (!input) continue;

                if (campo.tipo === "checkbox" && !input.checked) {
                    alert(`⚠️ ${campo.mensaje}`);
                    return false;
                }

                if (campo.tipo === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim())) {
                    alert(`⚠️ ${campo.mensaje}`);
                    marcarError(input);
                    return false;
                }

                if (campo.tipo === "number" && (isNaN(parseInt(input.value.trim(), 10)) || parseInt(input.value, 10) < campo
                        .min)) {
                    alert(`⚠️ ${campo.mensaje}`);
                    marcarError(input);
                    return false;
                }

                if (campo.tipo === "text" && !input.value.trim()) {
                    alert(`⚠️ ${campo.mensaje}`);
                    marcarError(input);
                    return false;
                }

                limpiarError(input);
            }
            return true;
        }

        function marcarError(input) {
            input.style.border = "2px solid red";
            input.focus();
        }

        function limpiarError(input) {
            input.style.border = "";
        }

        function iniciarPago(totalPrecio) {
            const CULQI_PUBLIC_KEY = "{{ $CULQI_PUBLIC_KEY }}";
            Culqi.publicKey = CULQI_PUBLIC_KEY;
            Culqi.settings({
                title: "Estancia Del Alba",
                currency: "PEN",
                amount: parseInt(totalPrecio),
                order: "ord_live_0CjjdWhFpEAZlxlz",
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
                    logo: "{{ asset('assets/images/EDA.jpg') }}",
                    bannerColor: "#13172B",
                },
            });
            Culqi.open();
        }

        function procesarPago(token) {
            Culqi.close();
            document.getElementById("loader").style.display = "flex";
            Livewire.emit("procesarPago", token);
        }

        function ocultarLoader() {
            document.getElementById("loader").style.display = "none";
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsencrypt/3.2.1/jsencrypt.min.js"></script>


</section>
