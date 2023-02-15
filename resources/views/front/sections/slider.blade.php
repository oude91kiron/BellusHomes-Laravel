<div class="home10-mainslider">
    <div class="container-fluid p0">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-banner-wrapper home10">
              <div class="banner-style-one owl-theme owl-carousel">
                  
                @isset($sliders)
                @foreach ($sliders as $slider)
                @if($loop->first)
                    <div class="slide slide-one" style="background-image: url({{$slider->photo}});height: 620px;">
                      <div class="container">
                          <div class="row home-content">
                              <div class="col-lg-12 text-center p0">
                                    <h1 class="banner_top_title">{{__('site/banner.Find Your Home in Istanbul')}}</h1>
                                  <p>{{__('site/banner.We Provide The best projects in Istanbul city')}}</p>
                                  <div class="btn"><a href="#" class="banner-btn">Learn More</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                @else
                  <div class="slide slide-one" style="background-image: url({{$slider->photo}});height: 620px;">
                      <div class="container">
                          <div class="row home-content">
                              <div class="col-lg-12 text-center p0">
                                <h1 class="banner_top_title">{{__('site/banner.Real estate investment in Istanbul')}}</h1>
                                  <p>{{__('site/banner.Get a free consultation to answer your questions')}}</p>
                                  <div class="btn"><a href="#" class="banner-btn">Learn More</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
                @endif
                @endforeach
                @endisset                   
                   {{-- <div class="slide slide-one" style="background-image: url({{asset('assets/front/images/home/1.jpg')}});height: 620px;">
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
                  </div> --}}
            
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