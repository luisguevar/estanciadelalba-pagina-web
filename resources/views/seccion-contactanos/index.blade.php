@extends('layouts.header')
@section('contenidoPrincipal')
    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image: url(assets/images/demo/seccion-banner.jpeg);">
        <div class="container">
            <div class="page-header__content text-center">
                <h2>Contáctanos</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contáctanos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========== contact Section start Here========== -->
    <section class="contact padding-top padding-bottom">
        <div class="container">
            <div class="contact__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="contact__info">
                            <div class="common-header">
                                <p class="subtitle">Estancia del Alba</p>
                                <h2>Ponte en contacto con nosotros</h2>
                            </div>
                            <p>Estamos aquí para ayudarte. Si tienes alguna consulta, sugerencia o simplemente deseas
                                comunicarte con nosotros, no dudes en escribirnos. Te responderemos lo antes posible.
                            </p>
                            <ul class="contact__info-list">
                                <li class="contact__info-item">
                                    <div class="contact__info-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6>Dirección</h6>
                                        <p> Av. Vía de Evitamiento Sur 1260, Cajamarca</p>
                                    </div>
                                </li>
                                <li class="contact__info-item">
                                    <div class="contact__info-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6>Número Celular</h6>
                                        <p>+51 987 836 286 </p>
                                    </div>
                                </li>
                                <li class="contact__info-item">
                                    <div class="contact__info-icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6>Correo</h6>
                                        <p><a href="mailto:support@sitename.com">recepcion@estanciadelalba.com</a> <br>
                                            {{-- <a href="mailto:info@gmail.com">info@gmail.com</a> --}}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div>
                            {{-- Componente Livewire --}}
                            @livewire('contactanos')
                        </div>
                    
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== contact Section ends Here========== -->





    <!-- ========== Map Section start Here========== -->
    <div class="map paddding-top padding-bottom">
        <div class="container">
            <div class="map__wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.624757111126!2d-78.49936459999999!3d-7.1693028000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25bff5ed5a0eb%3A0xc1aef4eb5317a4f9!2sTransportes%20Turismo%20Dias%20-%20Cajamarca!5e0!3m2!1ses-419!2spe!4v1738641149388!5m2!1ses-419!2spe"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- ========== Map Section ends Here========== -->
@endsection
