<?php

namespace App\Http\Controllers\Akkino;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('type_id','5')->orderBy('created_at', 'desc')->paginate(15);
        $categories = DB::select('SELECT * FROM categories');
        return view('admin.posts.link.index',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $types = DB::select('SELECT * FROM material_type');
        $departments = DB::select('SELECT * FROM departments');
        return view('admin.posts.link.create',compact('categories','types','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //назначаем валидацию
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,bmp,png'
        ]);
        $data = $request->all();
        //загрузка изображения
        $data['thumbnail'] = Post::imageUpload($request);
        Post::create($data);
        return redirect()->route('link.index')->with('success','Ссылка добавлена');
    }
}
