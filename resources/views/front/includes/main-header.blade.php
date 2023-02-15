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
                  <img class="nav_logo_img img-fluid" src="{{url('assets/admin/images/sliders', $sitedata->logo)}}" alt="header-logo.png">
                  <button type="button" id="menu-btn">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <a href="{{route('home')}}" class="navbar_brand float-left dn-smd">
                  <img class="logo1 img-fluid" src="{{url('assets/admin/images/sliders', $sitedata->logo)}}" alt="header-logo.png">
                  <img class="logo2 img-fluid" src="{{url('assets/admin/images/sliders', $sitedata->logo)}}" alt="header-logo.png">
                  <span>{{$sitedata->company_name}}</span>
              </a>
              <!-- Responsive Menu Structure-->
              <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
              <ul id="respMenu" class="ace-responsive-menu text-right @if(App()->getLocale() == 'ar'){{ 'flex-row-reverse'}} @endif " data-menu-style="horizontal">
                <li class="list-inline-item"><a href="{{route('home')}}">Home</a></li>
                <li class="list-inline-item"><a href="{{route('aboutUs')}}">About Us</a></li>
                <li class="list-inline-item"><a href="{{route('services')}}">Services</a></li>
                <li class="list-inline-item"><a href="{{route('properties')}}">Projects</a></li>
                <li class="list-inline-item"><a href="{{route('blog')}}">Blog</a></li>
                <li class="list-inline-item"><a href="{{route('contact')}}">Contact</a></li>
                <li class=" dropdown">
                  <a href="@if(App()->getLocale() == 'en'){{ LaravelLocalization::getLocalizedURL('ar') }} @else {{ LaravelLocalization::getLocalizedURL('en') }}@endif " type="button" class="btn btn-submit font-weight-bold" style="@if(App()->getLocale() == 'en')  color: green @else color: blue @endif" >
                      @if(App()->getLocale() == 'en')  <img src="{{asset('assets/arapca.png')}}"> @else  <img src="{{asset('assets/english.png')}}"> @endif
                  </a>
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
                  <img class="nav_logo_img img-fluid mt20" src="{{url('assets/admin/images/sliders', $sitedata->logo)}}" alt="header-logo2.png">
                  <span class="mt20">{{$sitedata->company_name}}</span>
          </div>
          <ul class="menu_bar_home2">
            <li class="list-inline-item"><a href="#menu"><span></span></a></li>
          </ul>
        </div>
      </div><!-- /.mobile-menu -->
      <nav id="menu" class="stylehome1">
        <ul>
          <li><span><a href="{{route('home')}}">Home</a></span></li>
          <li><span><a href="{{route('aboutUs')}}">About Us</a></span></li>
          <li><span><a href="{{route('services')}}">Services</a></span></li>
          <li><span><a href="{{route('properties')}}">Projects</a></span></li>
          <li><span><a href="{{route('blog')}}">Blog</a></span></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li class=" dropdown">
            <span><a href="@if(App()->getLocale() == 'en'){{ LaravelLocalization::getLocalizedURL('ar') }} @else {{ LaravelLocalization::getLocalizedURL('en') }}@endif " type="button" class="btn btn-submit font-weight-bold" style="@if(App()->getLocale() == 'en')  color: green @else color: blue @endif" >
                @if(App()->getLocale() == 'en')  <img src="{{asset('assets/arapca.png')}}"> @else  <img src="{{asset('assets/english.png')}}"> @endif
            </a></span>
        </li>
        </ul>
      </nav>
    </div>