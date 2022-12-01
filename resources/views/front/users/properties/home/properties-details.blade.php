@extends('layouts.front.login-site')
@section('content')

<!-- Sub banner start -->
<!-- <div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property Detail</h1>
            <ul class="breadcrumbs">
         
                
                <li><a href="index.html">Home</a></li>
                <li class="active">Property Detail</li>
            </ul>
        </div>
    </div>
</div> -->
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60" data-ride="carousel">
                    <div class="heading-properties-2">
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="informeson">
                                   <h1>{{$property -> name}}<span>$ {{$property -> total_price}}</span></h1>
                                   <div>
                                       <div class="float-left">
                                           <ul class="clearfix">
                                               <li><i class="flaticon-bed"></i> {{$property -> rooms}} Rooms </li>
                                               <li><i class="flaticon-bath"></i> {{$property -> bedrooms}} Bedrooms </li>
                                               <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> {{$property ->area}} Metter</li>
                                        
                                           </ul>
                                       </div>
                                       <div class="float-right">
                                           <p>$ {{$property -> price_meter}} / metre</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                    @isset($property->images)
                    @foreach($property ->images as $image)
                    @if($loop->first)
                        <div class="item carousel-item active" data-slide-number="{{$image->id}}">
                            <img src="{{$image -> photo ?? ''}}" class="img-fluid" alt="properties-photo">
                        </div>
                    @else
                        <div class="item carousel-item " data-slide-number="{{$image->id}}">
                            <img src="{{$image -> photo ?? ''}}" class="img-fluid" alt="properties-photo">
                        </div>
                    @endif
                    @endforeach
                    @endisset
                    
                    
                    
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators sp-2 smail-properties list-inline nav nav-justified mt-4">
                        @isset($property->images)
                        @foreach($property ->images as $image)
                        <li class="list-inline-item active ml-4">
                            <a  class="selected" data-slide-to="{{$image->id}}" data-target="#propertiesDetailsSlider">
                                <img src="{{$image->photo}}" class="" alt="properties-photo-smale">
                            </a>
                        </li>
                       @endforeach
                       @endisset 
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 slider">
        
             
                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3">Property Description</h3>
                    <p>{{$property -> description}} </p>
                </div>

                <!-- Property details start -->
                <div class="property-details mb-45">
                    <h3 class="heading-3">Property Details</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property ID: </strong>{{100 + $property->id}}
                                </li>
                                <li>
                                    <strong>Year Built:</strong>{{date('Y') - $property->building_age}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Price:</strong>{{$property->total_price}}
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    {{$property->categories()->first()->name}}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>City:</strong>{{$city->name}}
                                </li>
                                <li>
                                    <strong>Location: </strong>{{$property->location}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Amenities box start -->
                <div class="amenities-box af mb-45">
                    <h3 class="heading-3">Condition</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <span>
                                        <i class="flaticon-draw-check-mark"></i>
                                        {{$property->rooms}} Rooms
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <span>
                                        <i class="flaticon-draw-check-mark"></i>
                                        {{$property->bedrooms}} Bedrooms
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <span>
                                        <i class="flaticon-draw-check-mark"></i>
                                        {{$property->bathrooms}} Bathrooms
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Features start -->
                <div class="features-opions af mb-45">
                    <h3 class="heading-3">Features</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                
                                <li>
                                    @if($property->central_heating)
                                    <i class="flaticon-draw-check-mark"></i>
                                    @else
                                    <i><strong>X</strong></i>      
                                    @endif
                                    Heating
                                </li>

                                <li>
                                    @if($property->internet)
                                    <i class="flaticon-draw-check-mark"></i>
                                    @else
                                    <i><strong>X</strong></i>      
                                    @endif
                                    Wifi
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    @if($property->Parking)
                                    <i class="flaticon-draw-check-mark"></i>
                                    @else
                                    <i><strong>X</strong></i>      
                                    @endif
                                    Parking
                                </li>

                                <li>
                                    @if($property->alarm)
                                    <i class="flaticon-draw-check-mark"></i>
                                    @else
                                    <i><strong>X</strong></i>      
                                    @endif
                                    Alarm
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    @if($property->gym)
                                    <i class="flaticon-draw-check-mark"></i>
                                    @else
                                    <i><strong>X</strong></i>      
                                    @endif
                                    Gym
                                </li>

                                <li>
                                    @if($property->swimming_pool)
                                    <i class="flaticon-draw-check-mark"></i>
                                    @else
                                    <i><strong>X</strong></i>      
                                    @endif                                    
                                    Swimming Pool
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Floor plans start -->
                <div class="floor-plans mb-60">
                    <h3 class="heading-3">Floor Plans</h3>
                    <table>
                        <tbody><tr>
                            <td><strong>Area</strong></td>
                            <td><strong>Rooms</strong></td>
                            <td><strong>Bathrooms</strong></td>
                        </tr>
                        <tr>
                            <td>{{$property->area}}</td>
                            <td>{{$property->rooms}}</td>
                            <td>{{$property->bathrooms}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <img src="https://via.placeholder.com/760x370" alt="floor-plans" class="img-fluid">
                </div>
                <!-- Property vedio start -->
                <div class="property-video mb-60">
                    <h3 class="heading-3">Property Vedio</h3>
                    <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                </div>


                <!-- Location Section start -->
                <div class="section-location mb-60">
                    <h3 class="heading-3">Property Location</h3>
                    <div class="map">
                        <div id="contactMap" class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12042.09030311691!2d28.9412191!3d41.01382175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba31709c1721%3A0x3627fc1bcdc7337f!2sSeyyid%20%C3%96mer%2C%20%C5%9Eair%20Mehmet%20Emin%20Sk.%20No%3A37%2C%2034098%20Fatih%2F%C4%B0stanbul!5e0!3m2!1sen!2str!4v1669421392390!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>

                <!-- Related properties start -->
                <!-- <div class="related-properties hedin-mb-30">
                    <h3 class="heading-3">Related Properties</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="property-box-7">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="tag-2">For Rent</div>
                                        <div class="price-box"><span>$850.00</span> Per night</div>
                                        <img src="https://via.placeholder.com/350x233" alt="property" class="img-fluid">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Real Luxury Villa</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <p><i class="fa fa-user"></i> Jhon Doe</p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-box-7">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="tag-2">For Sale</div>
                                        <div class="price-box"><span>$850.00</span> Per night</div>
                                        <img src="https://via.placeholder.com/350x233" alt="property" class="img-fluid">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Beautiful Single Home</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <p><i class="fa fa-user"></i> Jhon Doe</p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- Side bar starting -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    <!-- <div class="widget search-area advanced-search as">
                        <h5 class="sidebar-title">Advanced Search</h5>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="area">
                                            <option>Area From</option>
                                            <option>1500</option>
                                            <option>1200</option>
                                            <option>900</option>
                                            <option>600</option>
                                            <option>300</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="Status">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="Location">
                                            <option>Location</option>
                                            <option>United Kingdom</option>
                                            <option>American Samoa</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
                                            <option>Delaware</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="types">
                                            <option>Property Types</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Land</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-30">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Area</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="Sq ft" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Price</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <button class="search-button btn-md btn-color">Search</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{{$category->name}}<span>{{random_int(10, 50)}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        <div class="media mb-4">
                            <a href="properties-details.html">
                                <img src="https://via.placeholder.com/60x60" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h5>
                                <p>Feb 27, 2020 | $1045,000</p>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a href="properties-details.html">
                                <img src="https://via.placeholder.com/60x60" alt="sub-property-2">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h5>
                                <p>Mar 14, 2020 | $944,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="properties-details.html">
                                <img src="https://via.placeholder.com/60x60" alt="sub-property-3">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h5>
                                <p>Apr 14, 2020 | $1420,000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Social list start -->
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Sell Your Property -->
                    <!-- <div class="sell-your-properties">
                        <h3>Sell Your Property</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tortor dui, scelerisque ac nisi</p>
                        <p></p>
                        <a href="properties-details.html" class="btn btn-md btn-color">Register Now</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->

@endsection