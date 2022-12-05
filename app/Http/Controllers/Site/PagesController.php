<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {

        return view('front.pages.services');
    }
}
