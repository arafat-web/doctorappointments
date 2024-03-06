@extends('client.layout.app')
@section('title')
    Welcome to Doctor Appointments System | Doctor Appointments
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
                            <h2 class="title">About Us</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
                    <div class="col-lg-6">
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
            </div>
        </section>
        <!-- contact-item-section end -->

        <!-- contact-section start -->
        <section class="contact-section ptb-80">
            <div class="container">
                <div class="row justify-content-center mrb-40">

                </div>
            </div>
        </section>
        <!-- contact-section end -->
    </div>
@endsection
