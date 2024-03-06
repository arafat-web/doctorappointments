@extends('client.layout.app')
@section('title')
    Booking | Doctor Appointments
@endsection
@section('content')
    <div class="all-sections">
        <!-- booking-section start -->
        <!-- banner-section start -->
        <section class="inner-banner-section bg-overlay-white banner-section bg_img"
            data-background="{{asset('client')}}/assets/images/frontend/breadcrumb/5fd078f78945f1607497975.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h2 class="title">Dr. Danneal Walker - Booking</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dr. Danneal Walker -
                                            Booking</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->
        <section class="booking-section booking-section-two pd-t-80 pd-b-40 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="booking-item d-flex flex-wrap align-items-center justify-content-between mb-5">
                            <div class="booking-left d-flex align-items-center">
                                <div class="booking-thumb">
                                    <img src="{{asset('client')}}/assets/doctor/images/profile/5ffd8ffd36fd61610452989.jpg" alt="doctor">
                                </div>
                                <div class="booking-content">
                                    <span class="sub-title"><a href="#0">Dental</a></span>
                                    <h5 class="title">Dr. Danneal Walker <i class="fas fa-check-circle"></i></h5>
                                    <p>BDS, MDS - Oral &amp; Maxillofacial Surgery</p>
                                    <ul class="booking-list">
                                        <li><i class="icon-direction-alt"></i>Dhanmondi</li>
                                        <li><i class="las la-phone"></i> 014656235</li>
                                    </ul>
                                    <div class="booking-btn">
                                        <a href="#0" class="border-btn">Dental Fillings</a>
                                        <a href="#0" class="border-btn">Teeth Whitneing</a>
                                        <a href="#0" class="border-btn">Diagnosing oral diseases</a>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-right">
                                <div class="booking-content">
                                    <ul class="booking-list">
                                        <li><i class="fas fa-hourglass-start"></i>Joined us :</li>
                                        <li><i class="fas fa-stethoscope"></i>2 years ago</li>
                                        <li><span><i class="fas fa-wallet"></i>Fees : 9 $<span></li>
                                    </ul>
                                    <ul class="booking-tag">
                                        <li><a href="https://www.google.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="fab fa-youtube-square"></i></a></li>
                                    </ul>
                                    <div class="booking-btn">
                                        <a href="#0" class="border-btn active">Appointment Available</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking-section end -->

        <!-- overview-section start -->
        <section class="overview-section pd-b-80">
            <div class="container">
                <div class="overview-area mrb-40">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="overview-tab-wrapper">
                                <ul class="tab-menu">
                                    <li>Overview</li>
                                    <li class="active">Booking</li>
                                </ul>
                                <div class="tab-cont">
                                    <div class="tab-item">
                                        <div class="overview-tab-content ml-b-30">
                                            <div class="overview-content">
                                                <h5 class="title">About Me</h5>
                                                <p>He was born in the year 1990 at Azimpur. His father Md Abdul Mazid
                                                    was in government service. He hailed from the village Paramtala,
                                                    Muradnagar, of Cumilla distrct. His mother’s name was Khorsheda
                                                    Begum. His wife Begum Shahnaz Sinha is a Professor of English,
                                                    University of Dhaka. He has a son and a daughter.</p>
                                            </div>
                                            <div class="overview-content">
                                                <h5 class="title">Education</h5>
                                                <div class="overview-box">
                                                    <ul class="overview-list">
                                                        <li>
                                                            <div class="overview-user">
                                                                <div class="before-circle"></div>
                                                            </div>
                                                            <div class="overview-details">
                                                                <h6 class="title">Association of Oral and Maxillofacial
                                                                    Surgeons (AMOS)</h6>
                                                                <div>MBBS</div>
                                                                <span>2005 - 2007 (2 years)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="overview-user">
                                                                <div class="before-circle"></div>
                                                            </div>
                                                            <div class="overview-details">
                                                                <h6 class="title">American Dental Medical University
                                                                </h6>
                                                                <div>BDS</div>
                                                                <span>2005 - 2010</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="overview-content">
                                                <h5 class="title">Work & Experience</h5>
                                                <div class="overview-box">
                                                    <ul class="overview-list">
                                                        <li>
                                                            <div class="overview-user">
                                                                <div class="before-circle"></div>
                                                            </div>
                                                            <div class="overview-details">
                                                                <h6 class="title">Association of Oral and Maxillofacial
                                                                    Surgeons (AMOS)</h6>
                                                                <div>Professor &amp; Head</div>
                                                                <span>5 years</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="overview-content">
                                                <h5 class="title">Specializations</h5>
                                                <div class="overview-footer-area d-flex flex-wrap justify-content-between">
                                                    <ul class="overview-footer-list">
                                                        <li><i class="fas fa-long-arrow-alt-right"></i>Dental Fillings
                                                        </li>
                                                        <li><i class="fas fa-long-arrow-alt-right"></i>Teeth Whitneing
                                                        </li>
                                                        <li><i class="fas fa-long-arrow-alt-right"></i>Diagnosing oral
                                                            diseases</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-item">
                                        <div class="overview-tab-content">
                                            <div
                                                class="overview-booking-header d-flex flex-wrap justify-content-between ml-b-10">
                                                <div class="overview-booking-header-left mrb-10">
                                                    <h4 class="title">Available Schedule</h4>
                                                    <ul class="overview-booking-list">
                                                        <li class="available">Available</li>
                                                        <li class="booked">Booked</li>
                                                        <li class="selected">Selected</li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <form action="" class="appointment-from" method="post">
                                                <input type="hidden" name="_token" value="">
                                                <div class="overview-booking-area">
                                                    <div class="overview-booking-header-right mrb-10">
                                                        <div
                                                            class="overview-date-area d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="overview-date-header">
                                                                <h5 class="title">Choose Your Date & Time</h5>
                                                            </div>
                                                            <div class="overview-date-select">
                                                                <select class="form-control date-select"
                                                                    name="booking_date" required>
                                                                    <option value="2022-10-15">2022-10-15</option>
                                                                    <option value="2022-10-16">2022-10-16</option>
                                                                    <option value="2022-10-17">2022-10-17</option>
                                                                    <option value="2022-10-18">2022-10-18</option>
                                                                    <option value="2022-10-19">2022-10-19</option>
                                                                    <option value="2022-10-20">2022-10-20</option>
                                                                    <option value="2022-10-21">2022-10-21</option>
                                                                    <option value="2022-10-22">2022-10-22</option>
                                                                    <option value="2022-10-23">2022-10-23</option>
                                                                    <option value="2022-10-24">2022-10-24</option>
                                                                    <option value="2022-10-25">2022-10-25</option>
                                                                    <option value="2022-10-26">2022-10-26</option>
                                                                    <option value="2022-10-27">2022-10-27</option>
                                                                    <option value="2022-10-28">2022-10-28</option>
                                                                    <option value="2022-10-29">2022-10-29</option>
                                                                    <option value="2022-10-30">2022-10-30</option>
                                                                    <option value="2022-10-31">2022-10-31</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="clearfix">
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item1000am"
                                                                data-value="10:00:am">
                                                                <span>10:00:am</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item1030am"
                                                                data-value="10:30:am">
                                                                <span>10:30:am</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item1100am"
                                                                data-value="11:00:am">
                                                                <span>11:00:am</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item1130am"
                                                                data-value="11:30:am">
                                                                <span>11:30:am</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item1200pm"
                                                                data-value="12:00:pm">
                                                                <span>12:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item1230pm"
                                                                data-value="12:30:pm">
                                                                <span>12:30:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0100pm"
                                                                data-value="01:00:pm">
                                                                <span>01:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0130pm"
                                                                data-value="01:30:pm">
                                                                <span>01:30:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0200pm"
                                                                data-value="02:00:pm">
                                                                <span>02:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0230pm"
                                                                data-value="02:30:pm">
                                                                <span>02:30:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0300pm"
                                                                data-value="03:00:pm">
                                                                <span>03:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0330pm"
                                                                data-value="03:30:pm">
                                                                <span>03:30:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0400pm"
                                                                data-value="04:00:pm">
                                                                <span>04:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0430pm"
                                                                data-value="04:30:pm">
                                                                <span>04:30:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0500pm"
                                                                data-value="05:00:pm">
                                                                <span>05:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0530pm"
                                                                data-value="05:30:pm">
                                                                <span>05:30:pm</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                                class="available-time active-time item0600pm"
                                                                data-value="06:00:pm">
                                                                <span>06:00:pm</span>
                                                            </a>
                                                        </li>
                                                        <input type="hidden" name="time_serial" class="time" required>
                                                    </ul>
                                                </div>
                                                <div class="booking-appoint-area">
                                                    <div class="row justify-content-center ml-b-30">
                                                        <div class="col-lg-6 mrb-30">
                                                            <div class="booking-appoint-form-area">
                                                                <h4 class="title">Appointment Form</h4>
                                                                <form class="booking-appoint-form">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 form-group">
                                                                            <input type="text" name="name"
                                                                                placeholder="Patient name*" required>
                                                                        </div>
                                                                        <div class="col-lg-6 form-group">
                                                                            <input type="number" name="age"
                                                                                placeholder="Patient age*" required>
                                                                        </div>
                                                                        <div class="col-lg-12 form-group">
                                                                            <input type="email" name="email"
                                                                                placeholder="Email*" required>
                                                                        </div>
                                                                        <div class="col-lg-12 form-group">
                                                                            <input type="text" name="mobile"
                                                                                placeholder="Phone number*" required>
                                                                        </div>
                                                                        <div class="col-lg-12 form-group">
                                                                            <textarea name="disease" placeholder="Disease details*"></textarea>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-12 form-group d-flex flex-wrap justify-content-between">
                                                                            <button type="submit"
                                                                                class="cmn-btn payment-system"
                                                                                data-value="2">Pay In Cash</button>

                                                                            <button type="submit"
                                                                                class="cmn-btn payment-system"
                                                                                data-value="1">Pay Online</button>
                                                                            <input type="hidden" name="payment_system"
                                                                                class="payment" required>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mrb-30">
                                                            <div class="booking-confirm-area">
                                                                <h4 class="title">Confirm Your Booking</h4>
                                                                <ul class="booking-confirm-list">
                                                                    <li><span>Patient Name</span> : <span
                                                                            class="custom-color" id="name"></span>
                                                                    </li>
                                                                    <li><span>Age</span> : <span class="custom-color"
                                                                            id="age"></span></li>
                                                                    <li><span>Email</span> : <span class="custom-color"
                                                                            id="email"></span></li>
                                                                    <li><span>Phone Number</span> : <span
                                                                            class="custom-color" id="mobile"></span>
                                                                    </li>
                                                                    <li><span>Date & Time</span> : <span
                                                                            class="custom-color" id="date"></span> ,
                                                                        <span class="custom-color" id="book-time"></span>
                                                                    </li>
                                                                    <li><span>Fees</span> : 9 $</li>
                                                                </ul>
                                                                <div class="booking-confirm-btn">
                                                                    <a href="javascript:void(0)"
                                                                        class="cmn-btn-active reset">Reset</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-item">
                                        <div class="fb-comments" data-href="#" data-numposts="5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- overview-section end -->
    </div>
