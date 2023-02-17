
{{-- Metadata goes here --}}
@include('front.includes.main-header')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                        <h1 class="breadcrumb_title">Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Service Section Area -->
	<section class="our-service pb30">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/1.jpg')}}" alt="1.jpg">
						</div>
						<div class="details">
							<h4>Free Consultancy about real estate market in istanbul city.</h4>
						</div>
					</div>
				</div>
                
                <div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/7.jpg')}}" alt="7.jpg">
						</div>
						<div class="details">
							<h4>We help you get the Turkish citizenship through real estate investing.</h4>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/2.jpg')}}" alt="2.jpg">
						</div>
						<div class="details">
							<h4>Our hospitality team will picking you from airport to your hotel.</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/3.jpg')}}" alt="3.jpg">
						</div>
						<div class="details">
							<h4>Help you renting the property after purchasing.</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/4.jpg')}}" alt="4.jpg">
						</div>
						<div class="details">
							<h4>We provide sale in installments for over than 30 months</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/5.jpg')}}" alt="5.jpg">
						</div>
						<div class="details">
                            <h4>We take care to prepare the documents that in requird.</h4>
                        </div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/6.jpg')}}" alt="6.jpg">
						</div>
						<div class="details">
							<h4>We can appraisal a project or propert for free.</h4>
						</div>
					</div>
				</div>
				
				{{-- <div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/8.jpg')}}" alt="8.jpg">
						</div>
						<div class="details">
							<h4>A free trasportation to visit projects that we provide.</h4>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="service_grid">
						<div class="thumb">
							<img class="img-fluid w100" src="{{asset('assets/front/images/service/9.jpg')}}" alt="9.jpg">
						</div>
						<div class="details">
                            <h4>Our Translate team help you to communicate as you at home.</h4>
                        </div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>

<!-- Our Footer -->
@include('front.includes.footer')
