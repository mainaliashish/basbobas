@extends('frontend.layouts.base')

@section('main-content')
  <body>
    	<div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
	        @include('frontend.partials.menu')
			<!-- Inner page Header Banner Area Start Here -->
			<div class="header-bennar-area">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-left">
								<h2>Services</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>Services</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
			<!-- Page Services 3 Top Area Start Here -->
			<div class="page-services-3-top-area section-space-b-less-30">
				<div class="container">
					<div class="row">
						@foreach ($p_services as $service)
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="page-services-3-box">
								<div class="media">
									<div class="featured-box pull-left">
										<div class="overlay">
											<a href="{{ route('frontend-service-detail', $service->id) }}"><i aria-hidden="true" class="fa fa-chevron-right"></i></a>
										</div>
										<a href="{{ route('frontend-service-detail', $service->id) }}"><img class="media-object" alt="featured2" src="{{ asset(imagePath($service->service_image)) }}" style="width: 270px;height: 174px;"></a>
									</div>
									<div class="media-body">
										<h3 class="section-sub-title"><a href="{{ route('frontend-service-detail', $service->id) }}">{{ $service->service_title }}</a></h3>
										<p>{!! Str::limit($service->service_description, 150, '.......') !!}</p>
										<a href="{{ route('frontend-service-detail', $service->id) }}" class="btn btn-primary btn-xs">Read More</a>

									</div>
								</div>
							</div>
						</div>				
						@endforeach
					</div>
					{{ $p_services->links() }}
				</div>
			</div>
@endsection