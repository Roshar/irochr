<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        //Все новости
       $posts = Post::with('category')->where('category_id', '1')->orderBy('id', 'desc')->paginate(3);

       //Главная новость
       $mainArticle = Post::with('category')->where('category_id', '6')->get();

       //Анонсы
       $announces = Post::with('category')->where('category_id','5')->get();

       //Актуальное видео
        $mainMovie = '';
        var_dump($mainMovie);
        exit;

        return view('index', compact('posts','mainArticle','announces'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();
        return view('show',compact('post'));
    }

    public function mainArticle()
    {
        $mainArticle = Post::with('category')->where('category_id=6')->latest();
        var_dump($mainArticle);
        exit;
//        return view('index', compact('posts'));
    }
}
