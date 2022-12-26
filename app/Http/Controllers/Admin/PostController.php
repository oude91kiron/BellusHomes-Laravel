<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * 
     */
    public function index() {

        $posts = Post::all();

        //dd($posts);

        return view('dashboard.posts.index', compact('posts'));
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

        return view('dashboard.posts.create');
    }
    //----------------------------------------------------------------------


    /**
     * 
     */
    public function store(PostRequest $request, Post $post) {
        
        $post->title = $request->title;
        $post->headline = $request->headline;
        $post->body = $request->body;
        $post->categories = $request->categories;
        $post->tags = $request->tags;
        //$post->user_id = 1;

        // Post Image
        $post_image = "";
        if($request->has('post_image')){
        $post_image = uploadImage('posts', $request->post_image);
        }

       $post->post_image = $post_image;
        
        if($post->save()){
            return redirect()->route('post.create')->with(['success'=>'The data has been Saved']);
        }
        return redirect()->route('post.create')->with(['error'=>'Something went wrong']);


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
