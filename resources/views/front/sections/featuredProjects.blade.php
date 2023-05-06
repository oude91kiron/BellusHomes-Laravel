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
                    <p class="text-thm">{{$property->categories()->first()->name}}</p>
                    <h4><a href="{{route('property.details',$property->id)}}">{{$property->name }}</a></h4>
                    <p><span class="flaticon-placeholder"></span> {{$property ->location}}</p>
                    <!--<ul class="prop_details mb0">-->
                    <!--  <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">Beds: {{$property -> bedrooms}}</a></li>-->
                    <!--  <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">Baths: {{$property -> bathrooms}}</a></li>-->
                    <!--  <li class="list-inline-item"><a href="{{route('property.details',$property->id)}}">{{$property -> area}} ㎡</a></li>-->
                    <!--</ul>-->
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
          </div>
        </div>
      </div>
    </div>
  </section>