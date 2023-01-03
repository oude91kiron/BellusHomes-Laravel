@extends('layouts.front.login-site')
@section('content')
<div class="container testimonial-4 tml-4 content-area-5">

    <!-- Sub banner start -->
    <div class="sub-banner5 mb-5">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>{{__('site/home.Contact Us')}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">{{__('site/home.home')}}</a></li>
                    <li class="active">{{__('site/home.Contact Details')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    @include('front/sections/contact_form')

</div>
@endsection
