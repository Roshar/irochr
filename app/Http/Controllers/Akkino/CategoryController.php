<?php

namespace App\Http\Controllers\Akkino;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(2);
       return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$parentCategory = Category::all()->where('parent_id','!=',null);
        $parentCategory = Category::all();
        return view('admin.categories.create',compact('parentCategory'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request->input('parent_id'));
        //назначаем валидацию
        $request->validate([
            'title' => 'required',
        ]);
        //Сохраняем

        Category::create($request->all());

        //1 -й метод вывестить уведомления при удачном добавлении записи
       // $request->session()->flash('success', 'Категория добавлена');

        //редиректимся и с помощью with (2-й способ уведомления) сообщаем об успехе
        return redirect()->route('categories.index')->with('success','Категория добавлена');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Category::find($id);
       $parentCategory = Category::all();
       return view('admin.categories.edit', compact('category','parentCategory'));
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
        ]);

        $category = Category::find($id);

        $category->update($request->all());

        return redirect()->route('categories.index')->with('success','Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->post->count()){
            return redirect()->route('categories.index')->with('error','Ошибка. У категории есть записи');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success',' Категория удалена');
    }
}
