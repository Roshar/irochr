<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($slug)
    {
       $category = Category::where('slug', $slug)->firstOrFail();
       $posts = $category->post()->orderBy('id', 'desc')->paginate(2);
        return view('categories', compact('category', 'posts'));
    }

    // public function load_more(Request $request, $slug)
    // {
    //     if($request->ajax()){
    //         return "dd0";
    //     }
      
    // }
}
