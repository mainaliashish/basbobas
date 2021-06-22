@extends('frontend.layouts.base')
@section('main-content')
<body>
    	<div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	        @include('frontend.partials.menu')
	        <!-- Header Area End Here -->
			<!-- Inner page Header Banner Area Start Here -->
			<div class="header-bennar-area">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-left">
								<h2>Error Page</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="#">Home</a> /</li>
									<li>404</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
		 	<!-- Page Error Area Start Here -->
			<div class="page-error-area section-space">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="page-error-top">
								<span>404</span>
								<p>Sorry Page Was Not Found</p>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="page-error-bottom">
								<p>The page you are looking is not available or has been removed.</p>
								<p>Try going to Home Page by using the button below.</p>
								<a href="index.html" class="btn btn-error">Go To Home Page</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	        <!-- Page Error Area End Here -->
	        <!-- Footer Area End Here -->
		</div>
	        <!-- Google Map Integrate End Here -->
@endsection