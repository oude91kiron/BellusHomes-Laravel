	<section class="footer_one home5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget home5">
						<h4>About Our Company</h4>
						<p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget home5">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="{{route('aboutUs')}}">About Us</a></li>
							<li><a href="{{route('services')}}">Services</a></li>
							<li><a href="{{route('properties')}}">Projects</a></li>
							<li><a href="{{route('contact')}}">Support Center</a></li>
							<li><a href="{{route('blog')}}">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget home5">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li><a href="mailto:{{$sitedata->email}}">{{$sitedata->email}}</a></li>
							<li><a href="#">Mellet Street, No 90</a></li>
							<li><a href="#">34097, istanbul.</a></li>
							<li><a href="tel:{{$sitedata->whatsapp}}" target="__black">{{$sitedata->whatsapp}}</a></li>
							<li><a href="https://wa.me/{{$sitedata->whatsapp}}" target="__black">{{$sitedata->whatsapp}}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget home5">
						<h4>Follow us</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="https://facebook.com/{{$sitedata->facebook}}"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="https://instagram.com/{{$sitedata->instagram}}"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="https://wa.me/{{$sitedata->whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
							<li class="list-inline-item"><a href="https://twitter.com/{{$sitedata->twitter}}"><i class="fa fa-twitter"></i></a></li>
						</ul>
						<h4>Subscribe</h4>
						<form class="footer_mailchimp_form home5">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area home5 pt30 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget home5">
						<ul>
							<li class="list-inline-item"><a href="{{route('home')}}">Home</a></li>
							<li class="list-inline-item"><a href="{{route('aboutUs')}}">About Us</a></li>
							<li class="list-inline-item"><a href="{{route('services')}}">Services</a></li>
							<li class="list-inline-item"><a href="{{route('properties')}}">Projects</a></li>
							<li class="list-inline-item"><a href="{{route('blog')}}">Blog</a></li>
							<li class="list-inline-item"><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget home5 text-right">
						<p>© 2023 Mash Media. Made with love.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- Wrapper End -->
<script type="text/javascript" src="{{asset('assets/front/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/isotop.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/timepicker.js')}}"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{asset('assets/front/js/script.js')}}"></script>
