	        <!-- Our Team Area Start Here -->
	        <div class="team-area section-space-88-64">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="section-title-area">
								<h2 class="section-title">Our Teams</h2>
								 <div class="title-bottom-icon">
                                <span class="title-bottom-icon-left"></span>
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                <span class="title-bottom-icon-right"></span>
                            </div>
							</div>
						</div>
					</div>
					<div class="row inner-section-space-top">
						
						@foreach ($teams as $team)
						<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 margin-b-30">
							<div class="team-box">
								<div class="overlay-box">
									<div class="overlay">
										<ul>
											<li><a href="{{ $team->team_facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
									</div>	
									<div class="img-back-side">
										<a href="#"><img class="img-responsive img-rounded" src="{{ asset(imagePath($team->team_image)) }}" alt="team1" style="height: 350px;"></a>
									</div>
								</div>
								<h3><a href="#">{{ $team->team_name }}</a></h3>
								<p><b>Phone Number : {{ $team->team_contact }}</b></p>
								<p><b>Address : {{ $team->team_address }}</b></p>
							</div>
						</div>		
											
						@endforeach
						
					</div>
				</div> 
			</div>
	        <!-- Our Team Area End Here -->