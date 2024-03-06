@extends('client.layout.app')
@section('title')
   Login | Doctor Appointments
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
                            <h2 class="title">Login</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- contact-section start -->
        <section class="contact-section ptb-80">
            <div class="container">
                <div class="row justify-content-center mrb-40">
                    <div class="card">
                        <div class="card-header">
                            <h3 class=" text-white text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center ml-b-20">
                                <form style="min-width: 400px;" class="contact-form" action="#" method="POST">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" value=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Your Password"
                                                value="" required>
                                        </div>
                                        <div class="form-group">

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="submit-btn">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->
    </div>
@endsection
