{{-- <form action="#">
    <input type="text" name="param1" value="{{ session('param1') }}" placeholder="Input 1">
    <input type="text" name="param2" value="{{ session('param2') }}" placeholder="Input 2">
    <!-- Otros inputs si es necesario -->
    <button type="submit">Buscar</button>
</form>
 --}}
@extends('layouts.header')
@section('contenidoPrincipal')
    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image: url(assets/images/demo/seccion-banner.jpeg);">
        <div class="container">
            <div class="page-header__content text-center">
                <h2>Reservas</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->






    <!-- ========== Booking Form Section start Here========== -->
    <div class="booking booking--uplifted-sm">
        <div class="container">
            <div class="booking__wrapper p-3 booking__wrapper--has-shadow">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('search') }}" class="booking__form">
                            <div class="row justify-content-center g-4">
                                <div class="col-xxl-2 col-xl-3 col-sm-6">
                                    <div class="booking__form-inputgroup">
                                        <label style="color: rgb(192, 192, 192)">Check In</label>
                                        <div class="booking__form-date">
                                            <input type="text" name="dFechaCheckIn" value="{{ $dFechaCheckIn }}"
                                                class="date-input form-control" placeholder="Check In" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-sm-6">
                                    <div class="booking__form-inputgroup">
                                        <label style="color: rgb(192, 192, 192)">Check Out</label>
                                        <div class="booking__form-date">
                                            <input type="text" value="{{ $dFechaCheckOut }}" name="dFechaCheckOut" 
                                                class="date-input form-control" placeholder="Check Out">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-sm-6">
                                    <label style="color: rgb(192, 192, 192)">Adultos</label>
                                    <div class="booking__form-inputgroup">
                                        <input type="number" min="1" max="100" class="text-input form-control"
                                            placeholder="Adultos" name="nAdultos" value="{{ $nAdultos }}">
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-sm-6">
                                    <label style="color: rgb(192, 192, 192)">Niños</label>
                                    <div class="booking__form-inputgroup">
                                        <input type="number" min="1" max="100" class="text-input form-control"
                                            placeholder="Niños" name="nNinos" value="{{ $nNinos }}">
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-sm-6">
                                    <label style="color: rgb(192, 192, 192)">Habitaciones</label>
                                    <div class="booking__form-inputgroup">
                                        <!-- <label for="test1" class="form-label">Children</label> -->
                                        <select class="nice-selct wide form-select" aria-label="Default select example"
                                            id="booking-field-5" name="nHabitaciones" value="{{ $nHabitaciones }}">
                                            <!-- Opción seleccionada por defecto -->
                                            <option value="" disabled {{ is_null($nHabitaciones) ? 'selected' : '' }}>
                                                Habitaciones</option>

                                            <!-- Opciones de Habitaciones -->
                                            <option value="1" {{ $nHabitaciones == 1 ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ $nHabitaciones == 2 ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ $nHabitaciones == 3 ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ $nHabitaciones == 4 ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ $nHabitaciones == 5 ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ $nHabitaciones == 6 ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ $nHabitaciones == 7 ? 'selected' : '' }}>7</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-sm-6">
                                    <div class="booking__form-btn">
                                        <button class="custom-btn custom-btn--fluid"><span>Buscar</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Booking Form Section Ends Here========== -->



    <div>
        {{-- Componente Livewire --}}
        @livewire('tipos-habitacion', [
            'lstTiposHabitacion' => $lstTiposHabitacion,
            'nAdultos' => session('nAdultos'),
            'nNinos' => session('nNinos'),
            'dFechaCheckIn'=> session('dFechaCheckIn'),
            'dFechaCheckOut'=> session('dFechaCheckOut'),
        ])
    </div>



    <!-- ========== Room Section start Here========== -->
    {{--  <section class="room padding-top padding-bottom">
        <div class="container">
            <div class="room__wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/1.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Family Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$220</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1 active">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/2.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Delux Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$320</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/3.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Single Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$200</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/4.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Couple Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$350</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/5.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Standar Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$250</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/6.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">VIP Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$420</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/4.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Couple Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$350</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/5.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">Standar Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$250</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="room__item room__item--style1">
                            <div class="room__item-inner">
                                <div class="room__item-thumb">
                                    <img src="assets/images/room/home1/6.png" alt="room image">
                                </div>
                                <div class="room__item-content">
                                    <div class="room__item-header">
                                        <div class="room__item-name">
                                            <ul class="rating">
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                                <li class="rating__star"><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <h3><a href="room-details.html">VIP Room</a></h3>
                                            <p>Available room</p>
                                        </div>

                                        <div class="room__item-price">
                                            <h3>$420</h3>
                                            <p>Per Night</p>
                                        </div>
                                    </div>
                                    <div class="room__item-body">
                                        <p>Continually productize compelling quality packed elated productize compelling
                                            quality.</p>
                                        <ul class="room__feature">
                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/1.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>4 Person</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
                                                <div class="room__feature-icon">
                                                    <img src="assets/images/room/icon/2.png" alt="feature icon">
                                                </div>
                                                <div class="room__feature-text">
                                                    <p>King bed</p>
                                                </div>
                                            </li>

                                            <li class="room__feature-item">
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
                                            </li>
                                        </ul>
                                        <a href="#" class="custom-btn"><span>Booking Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <nav aria-label="Room listing Pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="fa-solid fa-angle-left"></i></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========== Room Section ends Here========== -->
@endsection
