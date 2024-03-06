@extends('client.layout.app')
@section('title')
Our Doctors | Doctor Appointments
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
                            <h2 class="title">Our Doctors</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Our Doctors</li>
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
                <div class="booking-search-area">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="appoint-content">
                                <form class="appoint-form mt-0 ml-b-20" action="doctors-all.html" method="get">
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
                <div class="row justify-content-center ml-b-30">
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f15f99f1921616844281.jpg" alt="booking">
                                <div class="doc-deg">ENT</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">ENT</a></span>
                                <h5 class="title">Dr. Dina Elijah <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, FRCS, FRCP</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="#">Mirpur</a></li>
                                    <li><i class="las la-phone"></i> 987999999</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/605f162d78c7c1616844333.jpg" alt="booking">
                                <div class="doc-deg">Cardiology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="doctors-all/sector/2.html">Cardiology</a></span>
                                <h5 class="title">Dr. Noah Benjamin <i class="fas fa-check-circle"></i></h5>
                                <p>FRCS, FRCOG, FRCP</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="doctors-all/location/1.html">Uttara</a>
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
                        <div class="booking-item">
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
                        <div class="booking-item">
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
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd911c4fb861610453276.jpg" alt="booking">
                                <div class="doc-deg">Ophthalmology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="#">Ophthalmology</a></span>
                                <h5 class="title">Sherrinford William <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, DCO(ICO,Ctg) , MPHO (UniSA)</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="doctors-all/location/1.html">Uttara</a>
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
                        <div class="booking-item">
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
                        <div class="booking-item">
                            <div class="booking-thumb">
                                <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd9048020671610453064.jpg" alt="booking">
                                <div class="doc-deg">Gynecology</div>
                            </div>
                            <div class="booking-content">
                                <span class="sub-title"><a href="doctors-all/sector/1.html">Gynecology</a></span>
                                <h5 class="title">Dr. Elizabeth Blackwell <i class="fas fa-check-circle"></i></h5>
                                <p>MBBS, FRCS, FRCOG, FRCP, FCPS</p>
                                <ul class="booking-list">
                                    <li><i class="icon-direction-alt"></i><a href="#">Mirpur</a></li>
                                    <li><i class="las la-phone"></i> 9787465</li>
                                </ul>
                                <div class="booking-btn">
                                    <a href="/booking" class="cmn-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-30">
                        <div class="booking-item">
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

            </div>
        </section>
        <!-- booking-section end -->
    </div>
@endsection
