<?php

namespace App\Http\Controllers;

use App\Models\Article;

class MainController extends Controller
{

    public function index()
    {
        $articles = Article::all();

        return view('index2',compact('articles'));
    }
}