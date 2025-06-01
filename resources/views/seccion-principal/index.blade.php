@extends('layouts.header')
@section('contenidoPrincipal')
    <!-- ========== Hero Section start Here========== -->
    <section class="hero hero--home2">
        <div class="hero__wrapper" style="background-image:url(assets/images/demo/new-banner.png)">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="hero__content" data-aos="fade-right" data-aos-duration="1000">
                            <h1>Estancia del Alba</h1>
                            <p>Disfruta de habitaciones acogedoras, servicios exclusivos y una atención personalizada que
                                harán de tu estancia una experiencia inolvidable. ¡Déjate sorprender y relájate con
                                nosotros!
                            </p>
                            <a href="/habitaciones" class="custom-btn"><span>Explorar Hotel</span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-8">
                        <div class="booking__wrapper bg--section-color" data-aos="fade-up-left" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-12">
                                    <form action="{{ route('search') }}" class="booking__form">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <label style="color: rgb(192, 192, 192)">Check-in</label>
                                                <div class="booking__form-inputgroup">

                                                    <div class="booking__form-date">
                                                        <input type="text" class="date-input form-control"
                                                            placeholder="Check In" name="dFechaCheckIn" id="dFechaCheckIn">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 9.5px;">
                                                <label style="color: rgb(192, 192, 192)">Check-out</label>
                                                <div class="booking__form-inputgroup">
                                                    <div class="booking__form-date">
                                                        <input type="text" class="date-input form-control"
                                                            placeholder="Check Out" name="dFechaCheckOut">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 9.5px;">
                                                <label style="color: rgb(192, 192, 192)">Adultos</label>
                                                <div class="booking__form-inputgroup">

                                                    <input type="number" min="1" max="100"
                                                        class="text-input form-control" placeholder="Adultos"
                                                        name="nAdultos">
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 9.5px;">
                                                <label style="color: rgb(192, 192, 192)">Niños</label>
                                                <div class="booking__form-inputgroup">
                                                    <input type="number" min="1" max="100"
                                                        class="text-input form-control" placeholder="Niños" name="nNinos">
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top: 9.5px;">
                                                <label style="color: rgb(192, 192, 192)">Habitaciones</label>
                                                <div class="booking__form-inputgroup">
                                                    <!-- <label for="test1" class="form-label">Children</label> -->
                                                    <select class="nice-selct wide form-select"
                                                        aria-label="Default select example" name="nHabitaciones">
                                                        <option selected>Habitaciones</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="booking__form-btn">


                                                    <button type="submit"
                                                        class="custom-btn custom-btn--fluid"><span>Reservar
                                                            Ahora</span></button>


                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== Hero Section Ends Here========== -->



    <section class="about padding-top padding-bottom about--shape">
        <div class="container">
            <div class="about__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="about__content" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="100">

                            <div class="common-header">
                                <p class="subtitle">Bienvenidos a Estancia del Alba</p>
                                <h2>El hotel que despierta con el Alba cajamarquina.</h2>
                            </div>
                            <p>En Estancia del Alba, nos especializamos en ofrecer una experiencia única, combinando
                                elegancia, comodidad y un servicio excepcional. Nuestras habitaciones están diseñadas para
                                el descanso perfecto, y contamos con espacios ideales para relajarte y disfrutar.
                            </p>
                            <p>Ven y vive una estancia inolvidable en un ambiente acogedor, donde cada detalle está pensado
                                para tu bienestar.
                            </p>
                            {{--       <div class="row g-4 my-5">
                                <div class="col-xl-6">
                                    <div class="about__item">
                                        <div class="about__item-inner">
                                            <div class="about__item-thumb">
                                                <img src="assets/images/about/icon/1.png" alt="About Icon">
                                            </div>
                                            <div class="about__item-content">
                                                <h5>Best Guarantee</h5>
                                                <p>Strategy experience and an lytical expertise.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="about__item">
                                        <div class="about__item-inner">
                                            <div class="about__item-thumb">
                                                <img src="assets/images/about/icon/2.png" alt="About Icon">
                                            </div>
                                            <div class="about__item-content">
                                                <h5>No Booking Fee</h5>
                                                <p>Strategy experience and an lytical expertise.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <a href="/reservar" class="custom-btn"><span>Reservar </span></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__image" data-aos="fade-up-left" data-aos-duration="1000" data-aos-delay="100">
                            <div class="about__image-lg"><img style="border-radius: 10px;"
                                    src="assets/images/room/pagina-web/main-3.png" alt="About image"></div>
                            {{--   <div class="about__image-sm"><img src="assets/images/room/pagina-web/main-2.png"
                                    alt="About image"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========== Popular Room Section start Here========== -->

    <!-- ========== Popular Room Section ends Here========== -->





    <!-- ========== Service Section start Here========== -->
    <section class="service padding-top padding-bottom bg--cover"
        style="background-image:url(assets/images/room/pagina-web/fondo-crema.png)">
        <div class="container">
            <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-header__content">
                    <h2>Nuestros Servicios Disponibles</h2>
                    {{--    <p>Continually productize compelling quality for packed in business consulting elated
                        Setting up to website and creating pages.
                    </p> --}}
                </div>
            </div>
            <div class="service__wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="service__item2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item2-inner">
                                <div class="service__item2-thumb">
                                    <img src="assets/images/room/pagina-web/restaurante.png" alt="service icon">
                                </div>
                                <div class="service__item2-content">
                                    <h3><a href="service-single.html">Restaurante</a> </h3>
                                    <p>Deliciosos platillos preparados con ingredientes frescos y el mejor servicio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service__item2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="service__item2-inner">
                                <div class="service__item2-thumb">
                                    <img src="assets/images/room/pagina-web/terraza.png" alt="service icon">
                                </div>
                                <div class="service__item2-content">
                                    <h3><a href="service-single.html">Terraza</a> </h3>
                                    <p>El lugar perfecto para compartir momentos especiales al aire libre.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service__item2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="service__item2-inner">
                                <div class="service__item2-thumb">
                                    <img src="assets/images/room/pagina-web/cochera.png" alt="service icon">
                                </div>
                                <div class="service__item2-content">
                                    <h3><a href="service-single.html">Cochera</a> </h3>
                                    <p>Sitio exclusivo para nuestros huéspedes, con total seguridad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service__item2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="service__item2-inner">
                                <div class="service__item2-thumb">
                                    <img src="assets/images/room/pagina-web/wifis.png" alt="service icon">
                                </div>
                                <div class="service__item2-content">
                                    <h3><a href="service-single.html">Wi-Fi</a> </h3>
                                    <p>Conéctate sin interrupciones con nuestro WiFi de alta velocidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service__item2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="service__item2-inner">
                                <div class="service__item2-thumb">
                                    <img src="assets/images/room/pagina-web/vistas.png" alt="service icon">
                                </div>
                                <div class="service__item2-content">
                                    <h3><a href="service-single.html">Habitación con vistas</a> </h3>
                                    <p>Cada amanecer es especial en nuestras habitaciones con vistas panorámicas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="service__item2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="service__item2-inner">
                                <div class="service__item2-thumb">
                                    <img src="assets/images/room/pagina-web/agua.png" alt="service icon">
                                </div>
                                <div class="service__item2-content">
                                    <h3><a href="service-single.html">Agua caliente</a> </h3>
                                    <p>Disfruta de un baño agradable a cualquier hora del día.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Service Section Ends Here========== -->




    <!-- ========== Gallery Section start Here========== -->
    <section class="gallery padding-top padding-bottom">
        <div class="container">
            <div class="section-header section-header--withnav">
                <div class="section-header__content">
                    <h2>Nuestros Ambientes</h2>

                </div>
                <div class="section-header__nav">
                    <div class="common-filter">
                        {{--     <button class="common-filter__btn " data-filter="*">Todos</button> --}}
                        <button class="common-filter__btn active" data-filter=".btn_habitaciones">Habitaciones</button>
                        <button class="common-filter__btn " data-filter=".btn_resturante">Restaurante</button>
                        <button class="common-filter__btn " data-filter=".btn_terraza">Terraza</button>
                    </div>
                </div>
            </div>


            <div class="gallery__wrapper">
                <div class="row g-4 gallery__grid gallery__grid--home2">
                    <div class="col-md-6 gallery__grid-item btn_resturante">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/RESTAURANTE-1.png" alt="gallery image">
                                <a href="assets/images/ambientes/RESTAURANTE-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 gallery__grid-item btn_resturante">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/RESTAURANTE-2.png" alt="gallery image">
                                <a href="assets/images/ambientes/RESTAURANTE-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 gallery__grid-item btn_habitaciones">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/HABITACION-1.png" alt="gallery image">
                                <a href="assets/images/ambientes/HABITACION-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_habitaciones">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/HABITACION-2.png" alt="gallery image">
                                <a href="assets/images/ambientes/HABITACION-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_habitaciones">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/HABITACION-3.png" alt="gallery image">
                                <a href="assets/images/ambientes/HABITACION-3.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_habitaciones">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/HABITACION-4.png" alt="gallery image">
                                <a href="assets/images/ambientes/HABITACION-4.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_habitaciones btn_terraza">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/HABITACION-5.png" alt="gallery image">
                                <a href="assets/images/ambientes/HABITACION-5.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item  btn_terraza">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/TERRAZA-2.png" alt="gallery image">
                                <a href="assets/images/ambientes/TERRAZA-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery__grid-item  btn_terraza">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/ambientes/TERRAZA-1.png" alt="gallery image">
                                <a href="assets/images/ambientes/TERRAZA-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========== Gallery Section Ends Here========== -->


    <!-- ========== Faq Section start Here========== -->
    <section class="faq padding-top padding-bottom bg--section-color">
        <div class="container">
            <div class="faq__wrapper">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="faq__content">
                            <div class="section-header">
                                <div class="section-header__content text-start">
                                    <h2>Preguntas Frecuentes <br>
                                    </h2>
                                    {{--  <p>Conveniently customize proactive services leveraged without
                                        continualliery aggregate fricctionle ou wellies
                                    </p> --}}
                                </div>
                            </div>
                            <div class="accordion" id="faqAccordion2">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="accordion__item" data-aos="fade-up-right" data-aos-duration="1000">
                                            <div class="accordion__header" id="faq1">
                                                <button class="accordion__button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faqBody1"
                                                    aria-expanded="false" aria-controls="faqBody1">
                                                    ¿El hotel es solo para adultos o pueden hospedarse niños?
                                                    <span class="plus-icon"></span>
                                                </button>
                                            </div>
                                            <div id="faqBody1" class="accordion-collapse collapse"
                                                aria-labelledby="faq1" data-bs-parent="#faqAccordion2">
                                                <div class="accordion__body">
                                                    Aceptamos familias con niños, pero recomendamos consultar previamente
                                                    sobre las condiciones y espacios disponibles.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="accordion__item" data-aos="fade-up-right" data-aos-duration="1100">
                                            <div class="accordion__header" id="faq2">
                                                <button class="accordion__button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faqBody2"
                                                    aria-expanded="true" aria-controls="faqBody2">
                                                    ¿Se puede fumar dentro del hotel? <span class="plus-icon"></span>
                                                </button>
                                            </div>
                                            <div id="faqBody2" class="accordion-collapse collapse show"
                                                aria-labelledby="faq2" data-bs-parent="#faqAccordion2">
                                                <div class="accordion__body">
                                                    No, todas nuestras habitaciones y áreas comunes son espacios libres de
                                                    humo.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="accordion__item" data-aos="fade-up-right" data-aos-duration="1200">
                                            <div class="accordion__header" id="faq3">
                                                <button class="accordion__button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faqBody3"
                                                    aria-expanded="false" aria-controls="faqBody3">
                                                    ¿El hotel es apto para personas con movilidad reducida?<span
                                                        class="plus-icon"></span>
                                                </button>
                                            </div>
                                            <div id="faqBody3" class="accordion-collapse collapse"
                                                aria-labelledby="faq3" data-bs-parent="#faqAccordion2">
                                                <div class="accordion__body">
                                                    No, debido a que nuestras instalaciones se encuentran en pisos elevados
                                                    y no contamos con ascensor, no podemos garantizar accesibilidad para
                                                    personas con movilidad reducida.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="accordion__item" data-aos="fade-up-right" data-aos-duration="1300">
                                            <div class="accordion__header" id="faq4">
                                                <button class="accordion__button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#faqBody4"
                                                    aria-expanded="false" aria-controls="faqBody4">
                                                    ¿El hotel tiene toque de queda o restricción de horario?<span
                                                        class="plus-icon"></span>
                                                </button>
                                            </div>
                                            <div id="faqBody4" class="accordion-collapse collapse"
                                                aria-labelledby="faq4" data-bs-parent="#faqAccordion2">
                                                <div class="accordion__body">
                                                    No, el acceso al hotel está disponible las 24 horas, pero se solicita
                                                    respeto por el descanso de otros huéspedes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__image">
                            <img style="border-radius: 10px;" src="assets/images/faq/01.png" alt="faq image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Faq Section ends Here========== -->




    <!-- ========== Funfact Section start Here========== -->
    {{-- <section class="funfact funfact--shape padding-bottom pb-lg-0 bg--section-color">
        <div class="container">
            <div class="testimonial__wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="funfact__content padding-top" data-aos="fade-right" data-aos-duration="1000">
                            <div class="common-header">
                                <p class="subtitle">Fun Fact</p>
                                <h2>Our Hotel Achievement for over 20 years.
                                </h2>
                            </div>
                            <ul class="funfact__list">
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
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="funfact__video" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                            <div class="funfact__video-wrapper">
                                <img src="assets/images/funfact/1.png" alt="funfact video preview">
                                <a href="https://www.youtube.com/embed/4K6Sh1tsAW4" data-rel="lightcase"
                                    class="funfact__video-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========== funfact Section ends Here========== -->





    <!-- ========== Testimonial Section ends Here========== -->
    {{-- <section class="testimonial padding-top padding-bottom">
        <div class="container">
            <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-header__content">
                    <h2>Our Customer say About Hotel</h2>
                    <p>Continually productize compelling quality for packed in business consulting elated
                        Setting up to website and creating pages.
                    </p>
                </div>
            </div>
            <div class="testimonial__slider swiper" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial__item">
                            <div class="testimonial__item-inner">
                                <div class="testimonial__item-thumb">
                                    <img src="assets/images/testimonial/author/style2/1.png" alt="author image">
                                </div>
                                <div class="testimonial__item-content">
                                    <p>Continually productize compelling quality for packed in consult
                                        productize compelling quality for all packed in with groth from
                                        Setting up to website and creating pages.
                                    </p>
                                    <div class="testimonial__item-footer">
                                        <div class="testimonial__item-author">
                                            <h5>William Thomas</h5>
                                            <p>Customer</p>
                                        </div>
                                        <ul class="rating">
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__item">
                            <div class="testimonial__item-inner">
                                <div class="testimonial__item-thumb">
                                    <img src="assets/images/testimonial/author/style2/2.png" alt="author image">
                                </div>
                                <div class="testimonial__item-content">
                                    <p>Continually productize compelling quality for packed in consult
                                        productize compelling quality for all packed in with groth from
                                        Setting up to website and creating pages.
                                    </p>
                                    <div class="testimonial__item-footer">
                                        <div class="testimonial__item-author">
                                            <h5>Johanna Haiken</h5>
                                            <p>Customer</p>
                                        </div>
                                        <ul class="rating">
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial__item">
                            <div class="testimonial__item-inner">
                                <div class="testimonial__item-thumb">
                                    <img src="assets/images/testimonial/author/style2/1.png" alt="author image">
                                </div>
                                <div class="testimonial__item-content">
                                    <p>Continually productize compelling quality for packed in consult
                                        productize compelling quality for all packed in with groth from
                                        Setting up to website and creating pages.
                                    </p>
                                    <div class="testimonial__item-footer">
                                        <div class="testimonial__item-author">
                                            <h5>William Thomas</h5>
                                            <p>Customer</p>
                                        </div>
                                        <ul class="rating">
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========== Testimonial Section ends Here========== -->





    <!-- ========== Blog Section start Here========== -->
    {{-- <section class="blog padding-top padding-bottom bg--section-color">
        <div class="container">
            <div class="section-header" data-aos="fade-up" data-aos-duration="1000">
                <div class="section-header__content">
                    <p class="subtitle">Latest News</p>
                    <h2>Our Latest News & Articles</h2>
                </div>
            </div>
            <div class="blog__wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="row g-4 flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="blog__item blog__item--home">
                            <div class="blog__item-inner">
                                <div class="blog__item-thumb">
                                    <img src="assets/images/blog/home/1.png" alt="blog image">
                                </div>
                                <div class="blog__item-content">
                                    <ul class="blog__meta d-flex flex-wrap align-items-center mb-15">
                                        <li class="blog__meta-author">
                                            <a href="#"><span><i class="fa-solid fa-user"></i></span> Admin</a>
                                        </li>
                                        <li class="blog__meta-date">
                                            <a href="#"><span><i class="fa-solid fa-calendar-days"></i></span>
                                                10 Jan, 2024</a>
                                        </li>
                                    </ul>
                                    <h3><a href="blog-single.html">How to Booking Room Online</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="blog__item blog__item--horizontal">
                                    <div class="blog__item-inner">
                                        <div class="blog__item-thumb">
                                            <img src="assets/images/blog/home/2.png" alt="blog image">
                                        </div>
                                        <div class="blog__item-content">
                                            <h3><a href="blog-single.html">How to Booking Room Online</a></h3>
                                            <ul class="blog__meta d-flex flex-wrap align-items-center mb-10">
                                                <li class="blog__meta-author">
                                                    <a href="#"><span><i class="fa-solid fa-user"></i></span>
                                                        Admin</a>
                                                </li>
                                                <li class="blog__meta-date">
                                                    <a href="#"><span><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                        10 Jan, 2024</a>
                                                </li>
                                            </ul>
                                            <a href="blog-single.html" class="text-btn"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="blog__item blog__item--horizontal">
                                    <div class="blog__item-inner">
                                        <div class="blog__item-thumb">
                                            <img src="assets/images/blog/home/3.png" alt="blog image">
                                        </div>
                                        <div class="blog__item-content">
                                            <h3><a href="blog-single.html">How to Booking Room Online</a></h3>
                                            <ul class="blog__meta d-flex flex-wrap align-items-center mb-10">
                                                <li class="blog__meta-author">
                                                    <a href="#"><span><i class="fa-solid fa-user"></i></span>
                                                        Admin</a>
                                                </li>
                                                <li class="blog__meta-date">
                                                    <a href="#"><span><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                        10 Jan, 2024</a>
                                                </li>
                                            </ul>
                                            <a href="blog-single.html" class="text-btn"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="blog__item blog__item--horizontal">
                                    <div class="blog__item-inner">
                                        <div class="blog__item-thumb">
                                            <img src="assets/images/blog/home/4.png" alt="blog image">
                                        </div>
                                        <div class="blog__item-content">
                                            <h3><a href="blog-single.html">Get Start Booking Room Today</a></h3>
                                            <ul class="blog__meta d-flex flex-wrap align-items-center mb-10">
                                                <li class="blog__meta-author">
                                                    <a href="#"><span><i class="fa-solid fa-user"></i></span>
                                                        Admin</a>
                                                </li>
                                                <li class="blog__meta-date">
                                                    <a href="#"><span><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                        10 Jan, 2024</a>
                                                </li>
                                            </ul>
                                            <a href="blog-single.html" class="text-btn"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- ========== Blog Section ends Here========== -->
    <div id="promo-popup"
        style="
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: none; /* oculto inicialmente */
    align-items: center;
    justify-content: center;
    z-index: 9999;
">
        <div style="position: relative;">
            <img src="assets/images/oferta-papa.png" alt="Oferta especial"
                style="
        max-width: 90vw;
        max-height: 90vh;
        border-radius: 10px;
        box-shadow: 0 0 20px #000;
    ">
            <button onclick="closePopup()"
                style="
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #C09B6C;
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        font-size: 20px;
        cursor: pointer;
    ">×</button>
        </div>
    </div>

    <script>
        // Mostrar el popup después de 2 segundos
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('promo-popup').style.display = 'flex';
            }, 1000); // 1000 milisegundos = 1 segundo
        });

        function closePopup() {
            document.getElementById('promo-popup').style.display = 'none';

            // Llamar a la ruta para guardar en sesión que el popup fue cerrado
            fetch("{{ route('popup.close') }}");
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let grid = document.querySelector(".gallery__grid");
            let items = grid.querySelectorAll(".gallery__grid-item");
            let filterButtons = document.querySelectorAll(".common-filter__btn");

            // Función para filtrar elementos
            function filterItems(filterClass) {
                items.forEach(item => item.style.display = "none");
                let filteredItems = grid.querySelectorAll(filterClass);
                filteredItems.forEach(item => item.style.display = "block");
            }

            // Manejo de botones
            filterButtons.forEach(button => {
                button.addEventListener("click", function() {
                    let filter = this.getAttribute("data-filter");
                    filterItems(filter);

                    // Quitar y agregar la clase "active"
                    filterButtons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");
                });
            });

            // 🔹 Simular clic en el botón de "Habitaciones" al cargar la página
            let defaultButton = document.querySelector('.common-filter__btn[data-filter=".btn_habitaciones"]');
            if (defaultButton) {
                defaultButton.click();
            }
        });
    </script>
@endsection
