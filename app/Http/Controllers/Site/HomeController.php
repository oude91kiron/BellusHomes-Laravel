<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\City;
use App\Models\Property;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\SiteData;

class HomeController extends Controller
{
   public function home(){

    $data = [];
    $data ['sliders'] = Slider::get(['photo']);
    $data ['cities'] =City::get();
    $data ['properties'] =Property::get();
    $data ['users'] =User::get();
    $data ['posts'] =Post::get();
    $data ['sitedata'] = SiteData::first();

    $data['categories'] = Category::get();
    
    return view('front.site',$data);

   }
}
