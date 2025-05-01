@extends('layouts.header')
@section('contenidoPrincipal')
    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image: url(assets/images/demo/seccion-banner.jpeg);">
        <div class="container">
            <div class="page-header__content text-center">
                <h2>Nosotros</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- ========== About Section start Here========== -->
    <section class="about padding-top padding-bottom about--shape">
        <div class="container">
            <div class="about__wrapper">
                <div class="row flex-lg-row-reverse align-items-center g-5">

                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-up" data-aos-duration="1000">

                            <div class="common-header">
                                <p class="subtitle">Bienvenidos a Estancia Del Alba</p>
                                <h2>El hotel que despierta con el Alba cajamarquina.</h2>
                            </div>
                            <p>Estancia del Alba, nos dedicamos que tus días de descanso tengan confort y seguridad. Nuestra
                                prioridad es la comodidad, bajo el cálido ambiente y el amical servicio de nuestros
                                colaboradores, haciendo que tu mirada refleje durante tu estadía, el alba de cada paisaje
                                Cajamarquino.
                            </p>
                            <p>Estancia del Alba busca ser reconocido como el hotel de referencia en el sector turístico,
                                destacándose por su compromiso con los más altos estándares de calidad. Nos dedicamos a
                                ofrecer servicios excepcionales a nuestros huéspedes, implementando mejoras continuas, así
                                como alianzas estratégicas para convertir nuestra estancia en un atractivo cultural más de
                                Cajamarca, enriqueciendo la experiencia de quienes nos visitan.
                            </p>
                            {{--  <ul class="funfact__list my-4">
                                <li class="funfact__item">
                                    <div class="funfact__item-icon">
                                        <img src="assets/images/funfact/icons/1.png" alt="funfact icon">
                                    </div>
                                    <div class="funfact__item-content">
                                        <h3><span>200</span>+</h3>
                                        <p>Available Rooms</p>
                                    </div>
                                </li>
                                <li class="funfact__item">
                                    <div class="funfact__item-icon">
                                        <img src="assets/images/funfact/icons/2.png" alt="funfact icon">
                                    </div>
                                    <div class="funfact__item-content">
                                        <h3><span>400</span>+</h3>
                                        <p>Staff Members</p>
                                    </div>
                                </li>
                                <li class="funfact__item">
                                    <div class="funfact__item-icon">
                                        <img src="assets/images/funfact/icons/3.png" alt="funfact icon">
                                    </div>
                                    <div class="funfact__item-content">
                                        <h3><span>240</span>k</h3>
                                        <p>Served Clients</p>
                                    </div>
                                </li>
                            </ul> --}}
                            <a href="/reservar" class="custom-btn"><span>Reservar</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__image" data-aos="fade-up-right" data-aos-duration="1000">
                            <img  style="border-radius: 10px" src="assets/images/room/pagina-web/main-3.png" alt="About image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history padding-top  bg--section-color">
        <div class="container">
            <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-header__content">
                    <h2>Nuestros Valores</h2>
                    {{--   <p>Continually productize compelling quality for packed in business consulting elated
                        Setting up to website and creating pages.
                    </p> --}}
                </div>
            </div>
            <div class="history__wrapper">
                <div class="history__tab" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">

                    <!-- tab button -->
                    <div class="history__tab-nav nav nav-pills mb-30" id="history-tab" role="tablist">

                        <button class="history__tab-btn active" id="history4-tab" data-bs-toggle="pill"
                            data-bs-target="#history4" type="button" role="tab" aria-controls="history4"
                            aria-selected="true">Innovación</button>
                        <button class="history__tab-btn" id="history5-tab" data-bs-toggle="pill" data-bs-target="#history5"
                            type="button" role="tab" aria-controls="history5" aria-selected="false">Compromiso
                            sociocultural</button>
                        <button class="history__tab-btn" id="history6-tab" data-bs-toggle="pill" data-bs-target="#history6"
                            type="button" role="tab" aria-controls="history6" aria-selected="false">Integridad y
                            respeto</button>
                    </div>


                    <!-- tab content -->
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="history4" role="tabpanel" aria-labelledby="history4-tab"
                            tabindex="0">
                            <blockquote class="single-quote mb-30">
                                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                <div class="quotes">
                                    Estancia del Alba en búsqueda de la excelencia está abierta a las nuevas tendencias
                                    tecnológicas, contando con los más óptimos sistemas para la gestión y reservas de
                                    hospedaje, ello nos invita a contar con los mejores profesionales, que reciben la
                                    formación profesional y cultural adecuada para brindar la información oportuna y concisa
                                    a cada uno de nuestros huéspedes durante su estadía.
                                </div>
                            </blockquote>
                        </div>
                        <div class="tab-pane fade" id="history5" role="tabpanel" aria-labelledby="history5-tab"
                            tabindex="0">
                            <blockquote class="single-quote mb-30">
                                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                <div class="quotes">
                                    Nuestro servicio está enmarcado en el compromiso con la población cajamarquina en la
                                    atracción del talento humano local, que posea conocimiento de la cultura cajamarquina y
                                    a través de ella dé a conocer al huésped los diferentes atractivos turísticos, así como
                                    las costumbres de nuestra ciudad, minorando así el impacto medioambiental que puedan
                                    generar nuestros visitantes durante la visita a nuestra ciudad.
                                </div>
                            </blockquote>
                        </div>
                        <div class="tab-pane fade" id="history6" role="tabpanel" aria-labelledby="history6-tab"
                            tabindex="0">
                            <blockquote class="single-quote mb-30">
                                <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                <div class="quotes">
                                    Nuestro equipo de trabajo actúa con toda la transparencia y honestidad para con los
                                    huéspedes, así como para con sus compañeros de equipo, esto con lleva a un alto grado de
                                    respeto entre ambas partes, ello hará que su estancia tenga un cálido calor humano como
                                    en casa.
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <!-- ========== About Section ends Here========== -->
@endsection
