<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function interviews(){
        return view('pages.interviews');
    }
    public function privacy(){
        return view('pages.privacy');
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
        return view('pages.index');
    }

}