@endsection

@push('script')
    <script>
        (function($) {
            'use strict';

            $(document).on('click', '.active-time ', function() {
                $('.time').val($(this).data('value'));
                $('#book-time').text($(this).data('value'));
            });




            var booking = $('select[name=booking_date]').find('option:selected').val();
            $('.available-time').removeClass('active');
            var date = $('#date').text(booking);

            var url = "../booked_date.json";
            var date = booking;
            var id = '9';
            var data = {
                date: date,
                doctor_id: id
            }

            $.get(url, data, function(response) {
                $('.time').val('');
                if (response.length == 0) {
                    $('.available-time').removeClass('disabled').addClass('active-time');
                } else {
                    $('.available-time').removeClass('disabled').addClass('active-time');
                    $.each(response, function(key, value) {
                        var item = $(`.item${value}`);
                        item.addClass('disabled').removeClass('active-time');
                    });
                }
            });





            $('select[name=booking_date]').on('change', function() {
                $('.available-time').removeClass('active');
                var date = $('#date').text($(this).val());

                var url = "../booked_date.json";
                var date = $(this).val();
                var id = '9';
                var data = {
                    date: date,
                    doctor_id: id
                }

                $.get(url, data, function(response) {
                    $('.time').val('');
                    if (response.length == 0) {
                        $('.available-time').removeClass('disabled').addClass('active-time');
                    } else {
                        $('.available-time').removeClass('disabled').addClass('active-time');
                        $.each(response, function(key, value) {
                            var item = $(`.item${value}`);
                            item.addClass('disabled').removeClass('active-time');
                        });
                    }
                });
            });







            $(document).on('click', '.payment-system', function() {
                $('.payment').val($(this).data('value'));
            });

            $(document).on('input', '[name=name]', function() {
                $('#name').text($(this).val());
            });
            $(document).on('input', '[name=age]', function() {
                $('#age').text($(this).val());
            });
            $(document).on('input', '[name=email]', function() {
                $('#email').text($(this).val());
            });
            $(document).on('input', '[name=mobile]', function() {
                $('#mobile').text($(this).val());
            });

            $(document).on('click', '.reset ', function() {
                $('#name').text('');
                $('#age').text('');
                $('#email').text('');
                $('#mobile').text('');
                $('#book-time').text('');

                $('.available-time').removeClass('active');
                $('.time').val('');

                $('.appointment-from').trigger("reset");

            });
        })(jQuery);
    </script>
@endpush

{{-- <link rel="stylesheet" href="../assets/templates/basic/css/iziToast.min.css">
    <script src="../assets/templates/basic/js/iziToast.min.js"></script> --}}
