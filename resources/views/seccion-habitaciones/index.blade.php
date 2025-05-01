@extends('layouts.header')
@section('contenidoPrincipal')
    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image: url(assets/images/demo/seccion-banner.jpeg);">
        <div class="container">
            <div class="page-header__content text-center">
                <h2>Habitaciones</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Habitaciones</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->






    <!-- ========== Gallery Section start Here========== -->
    <div class="gallery padding-top padding-bottom">
        <div class="container">
            <div class="section-header section-header--withnav justify-content-center">
                <div class="section-header__nav">
                    <div class="common-filter">
                        {{--     <button class="common-filter__btn " data-filter="*">Todos</button> --}}
                        <button class="common-filter__btn active" data-filter=".btn_habitacion_simple">Simples /
                            Dobles</button>
                        <button class="common-filter__btn " data-filter=".btn_cuadruple">Cuadruples</button>
                        <button class="common-filter__btn " data-filter=".btn_matrimonial">Matrimoniales</button>
                        <button class="common-filter__btn " data-filter=".btn_familiar">Familiares </button>
                        <button class="common-filter__btn " data-filter=".btn_suite">Suites </button>
                    </div>
                </div>
            </div>


            <div class="gallery__wrapper">
                <div class="row g-4 gallery__grid gallery__grid--home2">

                    <div class="col-md-6 gallery__grid-item btn_suite">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/ST-1.png" alt="gallery image">
                                <a href="assets/images/habitaciones/ST-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_suite">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/ST-2.png" alt="gallery image">
                                <a href="assets/images/habitaciones/ST-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_suite">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/ST-3.png" alt="gallery image">
                                <a href="assets/images/habitaciones/ST-3.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_suite">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/ST-4.png" alt="gallery image">
                                <a href="assets/images/habitaciones/ST-4.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 gallery__grid-item btn_familiar">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HF-1.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HF-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_familiar">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HF-2.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HF-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_familiar">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HF-3.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HF-3.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_familiar">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HF-4.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HF-4.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_familiar">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HF-5.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HF-5.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_habitacion_simple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HSD-1.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HSD-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item btn_habitacion_simple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HSD-2.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HSD-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_habitacion_simple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HSD-3.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HSD-3.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_habitacion_simple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HSD-4.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HSD-4.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item btn_habitacion_simple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HSD-5.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HSD-5.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item  btn_cuadruple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HC-1.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HC-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery__grid-item  btn_cuadruple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HC-2.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HC-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 gallery__grid-item  btn_cuadruple">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HC-3.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HC-3.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item  btn_matrimonial">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HM-1.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HM-1.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 gallery__grid-item  btn_matrimonial">
                        <div class="gallery__grid-inner">
                            <div class="gallery__grid-image">
                                <img src="assets/images/habitaciones/HM-2.png" alt="gallery image">
                                <a href="assets/images/habitaciones/HM-2.png" data-rel="lightcase"
                                    class="gallery__view-btn"><i class="fa-solid fa-expand"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


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
            let defaultButton = document.querySelector('.common-filter__btn[data-filter=".btn_habitacion_simple"]');
            if (defaultButton) {
                defaultButton.click();
            }
        });
    </script>
    <!-- ========== Gallery Section Ends Here========== -->
@endsection
