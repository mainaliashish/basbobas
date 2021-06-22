        <!-- Header Area Start Here -->
        <header>
            <div class="header-style1-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <div class="header-top-left">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="{!! $about->phone_number_one !!}">Call :
                                                {!! $about->phone_number_one !!}</a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                                                href="mailto:{!! $about->company_email !!}">{!! $about->company_email !!}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="header-top-right">
                                    <ul>
                                        <li><a href="{!! $about->company_facebook !!}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{!! $about->company_twitter !!}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header-area" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <div class="logo-area">
                                    <a href="{{ route('frontend-home') }}"><img class="img-responsive" src="{{ asset(imagePath($about->company_logo)) }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="main-menu-area">
                                    <nav>
                                        <ul>
                                            <li class={{ $active_home ?? '' }}><a href="{{ route('frontend-home') }}">Home</a></li>
                                            <li class={{ $active_services ?? '' }}><a href="{{ route('frontend-services') }}">Services</a>
                                            </li>
                                            <li class={{ $active_projects ?? '' }}><a href="{{ route('frontend-projects') }}">Projects</a>
                                            </li>
                                            <li class={{ $active_news ?? '' }}><a href="{{ route('frontend-news') }}">News</a>
                                            </li>
                                            <li class={{ $active_about ?? '' }}><a href="{{ route('frontend-about') }}">About Us</a></li>
  
                                            <li class={{ $active_contact ?? '' }}><a href="{{ route('frontend-contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="{{ route('frontend-home') }}">Home</a>
                                            </li>
                                            
                                            <li><a href="{{ route('frontend-services') }}">Services</a>
                                            </li>
                                            <li><a href="{{ route('frontend-projects') }}">Projects</a>
                                            </li>
                                            <li><a href="{{ route('frontend-about') }}">About Us</a></li>
                                            <li><a href="{{ route('frontend-contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </div>
        </header>
        <!-- Header Area End Here -->