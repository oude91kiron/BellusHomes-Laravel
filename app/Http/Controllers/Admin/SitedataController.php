<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\siteData;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\adminRequest;
use Validator;

class SitedataController extends Controller
{
    /**
     * 
     * 
     * Method to view Site Data editing page
     */
    public function edit() {

        $site_data = SiteData::where('id', '=', '1')->first();

        //dd($site_data);

        return view('dashboard/auth/sitedata', compact('site_data'));

    }

    /**
     * 
     * Method to update Site Data.
     */
    public function update(RequestSitedata $request) {

        

    }
}
