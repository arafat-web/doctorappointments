<header class="header-section header-section-two">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container-fluid">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="site-logo site-title" href="/"><img src="{{asset('client')}}/assets/images/logoIcon/logo.png"
                                alt="site-logo"></a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto mr-auto">
                                <li class="{{ Request::path() == '/' ? 'active' : ''}}"><a href="/">Home</a></li>
                                <li class="{{ Request::path() == 'doctors' ? 'active' : ''}}"><a href="/doctors">Doctors</a></li>
                                <li class="{{ Request::path() == 'diseases' || Request::path() == 'disease' ? 'active' : ''}}"><a href="/diseases">Disease</a></li>
                                <li class="{{ Request::path() == 'contact-us' ? 'active' : ''}}"><a href="/contact-us">Contact Us</a></li>
                                <li class="{{ Request::path() == 'about-us' ? 'active' : ''}}"><a href="/about-us">About Us</a></li>
                            </ul>
                            <div class="header-bottom-action">
                                <a href="/doctors" class="cmn-btn">Book Now</a>
                            </div>
                            <div class="header-bottom-action">
                                <a href="/login" class="cmn-btn">Login Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>