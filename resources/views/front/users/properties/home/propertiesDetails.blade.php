
{{-- Metadata goes here --}}
@include('front.includes.main-header')


<!-- Listing Single Property -->
<section class="listing-title-area">
    <div class="container">
        <div class="row mb30">
            <div class="col-lg-7 col-xl-8">
                <div class="single_property_title mt30-767">
                    <h2>{{$property -> name}}</h2>
                    <p>{{$property -> total_location}}</p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="single_property_social_share">
                    <div class="price float-left fn-400">
                        <h2>{{number_format($property -> total_price, 0, ',')}} $</h2>
                    </div>
                    <div class="spss style2 mt20 text-right tal-400">
                        <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            @isset($property->images)
            @foreach($property ->images as $image)
            @if($loop->first)
            <div class="col-sm-7 col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="spls_style_two mb30-520">
                            <a class="popup-img" href="{{$image -> photo ?? ''}}"><img class="img-fluid w100" src="{{$image -> photo ?? ''}}" alt="1.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-lg-4">
                <div class="row">
                    @else
                    <div class="col-sm-6 col-lg-6">
                        <div class="spls_style_two mb30">
                            <a class="popup-img" href="{{$image -> photo ?? ''}}"><img class="img-fluid w100" src="{{$image -> photo ?? ''}}" alt="2.jpg"></a>
                        </div>
                    </div>
                    @endif
                    @break($loop->index == 9)
                    @endforeach
                    @endisset 
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Agent Single Grid View -->
<section class="our-agent-single bgc-f7 pb30-991">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    {{-- Description --}}
                    <div class="col-lg-12">
                        <div class="listing_single_description">
                            <div class="lsd_list">
                                <ul class="mb0">
                                    <li class="list-inline-item"><a href="#">{{$property->categories()->first()->name}}</a></li>
                                    <li class="list-inline-item"><a href="#">Beds: {{$property->bedrooms}}</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: {{$property->bathrooms}}</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Mt: {{$property->area}}</a></li>
                                </ul>
                            </div>

                            <?php $arr = explode('.', $property -> description); 

                                //print_r($arr );

                                $arr1 = array_slice($arr, 0, 10);
                                $arr2 = array_slice($arr, 10, 20);
                                $arr3 = array_slice($arr, 20, count($arr)-1);

                                $paragraph1 = implode(" ",$arr1);
                                $paragraph2 = implode(" ",$arr2);
                                $paragraph3 = implode(" ",$arr3);
                            ?>
                            <h4 class="mb30">Description</h4>
                            <p class="mb25">{{$paragraph1 }}.</p>
                            <div class="collapse" id="collapseExample">
                                  <div class="card card-body">
                                    <p class="mt10 mb10">{{$paragraph2 }}.</p>
                                    <p class="mt10 mb10">{{$paragraph3 }}.</p>
                                  </div>
                            </div>
                            <p class="overlay_close">
                                <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Show More <span class="flaticon-download-1 fz12"></span>
                                  </a>
                            </p>
                        </div>
                    </div>

                    {{-- Project Details --}}
                    <div class="col-lg-12">
                        <div class="additional_details">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb15">Project Details</h4>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>Project ID : </p></li>
                                        <li><p>Starting Price: </p></li>
                                        <li><p>Area : </p></li>
                                        <li><p>Year Built : </p></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>BE10{{$property -> id}}</span></p></li>
                                        <li><p><span>{{number_format($property -> total_price, 0, ',')}} $</span></p></li>
                                        <li><p><span>{{$property -> area}} Sq Mt</span></p></li>
                                        <li><p><span>{{$property ->building_age}}</span></p></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>Bedrooms : </p></li>
                                        <li><p>Bathrooms :</p></li>
                                        <li><p>Garage :</p></li>
                                        <li><p>Garage Size :</p></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{$property -> bedrooms}}</span></p></li>
                                        <li><p><span>{{$property -> bathrooms}}</span></p></li>
                                        <li><p><span>Yes</span></p></li>
                                        <li><p><span>60 SqMt</span></p></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <ul class="list-inline-item">
                                        <li><p>Project Type :</p></li>
                                        <li><p>Project Status :</p></li>
                                    </ul>
                                    <ul class="list-inline-item">
                                        <li><p><span>{{$property->categories()->first()->name}}</span></p></li>
                                        <li><p><span>For Sale</span></p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Project Features  --}}
                    <div class="col-lg-12">
                        <div class="application_statics mt30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mb10">Features</h4>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <ul class="order_list list-inline-item">
                                        <li>
                                            @if($property->central_heating)
                                            <a><span class="flaticon-tick"></span>Central Heating</a>
                                            @else
                                            <a><span class="flaticon-close"></span>Central Heating</a>     
                                            @endif
                                        </li>

                                        <li>
                                            @if($property->internet)
                                            <a><span class="flaticon-tick"></span>Internet</a>
                                            @else
                                            <a><span class="flaticon-close"></span>Internet</a>     
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <ul class="order_list list-inline-item">
                                        <li>
                                            @if($property->parking)
                                            <a><span class="flaticon-tick"></span>Park</a>
                                            @else
                                            <a><span class="flaticon-close"></span>Park</a>     
                                            @endif
                                        </li>

                                        <li>
                                            @if($property->alarm)
                                            <a><span class="flaticon-tick"></span>Alarm</a>
                                            @else
                                            <a><span class="flaticon-close"></span>Alarm</a>     
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <ul class="order_list list-inline-item">
                                        <li>
                                            @if($property->gym)
                                            <a href=""><span class="flaticon-tick"></span>Gym</a>
                                            @else
                                            <a href=""><span class="flaticon-close"></span>Gym</a>     
                                            @endif
                                        </li>

                                        <li>
                                            @if($property->swimming_pool)
                                            <a href=""><span class="flaticon-tick"></span>Swimming Pool</a>
                                            @else
                                            <a href=""><span class="flaticon-close"></span>Swimming Pool</a>     
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- What nearby --}}
                    <div class="col-lg-12">
                        <div class="whats_nearby mt30 text-center">
                            <h4 class="mb10">What's Nearby</h4> 
                            <ul class="order_list list-inline-item text-left">
                                <div class="education_distance mb15">
                                    <h5><span class="flaticon-college-graduation"></span> Education</h5>
                                </div>
                                <div class="education_distance mb15 style2">
                                    <h5><span class="flaticon-heartbeat"></span> Health & Medical</h5>
                                </div>
                                <div class="education_distance style3">
                                    <h5><span class="flaticon-front-of-bus"></span> Transportation</h5>
                                </div>
                            </ul>
                            <ul class="order_list list-inline-item text-left">
                                <div class="education_distance mb15">
                                    <h5><span class="flaticon-money-bag"></span> Banks </h5>
                                </div>
                                <div class="education_distance mb15 style2">
                                    <h5><span><img src="{{asset('assets/front/images/icons/airport.png')}}" alt=""> </span> Airport</h5>
                                </div>
                                <div class="education_distance style3">
                                    <h5><span><img src="{{asset('assets/front/images/icons/mall.png')}}" alt=""></span> Shopping Center</h5>
                                </div>
                            </ul>
                        </div>
                    </div>

                    {{-- Project Video --}}
                    <div class="col-lg-12">
                        <div class="shop_single_tab_content style2 mt30">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Project video</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="property_video">
                                        <div class="thumb">
                                            <img class="pro_img img-fluid w100" src="{{asset('assets/front/images/background/7.jpg')}}" alt="7.jpg">
                                            <div class="overlay_icon">
                                                <a class="video_popup_btn red popup-youtube" href=" https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Two Reviews --}}
                    <div class="col-lg-12">
                        <div class="product_single_content">
                            <div class="mbp_pagination_comments mt30">
                                <ul class="total_reivew_view">
                                    <li class="list-inline-item sub_titles">{{rand(10, 30)}} Reviews</li>
                                    <li class="list-inline-item">
                                        <ul class="star_list">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="list-inline-item avrg_review">( 4.5 out of 5 )</li>
                                    <li class="list-inline-item write_review">Write a Review</li>
                                </ul>
                                <div class="mbp_first media">
                                    <img src="{{asset('assets/front/images/testimonial/1.png')}}" class="mr-3" alt="1.png">
                                    <div class="media-body">
                                        <h4 class="sub_title mt-0">Diana Cooper
                                            <div class="sspd_review dif">
                                                <ul class="ml10">
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"></li>
                                                </ul>
                                            </div>
                                        </h4>
                                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                                        <p class="mt10">Thank you BellusHomes I'm really happy that I bought my appartment in istanbul by your help.</p>
                                    </div>
                                </div>
                                <div class="custom_hr"></div>
                                <div class="mbp_first media">
                                    <img src="{{asset('assets/front/images/testimonial/2.png')}}" class="mr-3" alt="2.png">
                                    <div class="media-body">
                                        <h4 class="sub_title mt-0">Ali Tufan
                                            <div class="sspd_review dif">
                                                <ul class="ml10">
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"></li>
                                                </ul>
                                            </div>
                                        </h4>
                                        <a class="sspd_postdate fz14" href="#">December 28, 2022</a>
                                        <p class="mt10">I invested in realestate by the advices of BellusHomes, they help my to put my invesment in the right place with all the benift of the financial services they provid.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- comments form
                        <div class="col-lg-12">
                        <div class="product_single_content">
                            <div class="mbp_pagination_comments mt30">
                                <div class="mbp_comment_form style2">
                                    <h4>Write a Review</h4>
                                    <ul class="sspd_review">
                                        <li class="list-inline-item">
                                            <ul class="mb0">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="list-inline-item review_rating_para">Your Rating & Review</li>
                                    </ul>
                                    <form class="comments_form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-12">
                        <h4 class="mt30 mb30">Similar Projects</h4>
                    </div>

                    @isset($properties)
                    @foreach($properties as $property)
                    <div class="col-lg-6">
                        <div class="feat_property">
                            <div class="thumb">
                                <img class="img-whp" src="{{$property->images[0]->photo}}" alt="fp1.jpg">
                                <div class="thmb_cntnt">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}">Featured</a></li>
                                    </ul>
                                    <ul class="icon mb0">
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}"><span class="flaticon-transfer-1"></span></a></li>
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}"><span class="flaticon-heart"></span></a></li>
                                    </ul>
                                    <a class="fp_price" href="{{route('property.details', $property->id)}}">{{number_format($property->price, 0, ',')}} $</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p class="text-thm">{{$property->categories()->first()->name}}</p>
                                    <h4>{{$property->title}}</h4>
                                    <p><span class="flaticon-placeholder"></span> {{$property->location}}</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}">Bedrooms: {{$property->bedrooms}}</a></li>
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}">Bathrooms: {{$property->bathrooms}}</a></li>
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}">Sq M: {{$property->area}}</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}"><img src="{{asset('assets/front/images/header-logo.png')}}" alt="pposter1.png"></a></li>
                                        <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}">BellusHomes</a></li>
                                    </ul>
                                    <div class="fp_pdate float-right">{{$property->created_at}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                </div>
            </div>

            {{-- sidebar Tools --}}
            <div class="col-lg-4 col-xl-4">
                <div class="sidebar_listing_list">
                    <div class="sidebar_advanced_search_widget">
                        <div class="sl_creator">
                            <h4 class="mb25">Listed By</h4>
                            <div class="media">
                                <img class="my-2 mx-2" src="{{url('assets/admin/images/sliders', $sitedata->logo)}}" alt="lc1.png">
                                <div class="media-body">
                                    <h5 class="mb-2">{{$sitedata->company_name}}</h5>
                                    <p class="mb-2"><a href="https://wa.me/{{$sitedata->whatsapp}}">{{$sitedata->whatsapp}}</a></p>
                                    <a class="text-thm" href="mailto:{{$sitedata->email}}">{{$sitedata->email}}</a>
                                </div>
                            </div>
                        </div>

                        {{-- #1- form 2 --}}
                        <form action="">
                            <ul class="sasw_list mb0">
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="Send us you query.."></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" class="btn btn-block btn-thm">Send</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                {{-- #2- filter Tool  --}}
                <div class="sidebar_listing_list">
                    <div class="sidebar_advanced_search_widget">
                        <ul class="sasw_list mb0">
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
                                    <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                                    <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Status</option>
                                            <option>Apartment</option>
                                            <option>Bungalow</option>
                                            <option>Condo</option>
                                            <option>House</option>
                                            <option>Land</option>
                                            <option>Single Family</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Bungalow</option>
                                            <option>Condo</option>
                                            <option>House</option>
                                            <option>Land</option>
                                            <option>Single Family</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="small_dropdown2">
                                    <div id="prncgs" class="btn dd_btn">
                                        <span>Price</span>
                                        <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                    </div>
                                      <div class="dd_content2 w100">
                                        <div class="pricing_acontent">
                                            <input type="text" class="amount" placeholder="$60,000"> 
                                            <input type="text" class="amount2" placeholder="$10,000,000">
                                            <div class="slider-range"></div>
                                            <span id="slider-range-value1"></span>
                                            <span class="mt0" id="slider-range-value2"></span>
                                            <div id="slider"></div>
                                        </div>
                                      </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Garages</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_two">
                                    <div class="candidate_revew_select">
                                        <select class="selectpicker w100 show-tick">
                                            <option>Year built</option>
                                            @for ($i = 2010; $i <= date('Y'); $i++ )
                                            <option>{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li class="min_area list-inline-item">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
                                </div>
                            </li>
                            <li class="max_area list-inline-item">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
                                </div>
                            </li>
                            <li>
                                  <div id="accordion" class="panel-group">
                                    <div class="panel">
                                          <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
                                            </h4>
                                          </div>
                                        <div id="panelBodyRating" class="panel-collapse collapse">
                                            <div class="panel-body row">
                                                  <div class="col-lg-12">
                                                    <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                                <label class="custom-control-label" for="customCheck16">Air Conditioning</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                                <label class="custom-control-label" for="customCheck17">Barbeque</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                                <label class="custom-control-label" for="customCheck18">Gym</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                                <label class="custom-control-label" for="customCheck19">Microwave</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                                <label class="custom-control-label" for="customCheck20">TV Cable</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck21">
                                                                <label class="custom-control-label" for="customCheck21">Lawn</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck22">
                                                                <label class="custom-control-label" for="customCheck22">Refrigerator</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck23">
                                                                <label class="custom-control-label" for="customCheck23">Swimming Pool</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck24">
                                                                <label class="custom-control-label" for="customCheck24">WiFi</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck25">
                                                                <label class="custom-control-label" for="customCheck25">Sauna</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck26">
                                                                <label class="custom-control-label" for="customCheck26">Dryer</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck27">
                                                                <label class="custom-control-label" for="customCheck27">Washer</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck28">
                                                                <label class="custom-control-label" for="customCheck28">Laundry</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck29">
                                                                <label class="custom-control-label" for="customCheck29">Outdoor Shower</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck30">
                                                                <label class="custom-control-label" for="customCheck30">Window Coverings</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_button">
                                    <button type="submit" class="btn btn-block btn-thm">Search</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- #3- Projects --}}
                <div class="terms_condition_widget">
                    <h4 class="title">Featured Projects</h4>
                    <div class="sidebar_feature_property_slider">
                        @isset($properties)
                        @foreach($properties as $property)
                        <div class="item">
                            <div class="feat_property home7 agent">
                                <div class="thumb">
                                    <img class="img-whp" src="{{$property->images[0]->photo}}" alt="fp1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="{{route('property.details', $property->id)}}">Featured</a></li>
                                        </ul>
                                        <a class="fp_price" href="{{route('property.details', $property->id)}}">{{number_format($property -> total_price, 0, ',')}} $</a>
                                        <h4 class="posr color-white">{{$property ->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset
                    </div>
                </div>

                {{-- #4- Category --}}
                <div class="terms_condition_widget">
                    <h4 class="title">Categories Property</h4>
                    <div class="widget_list">
                        <ul class="list_details">
                            @isset($categories)
                            @foreach($categories as $category)
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>{{$category->name}} <span class="float-right">{{rand(15, 45)}} projects</span></a></li>
                            @endforeach
                            @endisset
                            {{-- <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 projects</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 projects</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 projects</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 projects</span></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer -->
@include('front.includes.footer')
