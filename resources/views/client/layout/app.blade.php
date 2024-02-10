<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/logoIcon/favicon.png">
    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/fontawesome-all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/line-awesome.min.css">
    <!-- nice-select css -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/nice-select.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/bootstrap.min.css">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/swiper.min.css">
    <!-- chosen css -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/chosen.css">
    <!-- icon css -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/themify.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/animate.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/main.css">
    <!-- site color -->
    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/colorb45d.css?color1=FF8787">

</head>

<body>

    <div class="loader">
        <div class="heartbeatloader">
            <svg class="svgdraw" width="100%" height="100%" viewBox="0 0 150 400">
                <path class="path"
                    d="M 0 200 l 40 0 l 5 -40 l 5 40 l 10 0 l 5 15 l 10 -140 l 10 220 l 5 -95 l 10 0 l 5 20 l 5 -20 l 30 0"
                    fill="transparent" stroke-width="4" stroke="black" />
            </svg>
            <div class="innercircle"></div>
            <div class="outercircle"></div>
        </div>
    </div>

    <!-- header-section start -->
    @include('client.layout.header')
    <!-- header-section end -->
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <div class="all-sections">
        @yield('content')
    </div>
    <!-- call-to-action section start -->
    <section class="call-to-action-section">
        <div class="container">
            <div class="row justify-content-center align-self-center">
                <div class="col-lg-8 text-center">
                    <div class="call-to-action-area">
                        <div class="call-info">
                            <div class="call-info-thumb">
                                <img src="assets/images/frontend/footer/5fc4bbd9ae3d01606728665.png" alt="call">
                            </div>
                            <div class="call-info-content">
                                <h4 class="title">
                                    <span>Emergency Call</span>
                                    <a href="#">+12345-678-9</a>
                                </h4>
                            </div>
                        </div>
                        <div class="mail-info">
                            <div class="mail-info-thumb">
                                <img src="assets/images/frontend/footer/5fc4bbd9b073d1606728665.png" alt="email">
                            </div>
                            <div class="mail-info-content">
                                <h4 class="title">
                                    <span>24/7 Email Support</span>
                                    <a href="#"><span>DrsPoint@gmail.com</span></a>
                                </h4>
                            </div>
                        </div>
                        <span class="dc-or-text">- OR -</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-to-action section end -->


    <!-- footer-section start -->
    @include('client.layout.footer')
    <!-- footer-section end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jquery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('client/assets')}}/templates/basic/js/jquery-3.3.1.min.js"></script>
    <!-- migarate-jquery -->
    <script src="{{asset('client/assets')}}/templates/basic/js/jquery-migrate-3.0.0.js"></script>
    <!-- bootstrap js -->
    <script src="{{asset('client/assets')}}/templates/basic/js/bootstrap.min.js"></script>
    <!-- nice-select js-->
    <script src="{{asset('client/assets')}}/templates/basic/js/jquery.nice-select.js"></script>
    <!-- chosen js -->
    <script src="{{asset('client/assets')}}/templates/basic/js/chosen.jquery.js"></script>
    <!-- swipper js -->
    <script src="{{asset('client/assets')}}/templates/basic/js/swiper.min.js"></script>
    <!-- wow js file -->
    <script src="{{asset('client/assets')}}/templates/basic/js/wow.min.js"></script>
    <!-- main -->
    <script src="{{asset('client/assets')}}/templates/basic/js/script.js"></script>


    <link rel="stylesheet" href="{{asset('client/assets')}}/templates/basic/css/iziToast.min.css">
    <script src="{{asset('client/assets')}}/templates/basic/js/iziToast.min.js"></script>


    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>

</body>


</html>
