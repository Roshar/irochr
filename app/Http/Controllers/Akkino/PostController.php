<?php

namespace App\Http\Controllers\Akkino;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
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
        $posts = Post::paginate(10);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title','id')->all();
        return view('admin.posts.create',compact('categories'));
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
            'description' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,bmp,png'
        ]);
        //Сохраняем
        $data = $request->all();
        //загрузка ищображения
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
        $categories = Category::pluck('title','id')->all();
        $post = Post::find($id);
        return view('admin.posts.edit', compact('categories','post'));
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
            'description' => 'required',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,bmp,png'
        ]);

        $post = Post::find($id);
        $data = $request->all();
        $data['thumbnail'] = Post::imageUpload($request, $post->thumbnamil);
        $post->update($data);

        return redirect()->route('posts.index')->with('success','Изменения сохранены');
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
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route('posts.index')->with('success',' Статья удалена');
    }
}
