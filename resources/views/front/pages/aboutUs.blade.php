
{{-- Metadata goes here --}}
@include('front.includes.main-header')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                    <h1 class="breadcrumb_title">About Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Text Content -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2 class="mt0">Our Mission Is To Serve You</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-xl-7">
                <div class="about_content">
                    <p class="large">BellusHomes has realized the professional need in the Istanbul market and has acquired a broader vision. <br></p>
                    <p>In order to invest in Turkey, priority is given to the portfolio with qualified capital in the ultra-luxury segment.Our company provides services such as investment and real estate consultancy,</p>
                    <p>investment and citizenship consultancy. In this context, it has a versatile perspective and a dominant marketing power in the global market, and undertakes a very important and national mission in the process of attracting a qualified investor profile to Turkey.</p>
                    <ul class="ab_counting">
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-user"></span></div>
                                <div class="details">
                                    <h3>13,123</h3>
                                    <p>Customers to date</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-home"></span></div>
                                <div class="details">
                                    <h3>$16 Million</h3>
                                    <p>In home sales</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="flaticon-transfer"></span></div>
                                <div class="details">
                                    <h3>$46 Million</h3>
                                    <p>In Savings</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-xl-5">
                <div class="about_thumb">
                    <img class="img-fluid w100" src="{{asset('assets/front/images/about/1.jpg')}}" alt="1.jpg">
                    <a class="popup-iframe popup-youtube color-white" href="https://www.youtube.com/watch?v=eV6lTEY95yY"><i class="flaticon-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt50">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>Why Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us style2">
                    <div class="icon">
                        <span class="flaticon-high-five"></span>
                    </div>
                    <div class="details">
                        <h4>Trusted By Thousands</h4>
                        <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us style2">
                    <div class="icon">
                        <span class="flaticon-home-1"></span>
                    </div>
                    <div class="details">
                        <h4>Wide Renge Of Properties</h4>
                        <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="why_chose_us style2">
                    <div class="icon">
                        <span class="flaticon-profit"></span>
                    </div>
                    <div class="details">
                        <h4>Financing Made Easy</h4>
                        <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
{{-- <section class="our-team bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team_slider">
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/1.jpg" alt="1.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Jennifer Barton</h4>
                                <p>Broker</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/2.jpg" alt="2.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Kathleen Myers</h4>
                                <p>Agent</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/3.jpg" alt="3.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Mariusz Ciesla</h4>
                                <p>Broker</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/4.jpg" alt="4.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Helene Powers</h4>
                                <p>Broker</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/1.jpg" alt="1.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Jennifer Barton</h4>
                                <p>Broker</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/2.jpg" alt="2.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Kathleen Myers</h4>
                                <p>Agent</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/3.jpg" alt="3.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Mariusz Ciesla</h4>
                                <p>Broker</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team_member">
                            <div class="thumb">
                                <img class="img-fluid" src="images/team/4.jpg" alt="4.jpg">
                                <div class="overylay">
                                    <ul class="social_icon">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h4>Helene Powers</h4>
                                <p>Broker</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Our Testimonials -->
@include('front.sections.testimonial')

<!-- Our Partners -->

@include('front.sections.ourPartners')

<!-- Our Footer -->
@include('front.includes.footer')
