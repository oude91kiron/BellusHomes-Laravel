<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @isset($sliders)
            @foreach ($sliders as $slider)
            @if($loop->first)
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{$slider->photo}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner">
                        <div class="tab-search-section">
                            <h1>{{__('site/banner.Find Your Home in Istanbul')}}</h1>
                            <div id="typed-strings">
                                <p>{{__('site/banner.We Provide The best projects in Istanbul city')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{$slider->photo}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner">
                        <div class="tab-search-section">
                            <h1>{{__('site/banner.Real estate investment in Istanbul')}}</h1>
                            <div id="typed-strings">
                                <p>{{__('site/banner.Get a free consultation to answer your questions')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endisset            
        </div>
    </div>
</div>
<!-- banner end 26122022:03:13PM -->