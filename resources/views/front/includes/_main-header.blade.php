
<!-- main header start -->
<header class="main-header mt-4" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="{{route('home')}}">
                        <img  src="{{url('assets/admin/images/sliders', $sitedata->logo)}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav justify-content-end ml-auto @if(App()->getLocale() == 'ar'){{ 'flex-row-reverse'}} @endif" >
                    
                            <li class=" dropdown">
                                <a href="{{route('home')}}" type="button" class="btn btn-submit font-weight-bold">{{__('site/header.Home')}}</a>
                            </li>
                            <li class=" dropdown">
                                <a href="{{route('aboutUs')}}" type="button" class="btn btn-submit font-weight-bold">{{__('site/header.About Us')}}</a>
                            </li>
                            <li class=" dropdown">
                                <a href="{{route('services')}}" type="button" class="btn btn-submit font-weight-bold">{{__('site/header.Service')}}</a>
                            </li>
                            <li class=" dropdown">
                                <a href="{{route('properties')}}" type="button" class="btn btn-submit font-weight-bold">{{__('site/header.Project Gried')}} </a>
                            </li>
                            <li class=" dropdown">
                                <a href="{{route('blog')}}" type="button" class="btn btn-submit font-weight-bold">{{__('site/header.Our Blog')}}</a>
                            </li>
                            <li class=" dropdown">
                                <a href="{{route('contact')}}" type="button" class="btn btn-submit font-weight-bold">{{__('site/header.Contact Us')}}</a>
                            </li>
                            <li class=" dropdown">
                                <a href="@if(App()->getLocale() == 'en'){{ LaravelLocalization::getLocalizedURL('ar') }} @else {{ LaravelLocalization::getLocalizedURL('en') }}@endif " type="button" class="btn btn-submit font-weight-bold" style="@if(App()->getLocale() == 'en')  color: green @else color: blue @endif" >
                                    @if(App()->getLocale() == 'en')  <img src="{{asset('assets/arapca.png')}}"> @else  <img src="{{asset('assets/english.png')}}"> @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->