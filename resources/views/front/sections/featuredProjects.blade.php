<section id="feature-property" class="feature-property bgc-f7">
    <div class="container ovh">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center mb40">
            <h2>Featured Projects</h2>
            <p>Projects by our team.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="feature_property_slider">
            @isset($properties)
            @foreach($properties as $property)
            <div class="item">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="{{$property -> images[0] -> photo ?? '' }}" alt="fp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">For Sale</a></li>
                      <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">Featured</a></li>
                    </ul>
                    <a class="fp_price" href="{{route('property.details',$property->id)}}">${{number_format($property ->total_price, 0, ',')}}</a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>{{$property->name }}</h4>
                    <p><span class="flaticon-placeholder"></span> {{$property ->location}}</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">Beds: {{$property -> bedrooms}}</a></li>
                      <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">Baths: {{$property -> bathrooms}}</a></li>
                      <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">{{$property -> area}} ㎡</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a  href="{{route('property.details',$property->id)}}"><img src="{{asset('assets/front/images//logo.png')}}" width="40" height="30" alt="logo.png"></a></li>
                    </ul>
                    <div class="fp_pdate float-right">{{$property->created_at}}</div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endisset

            {{-- <div class="item">
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
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>