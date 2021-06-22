@extends('frontend.layouts.base')

@section('main-content')
<body>
    <div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    @include('frontend.partials.menu')
    			<!-- Inner page Header Banner Area Start Here -->
			<div class="header-bennar-area">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-left">
								<h2>News Details</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>News</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
			<!-- Page News Details Area Start Here -->
			<div class="page-news-details-area section-space">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="page-news-details-content solid-underline">
										<a href="#">
											<img alt="Generic placeholder image" src="{{ asset(imagePath($news->news_image)) }}" class="img-responsive">
										</a>
										<h3><a href="#">{{ $news->news_title }}</a></h3>
										<ul class="comments-info solid-underline">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $news->created_at['day'] . ' ' . $news->created_at['month'] .' , '. $news->created_at['year']  }}</li>
											<li><i class="fa fa-user" aria-hidden="true"></i>{{ $news->news_author }}</li>
										</ul>
										<p>{!! $news->news_description !!}</p>
									</div>            
				
								</div>
							</div>
						</div>
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
								<div class="sidebar">
				                <div class="recent-news-box">
									<h3 class="sidebar-title">Our Services</h3>

									@foreach ($services as $service)
									<div class="media solid-underline">
										<a class="pull-left" href="#">
											<img class="media-object" src="{{ asset('frontend/img/sidebar-type1/recent-news/2.jpg') }}" style="width: 75px;height:69px;">
										</a>
										<div class="media-body">
											<a href="{{ route('frontend-service-detail', $service->id) }}">
											{{ $service->service_title }}
											</a>
											<p>{!! Str::limit($service->service_description, 90, '...') !!}</p>
											<a href="{{ route('frontend-service-detail', $service->id) }}" class="btn btn-info btn-xs">Read More</a>
										</div>
									</div>
									@endforeach
									
								</div>
							</div>
						</div>
				</div>
			</div>
@endsection