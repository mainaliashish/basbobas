@extends('frontend.layouts.base')

@section('main-content')
<body>
    <div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('frontend.partials.menu')

			<div class="header-bennar-area">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-left">
								<h2>Project Details</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>Project Details</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
			<!-- Page Project Details Area Start Here -->
			<div class="page-project-details-area section-space">
				<div class="container">
			<!-- Page Projects 2 Featured Area Start Here -->
				<div class="projects-2-featured-area section-space">
					<div class="container-fluid inner-section-space-top">
						<div class="row featuredContainer">			
							@if ($project->project_image_one)								
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 Buildings Tiling Digging">
								<div class="featured-box">
									<div class="overlay">
										<a href="{{ asset(imagePath($project->project_image_one)) }}" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
									</div>
									<a href="#"><img src="{{ asset(imagePath($project->project_image_one)) }}" alt="featured1"></a>
								</div>
							</div>
							@endif		              
							@if ($project->project_image_two)								
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 Buildings Tiling Digging">
								<div class="featured-box">
									<div class="overlay">
										<a href="{{ asset(imagePath($project->project_image_two)) }}" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
									</div>
									<a href="#"><img src="{{ asset(imagePath($project->project_image_two)) }}" alt="featured1"></a>
								</div>
							</div>
							@endif		              
							@if ($project->project_image_three)								
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 Buildings Tiling Digging">
								<div class="featured-box">
									<div class="overlay">
										<a href="{{ asset(imagePath($project->project_image_three)) }}" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
									</div>
									<a href="#"><img src="{{ asset(imagePath($project->project_image_three)) }}" alt="featured1"></a>
								</div>
							</div>
							@endif	
							@if ($project->project_image_four)								
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 Buildings Tiling Digging">
								<div class="featured-box">
									<div class="overlay">
										<a href="{{ asset(imagePath($project->project_image_four)) }}" class="zoom" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
									</div>
									<a href="#"><img src="{{ asset(imagePath($project->project_image_four)) }}" alt="featured1"></a>
								</div>
							</div>
							@endif
						</div>
					</div>
				</div>
						<div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
							<div class="page-project-details-content">
								<h3 class="section-sub-title">Industrial Machine Implement</h3>
								<h4>Sorem ipsum dolor sit amet, consectetur adipisicing eli sed do eiusmdolor consetempo dearncididunt dolore tetur adipisicing eli sed.</h4>
								<p>Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teididunt ut labore et dolore. Lorem ipsum dolor sit ameo eiusmod tempor. incididunt ut labore et dolore.Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teididunt ut labore et dolore. Lorem ipsum dolor sit ameo eiusmod tempor.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
								<p>Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teididunt ut labore et dolore. Lorem ipsum dolor sit ameo eiusmod tempor.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
							</div>
						</div>
				</div>
			</div>

@endsection