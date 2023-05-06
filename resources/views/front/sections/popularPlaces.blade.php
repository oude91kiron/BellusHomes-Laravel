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
        <div class="col-lg-4 col-xl-4 my-1">
          <div class="properti_city">
            <div class="thumb"><img class="img-fluid w100" src="{{asset($city->photo )}}" alt="pc1.jpg"></div>
            <div class="overlay">
              <div class="details">
                <h4>{{$city->name}}</h4>
                <p>{{rand(20, 50)}} Projects</p>
              </div>
            </div>
          </div>
        </div>

        @break($loop->index == 2)
        @endforeach
        @endisset
        
      </div>
    </div>
  </section>