@extends('frontend.layouts.base')
@section('main-content')
    <body>
    	<div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
	        <!-- Header Area Start Here -->
	        @include('frontend.partials.menu')
	        <!-- Header Area End Here -->
			<!-- Inner page Header Banner Area Start Here -->
			<div class="header-bennar-area">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-left">
								<h2>About Us</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>About Us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
	        <!-- Page About Us Area Start Here -->
	        <div class="page-about-us-area section-space">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<div class="page-about-us-left">
								<h2>Who We are</h2>
								<p>
									{!! $about->company_description !!}
								</p>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<div class="page-about-us-right">
								<a href="#"><img alt="about-2" class="img-responsive" src="{{ asset(imagePath($about->company_about_image)) }}"></a>
							</div>
						</div>
					</div>
					{{-- <h3>Privacy policy</h3> --}}
				</div>
			</div>
			@include('frontend.partials.teams')
	        
		</div>
@endsection