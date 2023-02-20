<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent; 
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

        $properties = Property::paginate(9);
        $sitedata = SiteData::first();

        return view('front.pages.projects', compact('properties', 'sitedata'));
    }

    //
    public function blog() {

        $posts = Post::paginate(9);
        
        $sitedata = SiteData::first();

        $properties = Property::paginate(4);

        
        return view('front.pages.Blog', compact('posts', 'sitedata', 'properties'));
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

        $posts = Post::where('id', '!=', $post->id)->get();
        
        $sitedata = SiteData::first();

        $properties = Property::paginate(4);

        return view('front.pages.post',compact('sitedata', 'posts', 'post', 'properties'));
    }
    
      
    // public function ShareWidget()
    // {
    //     $shareComponent = \Share::page(
    //         'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
    //         'Your share text comes here',
    //     )
    //     ->facebook()
    //     ->twitter()
    //     ->linkedin()
    //     ->telegram()
    //     ->whatsapp()        
    //     ->reddit();
        
    //     return view('front.pages.post', compact('shareComponent'));
    // }
}
