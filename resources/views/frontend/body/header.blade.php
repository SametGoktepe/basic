@php
    $route = Route::current()->getName();  
@endphp


<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="{{ url('/') }}" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="{{ url('/') }}" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="{{ ($route =='home')?'active':'' }}"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="{{ ($route =='home.about')?'active' : '' }}"><a href="{{ route('home.about') }}">About</a></li>
                                    <li><a href="">Services</a></li>
                                    <li class="{{ ($route =='home.portfolio')?'active' : '' }}"><a href="{{ route('home.portfolio') }}">Portfolio</a></li>
                                    <li class="{{ ($route =='home.blog')?'active' : ''  }}"><a href="{{ route('home.blog') }}">Our Blog</a></li>
                                    <li class="{{ ($route =='contact.me')?'active' : '' }}"><a href="{{ route('contact.me') }}">contact me</a></li>
                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block">
                                <a href="{{ route('contact.me') }}" class="btn">Contact me</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="https://github.com/SametGoktepe"><i class="fab fa-github"></i></a></li>
                                    <li><a href="https://twitter.com/samet74goktepe"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/in/samet-göktepe-419932215/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/samet.goktepe/?hl=tr"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>