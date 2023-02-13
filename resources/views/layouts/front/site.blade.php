<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">



<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}"> 

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/rangeslider.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/front/images/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">


<!-- Title -->
<title>Bellushomes Realestate</title>
<!-- Favicon -->
<link href="{{asset('assets/front/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{asset('assets/front/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


{{-- <!-- main header start -->
@include('front.includes.main-header')
<!-- main header end -->

<!-- Banner start -->
@include('front.includes.banner')
<!-- banner end -->


<!-- content start -->  
    @yield('content')
<!-- content end -->


<!-- Footer start -->
@include('front.includes.footer')
<!-- Footer end --> --}}



<body>
  <div class="wrapper">
    <div class="preloader"></div>
  
    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one style2 home10 navbar-scrolltofixed stricky main-menu">
      <div class="container p0">
          <!-- Ace Responsive Menu -->
          <nav>
              <!-- Menu Toggle btn-->
              <div class="menu-toggle">
                  <img class="nav_logo_img img-fluid" src="{{asset('assets/front/images/header-logo.png')}}" alt="header-logo.png">
                  <button type="button" id="menu-btn">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <a href="#" class="navbar_brand float-left dn-smd">
                  <img class="logo1 img-fluid" src="{{asset('assets/front/images/header-logo.png')}}" alt="header-logo.png">
                  <img class="logo2 img-fluid" src="{{asset('assets/front/images/header-logo.png')}}" alt="header-logo.png">
                  <span>FindHouse</span>
              </a>
              <!-- Responsive Menu Structure-->
              <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
              <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                  <li>
                      <a href="#"><span class="title">Home</span></a>
                      <!-- Level Two-->
                  </li>
                  <li>
                      <a href="#"><span class="title">Listing</span></a>
                      <!-- Level Two -->
                  </li>

                  <li>
                      <a href="#"><span class="title">Property</span></a>
                  </li>

                  <li>
                      <a href="#"><span class="title">Pages</span></a>
                  </li>

                  <li>
                      <a href="#"><span class="title">Blog</span></a>
                  </li>

                  <li class="last">
                      <a href="page-contact.html"><span class="title">Contact</span></a>
                  </li>

              </ul>
          </nav>
      </div>
    </header>
   
  
    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
      <div class="mobile-menu">
        <div class="header stylehome1">
          <div class="main_logo_home2 text-center">
                  <img class="nav_logo_img img-fluid mt20" src="{{asset('assets/front/images/header-logo2.png')}}" alt="header-logo2.png">
                  <span class="mt20">FindHouse</span>
          </div>
          <ul class="menu_bar_home2">
            <li class="list-inline-item"><a href="#menu"><span></span></a></li>
          </ul>
        </div>
      </div><!-- /.mobile-menu -->
      <nav id="menu" class="stylehome1">
        <ul>
          <li><span>Home</span></li>
          <li><span>Listing</span></li>
          <li><span>Property</span></li>
          <li><span>Blog</span></li>
          <li><span>Pages</span></li>
          <li><a href="page-contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>

    <!-- 10th Home Slider -->
    <div class="home10-mainslider">
      <div class="container-fluid p0">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-banner-wrapper home10">
                <div class="banner-style-one owl-theme owl-carousel">
                    <div class="slide slide-one" style="background-image: url({{asset('assets/front/images/home/7.jpg')}});height: 620px;">
                        <div class="container">
                            <div class="row home-content">
                                <div class="col-lg-12 text-center p0">
                                  <h2 class="banner_top_title">$13,000<small>/mo</small></h2>
                                    <h3 class="banner-title">Gorgeous Villa Bay View</h3>
                                    <p>Beds: 3,  Baths: 4</p>
                                    <div class="btn"><a href="#" class="banner-btn">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-one" style="background-image: url({{asset('assets/front/images/home/2.jpg')}});height: 620px;">
                        <div class="container">
                            <div class="row home-content">
                                <div class="col-lg-12 text-center p0">
                                  <h2 class="banner_top_title">$13,000<small>/mo</small></h2>
                                    <h3 class="banner-title">Gorgeous Villa Bay View</h3>
                                    <p>Beds: 3,  Baths: 4</p>
                                    <div class="btn"><a href="#" class="banner-btn">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-one" style="background-image: url({{asset('assets/front/images/home/1.jpg')}});height: 620px;">
                        <div class="container">
                            <div class="row home-content">
                                <div class="col-lg-12 text-center p0">
                                  <h2 class="banner_top_title">$13,000<small>/mo</small></h2>
                                    <h3 class="banner-title">Gorgeous Villa Bay View</h3>
                                    <p>Beds: 3,  Baths: 4</p>
                                    <div class="btn"><a href="#" class="banner-btn">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-btn-block banner-carousel-btn">
                    <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
                    <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                </div><!-- /.carousel-btn-block banner-carousel-btn -->
            </div><!-- /.main-banner-wrapper -->
          </div>
        </div>
      </div>
    </div>
  
    <!-- Feature Properties -->
    @include('front.sections.featuredProjects')
  
    <!-- Property Cities -->
    @include('front.sections.popularPlaces')
  
    <!-- Why Chose Us -->
    @include('front.sections.whyChooseUs')
  
    <!-- Our Testimonials -->
    @include('front.sections.testimonial')
  
    <!-- Our Blog -->
    @include('front.sections.ourBlog')
  
    <!-- Our Partners -->
    @include('front.sections.ourPartners')

    <!-- Our Footer -->
    @include('front.includes.footer')