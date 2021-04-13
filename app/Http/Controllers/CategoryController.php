<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($slug)
    {
       $category = Category::where('slug', $slug)->firstOrFail();
       $posts = $category->post()->orderBy('id', 'desc')->paginate(3);
        $category_a = Category::where('slug','anonsy')->firstOrFail();
        $announce =  $category_a->post()->orderBy('id', 'desc')->paginate(2);
        return view('news', compact('category', 'posts','category_a','announce'));
    }

    public function news_list()
    {
        $category = Category::where('slug', 'novosti')->firstOrFail();
        $posts = $posts = $category->post()->orderBy('id', 'desc')->paginate(2);
        $category_a = Category::where('slug','anonsy')->firstOrFail();
        $announce =  $category_a->post()->orderBy('id', 'desc')->paginate(2);
        return view('news', compact('category', 'posts','category_a','announce'));
    }

    public function announce_list()
    {
        $category = Category::where('slug', 'anonsy')->firstOrFail();
        $posts = $posts = $category->post()->orderBy('id', 'desc')->paginate(2);
        return view('categories', compact('category', 'posts'));
    }

    public function seminars_conference()
    {
        $category = Category::where('slug','seminary-i-konferencii')->firstOrFail();
        $posts = $posts = $category->post()->orderBy('id', 'desc')->paginate(2);
        return view('categories', compact('category_a', 'posts'));
    }


}
