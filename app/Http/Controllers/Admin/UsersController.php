<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Validator;


class UsersController extends Controller
{
    /**
     * 
     * 
     */
   public function index(){
       $users = User::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
       return view('dashboard.users.index',compact('users'));
   }

   public function create(){
    return view('dashboard.users.create');
    }



    /**
     * 
     * 
     */
    public function store(UserRequest $request){

       
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =bcrypt($request->password);
        $user->position = $request->position;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->whatsapp = $request->whatsapp;
        $user->instagram = $request->instagram;

        // Save image to user
        $photoName = $request->file('photo');
        $user->photo = $photoName;

        $request->image->move(public_path('assets/admin/images/users'), $photoName->getClientOriginalName());

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
           $user =User::orderBy('id','DESC')->find($id);
    
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
