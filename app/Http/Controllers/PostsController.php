<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::orderBy('created_at', 'desc')->paginate(3);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'author' => 'required',
            'title' => 'required',
            'headline' => 'required',
            'body' => 'required',
            'tags' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

        //Handle File Upload
            if($request->hasFile('cover_image')){
                // Get Filename with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                //Get just extension
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                //Upload image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            } else {
                $fileNameToStore = 'noimage.jpg';
            }
            
    $post = new Post;
    $post->author = $request->input('author');
    $post->title = $request->input('title');
    $post->headline = $request->input('headline');
    $post->body = $request->input('body');
    $post->tags = $request->input('tags');
    $post->user_id = auth()->user()->id;
    $post->cover_image = $fileNameToStore;
    $post->save();

    return redirect('posts')->with('success', 'Post Created');
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        //Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page'); 
        };
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'author' => 'required',
            'title' => 'required',
            'headline' => 'required',
            'body' => 'required',
            'tags' => 'required',
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){
            // Get Filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        } 
            
        //Create Post
    $post = Post::findOrFail($id);
    $post->author = $request->input('author');
    $post->title = $request->input('title');
    $post->headline = $request->input('headline');
    $post->body = $request->input('body');
    $post->tags = $request->input('tags');
    if($request->hasFile('cover_image')){
        $post->cover_image = $fileNameToStore;
    }
    $post->save();

    return redirect('posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

         //Check for correct user
         if(auth()->user()->id !==$post->user_id){
            return redirect('posts')->with('error', 'Unauthorized Page'); 
        };

        if($post->cover_image != 'noimage.jpg'){
             //Delete the image
            Storage::delete('public/cover_images/' . $post->cover_image);        }

        $post->delete();
        return redirect('posts')->with('success', 'Post Removed');
    }
}
