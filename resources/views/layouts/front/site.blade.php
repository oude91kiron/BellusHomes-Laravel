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
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/flaticon/font/flaticon.css')}}">

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
    <section id="feature-property" class="feature-property bgc-f7">
      <div class="container ovh">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center mb40">
              <h2>Featured Properties</h2>
              <p>Handpicked properties by our team.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="feature_property_slider">
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp1.jpg')}}" alt="fp1.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp2.jpg')}}" alt="fp2.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp3.jpg')}}" alt="fp3.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Sale</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp1.jpg')}}" alt="fp1.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp2.jpg')}}')}}" alt="fp2.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp3.jpg')}}" alt="fp3.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Sale</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp1.jpg')}}" alt="fp1.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp2.jpg')}}" alt="fp2.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp3.jpg')}}" alt="fp3.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Sale</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp1.jpg')}}" alt="fp1.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp2.jpg')}}" alt="fp2.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property">
                  <div class="thumb">
                    <img class="img-whp" src="{{asset('assets/front/images/property/fp3.jpg')}}" alt="fp3.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Sale</a></li>
                      </ul>
                      <ul class="icon mb0">
                        <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                    </div>
                  </div>
                  <div class="details">
                    <div class="tc_content">
                      <p class="text-thm">Apartment</p>
                      <h4>Renovated Apartment</h4>
                      <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                      <ul class="prop_details mb0">
                        <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                        <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                        <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                      </ul>
                    </div>
                    <div class="fp_footer">
                      <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                      </ul>
                      <div class="fp_pdate float-right">4 years ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Property Cities -->
    <section id="property-city" class="property-city pb30">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
              <h2>Find Properties in These Cities</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-xl-4">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset('assets/front/images/property/pc1.jpg')}}" alt="pc1.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>Miami</h4>
                  <p>24 Properties</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xl-8">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset('assets/front/images/property/pc2.jpg')}}" alt="pc2.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>Los Angeles</h4>
                  <p>18 Properties</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xl-8">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset('assets/front/images/property/pc3.jpg')}}" alt="pc3.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>New York</h4>
                  <p>89 Properties</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset('assets/front/images/property/pc4.jpg')}}" alt="pc4.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>Florida</h4>
                  <p>47 Properties</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Why Chose Us -->
    <section id="why-chose" class="whychose_us bgc-f7 pb30">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
              <h2>Why Choose Us</h2>
              <p>We provide full service at every step.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="why_chose_us home10">
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
            <div class="why_chose_us home10">
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
            <div class="why_chose_us home10">
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
  
    <!-- Our Testimonials -->
    <section id="our-testimonials" class="our-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
              <h2 class="color-white">Testimonials</h2>
              <p class="color-white">Here could be a nice sub title</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="testimonial_grid_slider">
              <div class="item">
                <div class="testimonial_grid">
                  <div class="thumb">
                    <img src="{{asset('assets/front/images/testimonial/1.jpg')}}" alt="1.jpg">
                  </div>
                  <div class="details">
                    <h4>Augusta Silva</h4>
                    <p>Sales Manager</p>
                    <p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial_grid">
                  <div class="thumb">
                    <img src="{{asset('assets/front/images/testimonial/1.jpg')}}" alt="1.jpg">
                  </div>
                  <div class="details">
                    <h4>Augusta Silva</h4>
                    <p>Sales Manager</p>
                    <p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial_grid">
                  <div class="thumb">
                    <img src="{{asset('assets/front/images/testimonial/1.jpg')}}" alt="1.jpg">
                  </div>
                  <div class="details">
                    <h4>Augusta Silva</h4>
                    <p>Sales Manager</p>
                    <p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial_grid">
                  <div class="thumb">
                    <img src="{{asset('assets/front/images/testimonial/1.jpg')}}" alt="1.jpg">
                  </div>
                  <div class="details">
                    <h4>Augusta Silva</h4>
                    <p>Sales Manager</p>
                    <p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial_grid">
                  <div class="thumb">
                    <img src="{{asset('assets/front/images/testimonial/1.jpg')}}" alt="1.jpg">
                  </div>
                  <div class="details">
                    <h4>Augusta Silva</h4>
                    <p>Sales Manager</p>
                    <p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Our Blog -->
    <section class="our-blog bgc-f7 pb30">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
              <h2>Articles & Tips</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="for_blog feat_property">
              <div class="thumb">
                <img class="img-whp" src="{{asset('assets/front/images/blog/bh1.jpg')}}" alt="bh1.jpg">
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Business</p>
                  <h4>Skills That You Can Learn In The Real Estate Market</h4>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                  </ul>
                  <a class="fp_pdate float-right" href="#">7 August 2019</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="for_blog feat_property">
              <div class="thumb">
                <img class="img-whp" src="{{asset('assets/front/images/blog/bh2.jpg')}}" alt="bh2.jpg">
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Business</p>
                  <h4>Bedroom Colors You’ll Never <br class="dn-1199"> Regret</h4>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                  </ul>
                  <a class="fp_pdate float-right" href="#">7 August 2019</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="for_blog feat_property">
              <div class="thumb">
                <img class="img-whp" src="{{asset('assets/front/images/blog/bh3.jpg')}}" alt="bh3.jpg">
              </div>
              <div class="details">
                <div class="tc_content">
                  <p class="text-thm">Business</p>
                  <h4>5 Essential Steps for Buying an Investment</h4>
                </div>
                <div class="fp_footer">
                  <ul class="fp_meta float-left mb0">
                    <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                  </ul>
                  <a class="fp_pdate float-right" href="#">7 August 2019</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Our Partners -->
    <section id="our-partners" class="our-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center">
              <h2>Our Partners</h2>
              <p>We only work with the best companies around the globe</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg">
            <div class="our_partner">
              <img class="img-fluid" src="{{asset('assets/front/images/partners/1.png')}}" alt="1.png">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg">
            <div class="our_partner">
              <img class="img-fluid" src="{{asset('assets/front/images/partners/2.png')}}" alt="2.png">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg">
            <div class="our_partner">
              <img class="img-fluid" src="{{asset('assets/front/images/partners/3.png')}}" alt="3.png">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg">
            <div class="our_partner">
              <img class="img-fluid" src="{{asset('assets/front/images/partners/4.png')}}" alt="4.png">
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg">
            <div class="our_partner">
              <img class="img-fluid" src="{{asset('assets/front/images/partners/5.png')}}" alt="5.png">
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Start Partners -->
    <section class="start-partners bgc-thm pt20 pb20">
    </section>
  
    <!-- Our Footer -->
    <section class="footer_one">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
            <div class="footer_about_widget">
              <h4>About Site</h4>
              <p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="footer_qlink_widget">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">User’s Guide</a></li>
                <li><a href="#">Support Center</a></li>
                <li><a href="#">Press Info</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="footer_contact_widget">
              <h4>Contact Us</h4>
              <ul class="list-unstyled">
                <li><a href="#">info@findhouse.com</a></li>
                <li><a href="#">Collins Street West, Victoria</a></li>
                <li><a href="#">8007, Australia.</a></li>
                <li><a href="#">+1 246-345-0699</a></li>
                <li><a href="#">+1 246-345-0695</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="footer_social_widget">
              <h4>Follow us</h4>
              <ul class="mb30">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
              </ul>
              <h4>Subscribe</h4>
              <form class="footer_mailchimp_form">
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
    <section class="footer_middle_area pt40 pb40">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <div class="footer_menu_widget">
              <ul>
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Listing</a></li>
                <li class="list-inline-item"><a href="#">Property</a></li>
                <li class="list-inline-item"><a href="#">Pages</a></li>
                <li class="list-inline-item"><a href="#">Blog</a></li>
                <li class="list-inline-item"><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div class="copyright-widget text-right">
              <p>© 2020 Find House. Made with love.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
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

  </body>
  </html>