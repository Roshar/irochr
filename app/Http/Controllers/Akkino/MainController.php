<?php

namespace App\Http\Controllers\Akkino;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        return view('admin.index');
    }
}
