@extends('client.layout.app')
@section('title')
    Welcome to Doctor Appointments System | Doctor Appointments
@endsection
@section('content')
   <div class="all-sections">
        <!-- banner-section start -->
        <section class="banner">
            <div class="banner-social-area">
                <span>Follow Us</span>
                <ul class="banner-social">
                    <li><a href="https://www.whatsapp.com/?lang=en" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    <li><a href="https://www.pinterest.com/" target="_blank"><i class="lab la-pinterest"></i></a>
                    </li>
                    <li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.google.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.google.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-section bg-overlay-white bg_img"
                            data-background="{{asset('client')}}/assets/images/frontend/banner/5fc4e1ae9c2e51606738350.jpg">
                            <div class="custom-container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-6 text-center">
                                        <div class="banner-content">
                                            <h2 class="title">Nothing Is More Important Than Wellness</h2>
                                            <p>Good health is the most precious thing to us! and that&#039;s why we
                                                are
                                                here to give you the best treatment with the help of the best
                                                doctors.
                                            </p>
                                            <div class="banner-btn">
                                                <a href="/doctors" class="cmn-btn">Make Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-section bg-overlay-white bg_img"
                            data-background="{{asset('client')}}/assets/images/frontend/banner/5fc4e19491c0b1606738324.jpg">
                            <div class="custom-container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-6 text-center">
                                        <div class="banner-content">
                                            <h2 class="title">Where There Is Healing There Is Hope</h2>
                                            <p>Experience the best health service with this site! Our doctors are
                                                well
                                                expert and give you the best service.</p>
                                            <div class="banner-btn">
                                                <a href="doctors-all.html" class="cmn-btn">Make Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-section bg-overlay-white bg_img"
                            data-background="{{asset('client')}}/assets/images/frontend/banner/5fc4e17c9f17c1606738300.jpg">
                            <div class="custom-container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-6 text-center">
                                        <div class="banner-content">
                                            <h2 class="title">World Class Care Right Where You Need It</h2>
                                            <p>Yes! you are in the right place, We deliver a world-class health
                                                service
                                                with the help of world-class doctors.</p>
                                            <div class="banner-btn">
                                                <a href="doctors-all.html" class="cmn-btn">Make Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- banner-section end -->
        <!-- appoint-section start -->
        <section class="appoint-section ptb-80 bg-overlay-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="appoint-content">
                            <h2 class="title">Search Doctor, Make an Appointment</h2>
                            <p>Discover the best doctors, clinics, and hospitals in the city nearest to you.</p>
                            <form class="appoint-form" action="doctors-all.html" method="get">
                                <input type="hidden" name="_token" value="">
                                <div class="search-location form-group">
                                    <div class="appoint-select">
                                        <select class="chosen-select locations" name="location">
                                            <option value="">Location*</option>
                                            <option value="6">Banani</option>
                                            <option value="5">Gulshan</option>
                                            <option value="4">Santinagar</option>
                                            <option value="3">Mirpur</option>
                                            <option value="2">Dhanmondi</option>
                                            <option value="1">Uttara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-location form-group">
                                    <div class="appoint-select">
                                        <select class="chosen-select locations" name="disease">
                                            <option value="">Disease*</option>
                                            <option value="8">Hematologist</option>
                                            <option value="7">Ophthalmology</option>
                                            <option value="6">Dental</option>
                                            <option value="5">ENT</option>
                                            <option value="4">Oncology</option>
                                            <option value="3">Neurology</option>
                                            <option value="2">Cardiology</option>
                                            <option value="1">Gynecology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-info form-group">
                                    <div class="appoint-select">
                                        <select class="chosen-select locations" name="gender">
                                            <option value="">Gender*</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="search-btn cmn-btn"><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- appoint-section end -->
        <!-- choose-section start -->
        <section class="choose-section ptb-80">
            <div class="container">
                <div class="row justify-content-center align-items-center ml-b-30">
                    <div class="col-lg-4 mrb-30">
                        <div class="choose-left-content">
                            <h2 class="title">Why Patients Choose Us ?</h2>
                            <p>DrsPoint is a globally recognized market leader in healthcare, with leading medical
                                professionals represented across each medical specialty. DrsPoint delivers, enables,
                                and
                                empowers care services that span every state in a person&#039;s health journey -from
                                wellness and prevention to acute care to complex healthcare needs. Our site uses
                                proprietary health signals and personalized interactions to drive better health
                                outcomes
                                across the full continuum of care.</p>
                            <div class="choose-btn">
                                <a href="/doctors" class="cmn-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mrb-30">
                        <div class="choose-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="choose-right-content">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="right-column-one">
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/605f194c9393f1616845132.png"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title"><a href="#">Hematologist</a>
                                                            </h6>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Tempora, vel.</p>
                                                        </div>
                                                    </div>
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/604a0077b1b341615462519.png"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title"><a href="#">Ophthalmology</a>
                                                            </h6>
                                                            <p>Ophthalmology is a branch of medicine and surgery
                                                                that
                                                                deals with the diagnosis and treatment of disorders
                                                                of
                                                                the eye.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="right-column-two">
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/604a010ab280d1615462666.jpg"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title">Dental</h6>
                                                            <p>Dentistry, also known as dental medicine and oral
                                                                medicine, is a branch of medicine that consists of
                                                                oral
                                                                problems.</p>
                                                        </div>
                                                    </div>
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/5fc4934a5f47d1606718282.png"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title">ENT</h6>
                                                            <p>This sector is a surgical subspecialty within
                                                                medicine
                                                                that deals with the surgical and medical terms of
                                                                conditions of the head and neck.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choose-right-content">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="right-column-one">
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/5fc493e08dd861606718432.png"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title"><a href="#">Oncology</a>
                                                            </h6>
                                                            <p>Oncology is a branch of medicine that deals with the
                                                                prevention, diagnosis, and treatment of cancer.</p>
                                                        </div>
                                                    </div>
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/5fc493cab8f8c1606718410.png"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title"><a
                                                                    href="doctors-all/sector/3.html">Neurology</a>
                                                            </h6>
                                                            <p>Neurology is a branch of medicine dealing with
                                                                disorders
                                                                of the nervous system.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="right-column-two">
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/5fc493afb11a91606718383.png"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title">Cardiology</h6>
                                                            <p>Cardiology is a branch of medicine that deals with
                                                                disorders of the heart as well as some parts of the
                                                                circulatory system.</p>
                                                        </div>
                                                    </div>
                                                    <div class="choose-item">
                                                        <div class="choose-thumb">
                                                            <img src="{{asset('client')}}/assets/sector/604a02b8abd041615463096.jpg"
                                                                alt="choose">
                                                        </div>
                                                        <div class="choose-content">
                                                            <h6 class="title">Gynecology</h6>
                                                            <p>Gynecology or gynecology is the medical practice
                                                                dealing
                                                                with the health of the female reproductive system.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-section end -->


        <section class="team-section ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="section-title">Browse by Specialities</h2>
                            <p class="m-0">DrsPoint is a globally recognized market leader in healthcare, with leading
                                medical professionals represented across each medical specialty. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ml-b-30">
                    <div class="col-lg-3 col-md-3 col-sm-4 mrb-30">
                        <a href="#">
                            <div class="disease-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('client')}}/assets/sector/605f194c9393f1616845132.png" alt="choose">
                                </div>
                                <div class="disease-content">
                                    <h4 class="title"><a href="disease.html">Hematologist</a>
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
                                    <h4 class="title"><a href="disease.html">Ophthalmology</a>
                                    </h4>
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
                                    <h4 class="title"><a href="disease.html">Dental</a>
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
                                    <h4 class="title"><a href="disease.html">ENT</a></h4>
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
                                    <h4 class="title"><a href="disease.html">Oncology</a>
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
                                    <h4 class="title"><a href="disease.html">Neurology</a>
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
                                    <h4 class="title"><a href="disease.html">Cardiology</a></h4>
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
                                    <h4 class="title"><a href="disease.html">Gynecology</a></h4>
                                    <p>5 Doctors
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center mrt-60">
                    <div class="col-lg-12 text-center">
                        <div class="team-btn">
                            <a href="/diseases" class="cmn-btn-active">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- our doctor section start -->
        <section class="team-section bg-light ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="section-title">Our Expert Doctors</h2>
                            <p class="m-0">DrsPoint is a globally recognized market leader in healthcare, with leading
                                medical professionals represented across each medical specialty. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ml-b-30">
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f15f99f1921616844281.jpg" alt="booking">
                                <div class="doc-deg">ENT</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">ENT</a></span>
                                <h5 class="title">Dr. Dina Elijah <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, FRCS, FRCP</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="#">Mirpur</a>
                                    </li>
                                    <li><i class="las la-phone"></i> 987999999</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f162d78c7c1616844333.jpg" alt="booking">
                                <div class="doc-deg">Cardiology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="doctors-all/sector/2.html">Cardiology</a></span>
                                <h5 class="title">Dr. Noah Benjamin <i class="fas fa-check-circle"></i></h5>
                                <p>FRCS, FRCOG, FRCP</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/1.html">Uttara</a>
                                    </li>
                                    <li><i class="las la-phone"></i> 7987899</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f16dc7d6041616844508.jpg" alt="booking">
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
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f168dbc8581616844429.jpg" alt="booking">
                                <div class="doc-deg">Oncology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">Oncology</a></span>
                                <h5 class="title">Dr. Mary Edwards <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, MCPS, MSc</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/2.html">Dhanmondi</a></li>
                                    <li><i class="las la-phone"></i> 01286545</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd911c4fb861610453276.jpg" alt="booking">
                                <div class="doc-deg">Ophthalmology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">Ophthalmology</a></span>
                                <h5 class="title">Sherrinford William <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, DCO(ICO,Ctg) , MPHO (UniSA)</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/1.html">Uttara</a>
                                    </li>
                                    <li><i class="las la-phone"></i> 624564156</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd9070747d71610453104.jpg" alt="booking">
                                <div class="doc-deg">Neurology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="doctors-all/sector/3.html">Neurology</a></span>
                                <h5 class="title">Dr. Royal Matthew <i class="fas fa-check-circle"></i></h5>
                                <p>MD FACP(USA) MBBS. (Oncologist)</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/2.html">Dhanmondi</a></li>
                                    <li><i class="las la-phone"></i> 56456459</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd9048020671610453064.jpg" alt="booking">
                                <div class="doc-deg">Gynecology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="doctors-all/sector/1.html">Gynecology</a></span>
                                <h5 class="title">Dr. Elizabeth Blackwell <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, FRCS, FRCOG, FRCP, FCPS</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="#">Mirpur</a>
                                    </li>
                                    <li><i class="las la-phone"></i> 9787465</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item bg-white">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd8ffd36fd61610452989.jpg" alt="booking">
                                <div class="doc-deg">Dental</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">Dental</a></span>
                                <h5 class="title">Dr. Danneal Walker <i class="fas fa-check-circle"></i></h5>
                                <p>BDS, MDS - Oral &amp; Maxillofacial Surgery</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a
                                            href="doctors-all/location/2.html">Dhanmondi</a></li>
                                    <li><i class="las la-phone"></i> 014656235</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mrt-60">
                    <div class="col-lg-12 text-center">
                        <div class="team-btn">
                            <a href="/doctors" class="cmn-btn-active">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking-section end -->
        <!-- featured-doctor-section start -->
        <section class="team-section ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="section-title">Meet With Our Feature Doctors</h2>
                            <p class="m-0">Meet with leading medical professionals represented across each medical
                                specialty. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ml-b-30">
                    <div class="col-xl-6 col-lg-4 col-md-6 mrb-30">
                        <div class="team-item d-flex flex-wrap align-items-center justify-content-between">
                            <div class="team-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f162d78c7c1616844333.jpg" alt="doctor-image">
                                <div class="team-thumb-overlay">
                                    <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h5 class="title">Dr. Noah Benjamin</h5>
                                <p>He is commonly known as a Bangladeshi and obstetrician. She was awarde...</p>
                                <h6 class="title">Qualification</h6>
                                <p>FRCS, FRCOG, FRCP</p>

                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 mrb-30">
                        <div class="team-item d-flex flex-wrap align-items-center justify-content-between">
                            <div class="team-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f16dc7d6041616844508.jpg" alt="doctor-image">
                                <div class="team-thumb-overlay">
                                    <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h5 class="title">Dr. Emma Olivia</h5>
                                <p>She is commonly known as a Bangladeshi gynaecologist and obstetrician...</p>
                                <h6 class="title">Qualification</h6>
                                <p>MBBS, FRCS, FRCOG, FRCP</p>

                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 mrb-30">
                        <div class="team-item d-flex flex-wrap align-items-center justify-content-between">
                            <div class="team-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd9048020671610453064.jpg" alt="doctor-image">
                                <div class="team-thumb-overlay">
                                    <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fab fa-youtube-square"></i></a></li>
                                        <li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h5 class="title">Dr. Elizabeth Blackwell</h5>
                                <p>She is commonly known as a Bangladeshi gynaecologist and obstetrician...</p>
                                <h6 class="title">Qualification</h6>
                                <p>MBBS, FRCS, FRCOG, FRCP, FCPS</p>

                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-6 mrb-30">
                        <div class="team-item d-flex flex-wrap align-items-center justify-content-between">
                            <div class="team-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd8ffd36fd61610452989.jpg" alt="doctor-image">
                                <div class="team-thumb-overlay">
                                    <ul class="social-icon">
                                        <li><a href="https://www.google.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fab fa-youtube-square"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h5 class="title">Dr. Danneal Walker</h5>
                                <p>He was born in the year 1990 at Azimpur. His father Md Abdul Mazid was...</p>
                                <h6 class="title">Qualification</h6>
                                <p>BDS, MDS - Oral &amp; Maxillofacia...</p>

                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mrt-60">
                    <div class="col-lg-12 text-center">
                        <div class="team-btn">
                            <a href="/doctors/featured" class="cmn-btn-active">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured-doctor-section end -->

    </div>
@endsection