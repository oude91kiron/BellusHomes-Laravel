<section id="property-city" class="property-city pb30">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Popular Places</h2>
            <p>We provide projects in the best areas in istanbul city.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @isset($cities)
        @foreach($cities as $city)
        @if($loop->index == 0)
        <div class="col-lg-4 col-xl-4">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{asset($city->photo )}}" alt="pc1.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>{{$city->name}}</h4>
                <p>9 Projects 108 Properties</p>
              </div>
            </div>
          </div>
        </div>
        @endif
        @if($loop->index == 1)
        <div class="col-lg-8 col-xl-8">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset($city->photo )}}" alt="pc1.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>{{$city->name}}</h4>
                  <p>8 Projects 63 Properties</p>
                </div>
              </div>
            </div>
          </div>
        @endif

        @if($loop->index == 2)
        <div class="col-lg-8 col-xl-8">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset($city->photo )}}" alt="pc1.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>{{$city->name}}</h4>
                  <p>24 Projects 152 Properties</p>
                </div>
              </div>
            </div>
          </div>
        @endif

        @if($loop->index == 3)
        <div class="col-lg-4 col-xl-4">
            <div class="properti_city">
              <div class="thumb"><img class="img-fluid w100" src="{{asset($city->photo )}}" alt="pc1.jpg"></div>
              <div class="overlay">
                <div class="details">
                  <h4>{{$city->name}}</h4>
                  <p>13 Projects 83 Properties</p>
                </div>
              </div>
            </div>
          </div>
        @endif

        @break($loop->index == 3)
        @endforeach
        @endisset
        
      </div>
    </div>
  </section>