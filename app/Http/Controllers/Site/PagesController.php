<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\City;
use App\Models\Property;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\SiteData;



class PagesController extends Controller
{
    //
    public function services() {

        $sitedata = SiteData::first();

        return view('front.pages.services', compact('sitedata'));
    }

    //
    public function aboutUs() {

        $sitedata = SiteData::first();

        return view('front.pages.aboutUs', compact('sitedata'));
    }

    //
    public function properties() {

        $properties = Property::all();
        $sitedata = SiteData::first();

        return view('front.pages.propertiesGried', compact('properties', 'sitedata'));
    }

    //
    public function blog() {

        $posts = Post::all();
        $sitedata = SiteData::first();

        return view('front.pages.ourBlog', compact('posts', 'sitedata'));
    }

    //
    public function contact() {

        $sitedata = SiteData::first();

        return view('front.pages.contactUs', compact('sitedata'));
    }


    /**
     * 
     */
    public function singlePost(Post $post) {

        $sitedata = SiteData::first();

        return view('front.pages.post',compact('sitedata', 'post'));
      }
    //----------------------------------------------------------------------
}
