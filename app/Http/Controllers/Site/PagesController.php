<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\City;
use App\Models\Property;
use App\Models\Category;
use App\Models\User;



class PagesController extends Controller
{
    //
    public function services() {

        return view('front.pages.services');
    }

    //
    public function aboutUs() {

        return view('front.pages.aboutUs');
    }

    //
    public function properties() {

        $properties = Property::all();

        return view('front.pages.propertiesGried', compact('properties'));
    }

    //
    public function blog() {

        return view('front.pages.ourBlog');
    }

    //
    public function contact() {

        return view('front.pages.contactUs');
    }
}
