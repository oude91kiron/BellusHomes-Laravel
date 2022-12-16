<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * 
     */
    public function index() {

        $posts = Post::all();

        //dd($posts);

        return view('index', compact('posts'));
    }
    //----------------------------------------------------------------------

    /**
     * 
     */
    public function show(Post $post) {

        return view('blog-post', ['post'=>$post]);
    }
    //----------------------------------------------------------------------


    /**
     * Show the create page.
     */
    public function create() {

        return view('create');
    }
    //----------------------------------------------------------------------


    /**
     * 
     */
    public function store(Request $request) {

        // Check that user autherized.
        //Auth()->user();


        /** S30/V195:
         * check the all data that come from the request.
         * note _token needed when submit ajax.
         */

        //dd(request()->all());

        /**
         * S30/V209 Using policy method authorize()
         * 
         * this will not authorize the store method if the create
         * method in the policy class empty or return false value.         
         */
        $this->authorize('create', Post::class);

        /**S30/V196:
         * 1. validat the data using validate function.  
         * */ 
        
        $inputs = request()->validate([

            'title'=> 'required | min:6 | max:255',
            // Read the document for file type restriction.
            'post_image' => 'file',
            'body'=> 'required'
        ]);

        // 2. save the image path."
        if(request('post_image')){
            
            $inputs['post_image'] = request('post_image')->store('images');
        }
        // if user auth create the data and sotre it to the database.
        auth()->user()->posts()->create($inputs);

        // we can use the class Session::flash() or the helper function session() 
        //  or the $request object.
        session()->flash('success', 'Your Post Was Successfuly Created');
        
        return redirect()->route('post.index');

    }
    //----------------------------------------------------------------------


    public function update(Post $post) {

        $inputs = request()->validate([

            'title'=> 'required | min:8 | max:255',
            // Read the document for file type restriction.
            'post_image' => 'file',
            'body'=> 'required'
        ]);

            // 2. save the image path."
        if(request('post_image')){
            
            $inputs['post_image'] = request('post_image')->store('images');
            $post->post_image = $inputs['post_image'];
        }

        $post->title = $inputs['title'];
        $post->body = $inputs['body'];

        /**
         * S30/V208: Authorizition Policy Part02 
         * after we crate a policy we can use authorize method to allow only
         * the owner of the post to update it. 
         * note: if we dont pass the object to the method even the onwer 
         * will not be able to update his/her post.
         * 
         * But the efficient way is to use the can function.
         */
        
        // 
        // $this->authorize('update', $post);
        
        // if(auth()->user()->can('view',$post)){

        //     // To Do...
        // }


        // save the data of the object.
        $post->save();

        // we can use the class Session::flash() or the helper function session() 
        //  or the $request object.
        session()->flash('updated', 'Your Post Was Successfuly Updated');
        
        return redirect()->route('post.index');

    }
    //----------------------------------------------------------------------


    /**S30/V198  */
    // public function index() {

    //     return view('dashbord.posts.index');

    // }
    //----------------------------------------------------------------------


    /** S30/V205 
     * Edit method to edit post and to pass a object post
     * to the view.
     */
    public function edit(Post $post) {

        // $this->authorize('view',$post );

        return view('dashbord.posts.edit', ['post'=>$post]);
    }
    //----------------------------------------------------------------------





    public function destroy(Post $post, Request $request) {

        $post->delete();

        /**
         * S30/V204
         * flash messages
         * using global variable Session or using request object.
         */
         
        // Using Session
        //  Session::flash('message', 'Your Post Was Successfuly Deleted');


         // Using Request
        $request->session()->flash('message', 'Your Post Was Successfuly Deleted');

        // return to the page of the request.
        return back();
    }
    //----------------------------------------------------------------------

}
