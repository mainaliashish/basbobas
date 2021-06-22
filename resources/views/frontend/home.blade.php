@extends('frontend.layouts.base')

@section('main-content')
    <div class="wrapper-area">
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

        <!-- Add your site or application content here -->
        @include('frontend.partials.menu')
        <!-- Slider Area Start Here -->
        <div class="slider-area">
            <div class="overlay"></div>
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider" class="slides">
                    @foreach ($sliders as $slider)
                        <img src="{{ asset(imagePath($slider->slider_image)) }}" alt="" title="#slider-direction-{{ $loop->iteration }}" />
                    @endforeach
                </div>
                <!-- Direction 1 -->
                @foreach ($sliders as $slider)
                   <div id="slider-direction-{{ $loop->iteration }}" class="t-cn slider-direction">
                    <div class="slider-content t-cn s-tb slider-{{ $loop->iteration }}">
                        <div class="title-container s-tb-c title-compress">
                            <h3 class="title4">{!! $slider->slider_title !!}</h3>
                            <div class="details-content">
                                {!! $slider->slider_description !!}
                            </div>
                            <div class="read-more">
                                <ul>
                                    {{-- <li><a href="#">Read More <i class="fa fa-arrow-circle-right"
                                                aria-hidden="true"></i></a></li> --}}
                                    <li><a href="{{ route('frontend-contact') }}">Contact Us <i class="fa fa-arrow-circle-right"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
                @endforeach
               
            </div>
        </div>
        <!-- Slider Area End Here -->
        <!-- Service Area Start Here -->
        <div class="service-area">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($services as $service)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="service-box">
                            <div class="service-box-top">
                                <a href="{{ route('frontend-service-detail', $service->id) }}"></a>
                                <h3><a href="{{ route('frontend-service-detail', $service->id) }}">{{ $service->service_title }}</a></h3>
                            </div>
                            <p>{!! Str::limit($service->service_description, 150, $end=".....") !!}</p>
                            <a href="{{ route('frontend-service-detail', $service->id) }}" class="service-read-more"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service Area End Here -->

        <!-- News Area Start Here -->
        <div class="news-area section-space-88-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2 class="section-title">Latest Projects</h2>
                            <div class="title-bottom-icon">
                                <span class="title-bottom-icon-left"></span>
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                <span class="title-bottom-icon-right"></span>
                            </div>
                            <p></p></p>
                        </div>
                    </div>
                </div>
                <div class="row inner-section-space-top">
                    @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="inner-news-box-top">
                            <div class="news-published">
                                <p class="news-date">{{ $project->created_at['day'] }} <br> {{ $project->created_at['month'] }}</p>
                                <p class="news-year">{{ $project->created_at['year'] }}</p>
                            </div>
                            <img class="img-responsive" src="{{ asset(imagePath($project->project_image_one)) }}" alt="news1">
                        </div>
                        <div class="inner-news-box-bottom">
                            <h4><a href="{{ route('frontend-project-detail', $project->id) }}">{{ $project->project_title }}</a></h4>
                            <p>{!! Str::limit($project->project_description, 200, '.........') !!}</p>
                            <a href="{{ route('frontend-project-detail', $project->id) }}" class="btn-read-more">Read More<i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="inner-news-box-top">
                            <div class="news-published">
                                <p class="news-date">05 <br> Jul</p>
                                <p class="news-year">2016</p>
                            </div>
                            <img class="img-responsive" src="{{ asset('frontend/img/news/2.jpg') }}" alt="news2">
                        </div>
                        <div class="inner-news-box-bottom">
                            <h4><a href="#">How To Make Impressive Designs</a></h4>
                            <p>In pro diam quas interesset, eu sit partem inimicusumsan assentior mei,consetetur…</p>
                            <a href="#" class="btn-read-more">Read More<i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="inner-news-box-top">
                            <div class="news-published">
                                <p class="news-date">05 <br> Jul</p>
                                <p class="news-year">2016</p>
                            </div>
                            <img class="img-responsive" src="{{ asset('frontend/img/news/3.jpg') }}" alt="news3">
                        </div>
                        <div class="inner-news-box-bottom">
                            <h4><a href="#">How To Make Impressive Designs</a></h4>
                            <p>In pro diam quas interesset, eu sit partem inimicusumsan assentior mei,consetetur…</p>
                            <a href="#" class="btn-read-more">Read More<i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- About Area Start Here -->
        <div class="about-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="about-left">
                            <h2>We Are <span>Professional</span></h2>
                            <p>{!! Str::limit($about->company_description, 600, "..................") !!} <br/><br/><a href='{{route('frontend-about')}}' class='btn-read-more'>Read More<i class='fa fa-chevron-right' aria-hidden='true'></i></a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="about-right img-back-side">
                            <div class="overlay"></div>
                            <a href="#"><img class="img-responsive" src="{{ asset(imagePath($about->company_about_image)) }}" alt="about"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
