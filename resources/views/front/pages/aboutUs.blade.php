@extends('layouts.front.login-site')
@section('content')



<div class="container testimonial-4 tml-4 content-area-5 ">

    <!-- Sub banner start -->
    <div class="sub-banner mb-5">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>About Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Project Detailss</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->
    <div class="row">
        <div class="col-md-6">
            <!-- Post Content -->
            <h1 class="mb-4">Company name</h1>
            <ul>
                <li>
                    <h3><i>Who We Are:</i></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                       Etiam ut nisl eu ipsum vehicula ullamcorper vel ut tellus. 
                       Vivamus tempus volutpat orci, sed dignissim mauris. 
                       Duis porttitor tellus vel magna tristique condimentum at quis lorem. 
                       Cras nisi est, volutpat sed consectetur quis, tincidunt id nisl. 
                       Quisque finibus porttitor justo eu rutrum. 
                    </p>
                </li>

                <h3><i>Our Goals:</i></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                       Etiam ut nisl eu ipsum vehicula ullamcorper vel ut tellus. 
                       Vivamus tempus volutpat orci, sed dignissim mauris. 
                       Duis porttitor tellus vel magna tristique condimentum at quis lorem. 
                       Cras nisi est, volutpat sed consectetur quis, tincidunt id nisl. 
                       Quisque finibus porttitor justo eu rutrum. 
                    </p>
                </li>
            </ul>   
        </div>

        
        <div class="col-md-6">
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="https://via.placeholder.com/590x520?text=short video" alt="">
        </div>
    </div> 

    <!-- Testimonial 4 start -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Maria Blank</h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-slide-item wow">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="arrow-down"></div>
                        <div class="media user">
                            <a href="#">
                                <img src="https://via.placeholder.com/60x60 " alt="testimonial-4" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>Karen Paran</h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
@endsection