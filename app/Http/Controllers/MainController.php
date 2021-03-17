<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{

    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(2);  
        return view('index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();
        return view('show',compact('post'));
    }
}
