@extends('client.layout.app')
@section('title')
    Contact Us | Doctor Appointments
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
                            <h2 class="title">Contact Us</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- contact-item-section start -->
        <section class="contact-item-section pd-t-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-form-area">
                            <div class="row ml-b-30">
                                <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
                                    <div class="contact-item d-flex flex-wrap align-items-center">
                                        <div class="contact-item-icon">
                                            <i class="lar la-envelope"></i>
                                        </div>
                                        <div class="contact-item-details">
                                            <h5 class="title">Email</h5>
                                            <ul class="contact-item-list">
                                                <li><a href="">DrsPoint@gmail.com</a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
                                    <div class="contact-item d-flex flex-wrap align-items-center">
                                        <div class="contact-item-icon">
                                            <i class="fas fa-headphones-alt"></i>
                                        </div>
                                        <div class="contact-item-details">
                                            <h5 class="title">Phone</h5>
                                            <ul class="contact-item-list">
                                                <li>Phone 1: +1 555-7890-123
                                                    Phone 2: (+ 760) 987-65-43210.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
                                    <div class="contact-item d-flex flex-wrap align-items-center">
                                        <div class="contact-item-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-item-details">
                                            <h5 class="title">Address</h5>
                                            <ul class="contact-item-list">
                                                <li>Dhaka, Bangladesh</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-item-section end -->

        <!-- contact-section start -->
        <section class="contact-section ptb-80">
            <div class="container">
                <div class="row justify-content-center mrb-40">
                    <div class="col-lg-12">
                        <div class="contact-form-area">
                            <div class="section-header">
                                <h2 class="section-title">Send Your Message Us</h2>
                                <p class="m-0">Please join the discussion and be connect with us.</p>
                            </div>
                            <form class="contact-form" action="#" method="POST">
                                <input type="hidden" name="_token" value="bg9RmSEjvRRE5VvYGoCwWyM7kmQOH8Bkep9UgMFM">
                                <div class="row justify-content-center ml-b-20">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your Name" value=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" value=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" value=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea placeholder="Your Message" name="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="submit-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->
    </div>
@endsection
