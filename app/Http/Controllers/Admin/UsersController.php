<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\userRequest;
use Validator;
use  DB;




class usersController extends Controller
{
    /**
     * 
     * 
     */
     
   public function index(){
       $users = user::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
       return view('dashboard.users.index',compact('users'));
   }

   public function create(){
    return view('dashboard.users.create');
    }



    /**
     * 
     * 
     */
    public function store(userRequest $request){

       
        $user = new user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->whatsapp = $request->whatsapp;
        $user->instagram = $request->instagram;

        
       
        $photo_name = "";
        if($request->has('photo')){
        $photo_name= uploadImage('users',$request->photo);
        }

       $user= user::create($request->except('_token','photo'));

       $user->photo=$photo_name;
        
        if($user->save()){
            return redirect()->route('admin.users')->with(['success'=>'The Section has been created']);
        }
        return redirect()->route('admin.users')->with(['error'=>'Something went wrong']);
    }



    /**
     * 
     */
    public function delete($id){
        try{
           $user = user::find($id);
    
           if(!$user){
              return redirect()->route('admin.users')->with(['error'=>'This section does not exist']);
           }

           $user ->delete();
    
           return redirect()->route('admin.users')->with(['success'=>'The section was deleted successfully']);
    
        }catch(\Exception $ex){
           DB::rollback();
           return redirect()->route('admin.users')->with(['error' => 'There is Something Wrong In Session']);
        }
    }
}
