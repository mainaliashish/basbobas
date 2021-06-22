            <footer>
				<div class="footer-area-top section-space-b-less-30">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-b-30">
								<h3>About Company</h3>
								<p>{!! Str::limit($about->company_description, 300, $end="......") !!} </p>
								<ul class="footer-social">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 margin-b-30"></div>
							<div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 margin-b-30">
								<h3>Corporate Office</h3>
								<ul class="corporate-address">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>{!! $about->company_address !!}</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>{!! $about->phone_number_one .' , '. $about->phone_number_two .' ,'. $about->phone_number_three !!}</li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i>{!! $about->company_email !!}</li>
									<li><i class="fa fa-fax" aria-hidden="true"></i>Fax : {!! $about->company_fax !!} </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-area-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<i><p>Copyright &copy; {!! $about->company_name !!}. Website developed by Ashish Mainali <b>e-mail : mainaliashish@outlook.com</b></p></i>
							</div>
						</div>
					</div>
				</div>
	        </footer>
	        <!-- Footer Area End Here -->
		</div>
		<!-- Preloader Start Here -->
	    <div id="preloader"></div>
	    <!-- Preloader End Here -->
	    <!-- jquery-->	
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
        
		<!-- bootstrap js -->
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

     	<!-- Owl Cauosel JS -->
		<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

		<!-- Nivo slider js -->		
		<script src="{{ asset('frontend/lib/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('frontend/lib/custom-slider/home.js') }}" type="text/javascript"></script>
		
		<!-- Meanmenu Js -->
		<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>

		<!-- WOW JS -->		
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>

		<!-- plugins js -->
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>

		<!-- jQuery Srollup -->
		<script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>

		<!-- jQuery Isotope -->
		<script src="{{ asset('frontend/js/isotope.pkgd.js') }}" type="text/javascript"></script>
        
        <!-- jquery.counterup js -->
        <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>

        <!-- Colorbox js -->
		<script src="{{ asset('frontend/js/jquery.colorbox-min.js') }}" type="text/javascript"></script>

		<!-- Magic Popup js -->
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>

        <!-- Custom Js -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>  
		@include('backend.partials.toastr')
		<script>
			$(window).on("resize", function(){
			if($(window).width() < 766){
				var url = "{{ asset(imagePath($about->company_logo)) }}";
				$("#company_logo_mobile").attr('src', url);
			} 
			});
		</script>
    </body>

</html>