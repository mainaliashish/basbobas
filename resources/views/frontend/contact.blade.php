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
								<h2>Contact Us</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-bennar-right">
								<ul>
									<li><a href="{{ route('frontend-home') }}">Home</a> /</li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Inner page Header Banner Area End Here -->
	        <!-- Page Contact Us Area Start Here -->
			<div class="page-contact-us-area section-space-93-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<div class="page-contact-us-left">
								<h3 class="section-sub-title">Company Information</h3>
								<p>{!! $about->company_description !!}</p>
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $about->company_address }}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>{{ $about->phone_number_one .', '. $about->phone_number_two }}</li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $about->company_email }}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>{{ $about->company_fax }}</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<div class="page-contact-us-right">	
							<h3 class="section-sub-title ">Send Us Message</h3>	
								<div class="row">
									<div class="contact-form"> 
						{!! Form::open(array('method'=>'POST','route' => 'frontend.messages.post', 'files'=>true)) !!}

											
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" placeholder="Name*" class="form-control" id="form-name" name="sender_name" data-error="Name field is required" required>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" placeholder="Email" class="form-control" id="form-email" name="sender_email">
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<input type="text" placeholder="Mobile Number" class="form-control" id="form-email" name="sender_contact" required>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20" name="message_description" data-error="Message field is required" required></textarea>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group margin-b-0">
														<button type="submit" class="btn-read-more-fill" value="Send Message">Send Message</button>
													</div>
												</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Contact Us Page Area End Here -->
       		<!-- Google Map Integrate Start Here -->
			<div class="container-fluid">
				<div class="row">
					<div class="google-map-area">
						<div id="googleMap" style="width:100%; height:548px;"></div>
					</div>
				</div>
			</div>
	        <!-- Google Map Integrate End Here -->
@endsection