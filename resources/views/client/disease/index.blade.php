@extends('client.layout.app')
@section('title')
   Diseases | Doctor Appointments
@endsection
@section('content')
    <div class="all-sections">
        <!-- banner-section start -->
        <section class="inner-banner-section bg-overlay-white banner-section bg_img"
            data-background="{{asset('client')}}/assets/images/frontend/breadcrumb/5fd078f78945f1607497975.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h2 class="title">Disease</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Disease</li>
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
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/605f194c9393f1616845132.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">Hematologist</a>
                                    </h4>
                                    <p>120 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/604a0077b1b341615462519.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h6 class="title"><a href="/disease">Ophthalmology</a>
                                    </h6>
                                    <p>43 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/604a010ab280d1615462666.jpg" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">Dental</a>
                                    </h4>
                                    <p>43 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30 ">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/5fc4934a5f47d1606718282.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">ENT</a></h4>
                                    <p>93 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/5fc493e08dd861606718432.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">Oncology</a>
                                    </h4>
                                    <p>3 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/5fc493cab8f8c1606718410.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">Neurology</a>
                                    </h4>
                                    <p>23 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/5fc493afb11a91606718383.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">Cardiology</a></h4>
                                    <p>5 Doctors</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/604a02b8abd041615463096.jpg" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="/disease">Gynecology</a></h4>
                                    <p>5 Doctors
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- booking-section end -->
    </div>
@endsection
