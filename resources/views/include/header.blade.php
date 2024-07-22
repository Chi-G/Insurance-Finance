<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6">
                <div class="topbar-left">
                    <ul>
                        <li><a href="mailto:info@tetherelitefinance.com"><i class="fa fa-envelope"></i> info@tetherelitefinance.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i> +1 236-499-2617</a></li>
                    </ul>
                </div>
                </div>
                <div class=" col-md-6 col-sm-6">
                    <div class="crypto-marquee">
                        <div class="crypto-prices">
                            <!-- This will be filled dynamically with JavaScript -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll white-logo" href="index.html">
                                    <img src="{{asset('frontend/img/logo/logo3.png')}}" alt="">
                                </a>
                                <a class="navbar-brand page-scroll black-logo" href="index.html">
                                    <img src="{{asset('frontend/img/logo/logo.png')}}" alt="">
                                </a>
                            </div>
                            <!-- logo end -->
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option end -->
                                <a class="s-menu" href="{{ route('login') }}">Login</a>
                            </div>

                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pages" href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li><a href="{{ url('/about') }}">About us</a></li>
                                            <li><a href="{{ url('/investment') }}">Investment</a></li>
                                            <li><a class="pages" href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('/team') }}">team</a></li>
                                                    <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                                    <li><a href="{{ url('/reviews') }}">Reviews</a></li>
                                                    <li><a href="{{ route('login') }}">Login</a></li>
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                </ul>
                                            </li>
                                            {{-- <li><a class="pages" href="{{ url('/blogs') }}">Blog</a> --}}
                                            </li>
                                            <li><a href="{{ url('/contact') }}">contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="{{ url('/')}}"><img src="{{asset('frontend/img/logo/logo.png')}}" alt="" /></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a class="pages" href="{{ url('/') }}">Home</a>
                                </li>
                                <li><a href="{{ url('/about') }}">About us</a></li>
                                <li><a href="{{ url('/investment') }}">Investment</a></li>
                                <li><a class="pages" href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/team') }}">team</a></li>
                                        <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                        <li><a href="{{ url('/reviews') }}">Reviews</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                </li>
                                <li><a class="pages" href="{{ url('/blog')}}">Blog</a>
                                </li>
                                <li><a href="{{ url('/contact')}}">contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
