@extends('layouts.front.login-site')
@section('content')



<div class="row">
            <div class="col-lg-8 col-md-12 slider">
        
             
                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3">About Us</h3>
                    <p> </p>
                </div>

                <!-- Property details start -->
                <div class="property-details mb-45">
                    <h3 class="heading-3">Property Details</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property ID: </strong>
                                </li>
                                <li>
                                    <strong>Year Built:</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Price:</strong>
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>City:</strong>
                                </li>
                                <li>
                                    <strong>Location: </strong>
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
                                         Rooms
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <span>
                                        <i class="flaticon-draw-check-mark"></i>
                                         Bedrooms
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <span>
                                        <i class="flaticon-draw-check-mark"></i>
                                         Bathrooms
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
                                    
                                    <i class="flaticon-draw-check-mark"></i>
                                   
                                    <i><strong>X</strong></i>      
                                  
                                    Heating
                                </li>

                                <li>
                                  
                                    <i class="flaticon-draw-check-mark"></i>
                                   
                                    <i><strong>X</strong></i>      
                                    
                                    Wifi
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                   
                                    <i class="flaticon-draw-check-mark"></i>
                                   
                                    <i><strong>X</strong></i>      
                                    
                                    Parking
                                </li>

                                <li>
                                   
                                    <i class="flaticon-draw-check-mark"></i>
                                   
                                    <i><strong>X</strong></i>      
                                   
                                    Alarm
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                   
                                    <i class="flaticon-draw-check-mark"></i>
                                   
                                    <i><strong>X</strong></i>      
                                   
                                    Gym
                                </li>

                                <li>
                                    
                                    <i class="flaticon-draw-check-mark"></i>
                                    
                                    <i><strong>X</strong></i>      
                                                             
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
                            <td></td>
                            <td></td>
                            <td></td>
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
                    
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="#"><span></span></a></li>
                            
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

@endsection