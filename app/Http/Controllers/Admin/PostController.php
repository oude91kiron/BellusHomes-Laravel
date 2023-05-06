<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\User;
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
     * Show the create page.
     */
    public function create() {

        return view('dashboard.posts.create');
    }
    //----------------------------------------------------------------------


    /**
     * 
     */
    public function store(PostRequest $request) {
        

        $user = User::first();

        $post = Post::create([
            
            'title' => $request->title,
            'headline' => $request->headline,
            'paragraph' => $request->paragraph,
            'firstSubhead' => $request->firstSubhead,
            'secondParagraph' => $request->secondParagraph,
            'secondHeadline'=> $request->secondHeadline,
            'thirdParagraph' => $request->thirdParagraph,
            'paragraph4' => $request->paragraph4,
            'paragraph5' => $request->paragraph5,
            'categories' => $request->categories,
            'tags' => $request->tags,
        ]);


        // Post Image
        $post_image = "";
        if($request->has('post_image')){
        $post_image = uploadImage('posts', $request->post_image);
        }

       $post->post_image = $post_image;
        
        if($post->save()){
            return redirect()->route('post.index')->with(['success'=>'The data has been Saved']);
        }
        return redirect()->route('post.create')->with(['error'=>'Something went wrong']);


    }
    //----------------------------------------------------------------------

    /**
     * 
     */
    public function update(PostRequest $request, Post $post) {

        if(request('post_image')){
            
            $fileName = uploadImage('posts',$request->post_image);
            Post::where('id',$post->id)->update(['post_image'=> $fileName]);
        }


        $post->title = $request['title'];
        $post->paragraph = $request['paragraph'];

        $post->headline = $request['headline'];
        $post->secondParagraph = $request['secondParagraph'];

        // Quote
        $post->firstSubhead = $request['firstSubhead'];
        $post->secondHeadline = $request['secondHeadline'];
        $post->thirdParagraph = $request['thirdParagraph'];

        // Conclusion
        $post->paragraph4 = $request['paragraph4'];
        $post->paragraph5 = $request['paragraph5'];
        $post->categories = $request['categories'];
        $post->tags = $request['tags'];
        
        $post->save();

        session()->flash('updated', 'Your Post Was Successfuly Updated');
        
        return redirect()->route('post.index');

    }
    //----------------------------------------------------------------------

    /** S30/V205 
     * Edit method to edit post and to pass a object post
     * to the view.
     */
    public function edit(Post $post) {

        // $this->authorize('view',$post );

        return view('dashboard.posts.edit', ['post'=>$post]);
    }
    //----------------------------------------------------------------------





    public function destroy(Post $post, Request $request) {

        $post->delete();

        $request->session()->flash('message', 'Your Post Was Successfuly Deleted');

        return back();
    }
    //----------------------------------------------------------------------

}
