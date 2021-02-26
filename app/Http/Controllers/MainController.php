<?php

namespace App\Http\Controllers;

use App\Models\Article;

class MainController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('show');
    }
}
