<?php

namespace App\Http\Controllers\Akkino;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::where('category_id','1')->orWhere('category_id','2')->orWhere('category_id','4')->orWhere('category_id','5')->orWhere('category_id','6')->orWhere('category_id','18')->orderBy('created_at', 'desc')->paginate(15);
//        $categories = DB::select('SELECT * FROM categories');
//        return view('admin.posts.news.index',compact('posts','categories'));
        $posts = Post::where('type_id','1')->orderBy('created_at', 'desc')->paginate(20);
        $categories = DB::select('SELECT * FROM categories');
        return view('admin.posts.news.index',compact('posts','categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top()
    {
        $posts = Post::where('category_id','6')->orderBy('created_at', 'desc')->paginate(15);
        $categories = DB::select('SELECT * FROM categories');
        return view('admin.posts.news.index',compact('posts','categories'));
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
        return view('admin.posts.news.create',compact('categories','types','departments'));
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
        return redirect()->route('posts.index')->with('success','Статья добавлена');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = DB::select('SELECT * FROM categories');
        $departments = DB::select('SELECT * FROM departments');
        $post->date_val = $post['created_at'];
        return view('admin.posts.news.edit', compact('categories','post','departments'));
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

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,bmp,png'
        ]);

        $post = Post::find($id);
        $data = $request->all();
        if($file = Post::imageUpload($request, $post->thumbnamil) ){
            $data['thumbnail'] = $file;
        }
        $post->update($data);
        //TODO  переместить
        $redirectArray = [
            1 => 'posts',
            2 => 'document',
            3 => 'video',
            4 => 'review',
            5 => 'link',
        ];
        return redirect()->route($redirectArray[$post->type_id].'.index')->with('success','Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        //TODO  переместить
        $redirectArray = [
            1 => 'posts',
            2 => 'document',
            3 => 'video',
            4 => 'review',
            5 => 'link',
        ];
        $pageInd = $post->type_id;
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route($redirectArray[$pageInd].'.index')->with('success',' Материал удален');
    }

    /**
     * @param $cat
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function filterCategory(Request $request)
    {
        print_r($request->cat);
        exit;
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $categories = DB::select("SELECT * FROM categories WHERE category_id = $cat");
        return view('admin.posts.news.index',compact('posts','categories'));
    }
}
