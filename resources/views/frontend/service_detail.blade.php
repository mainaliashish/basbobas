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
								<h2>Services Details</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>Services Details</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner Page Header Banner Area End Here -->
			<!-- Page Services Details Area Start Here -->
			<div class="page-services-details-area section-space">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<div class="page-services-details-content">
								<a href="#">
									<img class="img-responsive" src="{{ asset('frontend/img/services/services-details-banner.jpg') }}" alt="Generic placeholder image">
								</a>
								<h3 class="section-sub-title">{{ $service->service_title }}</h3>
								<p>{!! $service->service_description !!}</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
								<div class="sidebar">
				                <div class="recent-news-box">
									<h3 class="sidebar-title">Popular Services</h3>

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
			</div>
			
@endsection