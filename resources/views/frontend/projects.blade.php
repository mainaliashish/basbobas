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
								<h2>Latest Projects</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>Projects</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
			<!-- Page News Area Start Here -->
			<div class="page-news-area section-space-b-less-30">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<div class="inner-page-news-area">
								<div class="row">
									@foreach ($projects as $project)
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="inner-page-news-box">
											<div class="inner-news-box-top">
												<div class="news-published">
													<p class="news-date">{{ $project->created_at['day'] }} <br> {{ $project->created_at['month'] }}</p>
													<p class="news-year">{{ $project->created_at['year'] }}</p>
												</div>	
												<img alt="news1" src="{{ asset(imagePath($project->project_image_one)) }}" style="width:409px;height:244px;" class="img-responsive">
											</div>
											<div class="inner-news-box-bottom">
												<h4><a href="{{ route('frontend-project-detail', $project->id) }}">{{ $project->project_title }}</a></h4>
												<p> {!! Str::limit($project->project_description, 200, '.....') !!}</p>
												<a class="btn-read-more" href="{{ route('frontend-project-detail', $project->id) }}">Read More<i aria-hidden="true" class="fa fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
									@endforeach
									
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
			</div>			
			<!-- Page News Area End Here -->

@endsection