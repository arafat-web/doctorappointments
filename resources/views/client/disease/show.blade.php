@extends('client.layout.app')
@section('title')
    Gynecology | Doctor Appointments
@endsection
@section('content')
    <div class="all-sections">
        <!-- banner-section start -->
        <section class="inner-banner-section bg-overlay-white banner-section bg_img"
            data-background="{{ asset('client') }}/assets/images/frontend/breadcrumb/5fd078f78945f1607497975.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h2 class="title">Gynecology</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gynecology</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- booking-section start -->
        <section class="booking-section ptb-80">
            <div class="container">
                <div class="row justify-content-center ml-b-30">
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{ asset('client') }}/assets/doctor/images/profile/605f16dc7d6041616844508.jpg"
                                    alt="booking">
                                <div class="doc-deg">Gynecology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="doctors-all/sector/1.html">Gynecology</a></span>
                                <h5 class="title">Dr. Emma Olivia <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, FRCS, FRCOG, FRCP</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/2.html">Dhanmondi</a></li>
                                    <li><i class="las la-phone"></i> 654488787</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="booking.html" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{ asset('client') }}/assets/doctor/images/profile/605f168dbc8581616844429.jpg"
                                    alt="booking">
                                <div class="doc-deg">Gynecology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">Gynecology</a></span>
                                <h5 class="title">Dr. Mary Edwards <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, MCPS, MSc</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/2.html">Dhanmondi</a></li>
                                    <li><i class="las la-phone"></i> 01286545</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="booking.html" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{ asset('client') }}/assets/doctor/images/profile/5ffd911c4fb861610453276.jpg"
                                    alt="booking">
                                <div class="doc-deg">Gynecology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">Gynecology</a></span>
                                <h5 class="title">Sherrinford William <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, DCO(ICO,Ctg) , MPHO (UniSA)</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="doctors-all/location/1.html">Uttara</a>
                                    </li>
                                    <li><i class="las la-phone"></i> 624564156</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="booking.html" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- booking-section end -->
    </div>
@endsection
