<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\adminRequest;
use Validator;


class adminsController extends Controller
{
    /**
     * 
     * 
     */
   public function index(){
       $admins = admin::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
       return view('dashboard.admins.index',compact('admins'));
   }

   public function create(){
    return view('dashboard.admins.create');
    }



    /**
     * 
     * 
     */
    public function store(adminRequest $request){

       
        $admin = new admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->position = $request->position;
        $admin->facebook = $request->facebook;
        $admin->twitter = $request->twitter;
        $admin->whatsapp = $request->whatsapp;
        $admin->instagram = $request->instagram;

        
       
        $photo_name = "";
        if($request->has('photo')){
        $photo_name= uploadImage('admins',$request->photo);
        }

       $admin= admin::create($request->except('_token','photo'));

       $admin->photo=$photo_name;
        
        if($admin->save()){
            return redirect()->route('admin.admins')->with(['success'=>'The Section has been created']);
        }
        return redirect()->route('admin.admins')->with(['error'=>'Something went wrong']);
    }



    /**
     * 
     */
    public function delete($id){
        try{
           $admin = Admin::find($id);
    
           if(!$admin){
              return redirect()->route('admin.admins')->with(['error'=>'This section does not exist']);
           }

           $admin ->delete();
    
           return redirect()->route('admin.admins')->with(['success'=>'The section was deleted successfully']);
    
        }catch(\Exception $ex){
           DB::rollback();
           return redirect()->route('admin.admins')->with(['error' => 'There is Something Wrong In Session']);
        }
    }
}
