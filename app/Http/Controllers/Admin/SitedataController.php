<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\siteData;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\adminRequest;
use App\Http\Requests\SitedataRequest;
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

        return view('dashboard.auth.sitedata', compact('site_data'));

    }

    /**
     * 
     * Method to update Site Data.
     */
    public function update(SitedataRequest $request) {


        //dd($request->company_name);
        
        $input = $request->all();
        $data = SiteData::find(1);
        
        $data['company_name']  = $request->company_name;
        $data['email'] =  $request-> email;
        $data['facebook'] = $request-> facebook;
        $data['instagram'] = $request-> instagram;
        $data['twitter'] = $request-> twitter;
        $data['whatsapp'] = $request-> whatsapp;
            
        $logo_name = "";
        if($request->has('logo')){
        $logo_name = uploadImage('sliders', $request->logo);
        }

       $data['logo'] = $logo_name;
        
        if($data->save()){
            return redirect()->route('admin.dashboard')->with(['success'=>'The data has been updated']);
        }
        return redirect()->route('sitedata.edit')->with(['error'=>'Something went wrong']);
    }
}
