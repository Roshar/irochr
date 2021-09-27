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
       $posts = $category->post()->orderBy('created_at', 'desc')->paginate(3);
        $category_a = Category::where('slug','anonsy')->firstOrFail();
        $announce =  $category_a->post()->orderBy('id', 'desc')->paginate(2);
        return view('news', compact('category', 'posts','category_a','announce'));
    }

    public function news_list()
    {
        $category = Category::where('slug', 'novosti')->firstOrFail();
        $posts = $category->post()->orderBy('created_at', 'desc')->paginate(6);
        $category_a = Category::where('slug','anonsy')->firstOrFail();
        $announce =  $category_a->post()->orderBy('id', 'desc')->paginate(3);
        return view('news', compact('category', 'posts','category_a','announce'));
    }

    public function announce_list()
    {
        $category_a = Category::where('slug', 'anonsy')->firstOrFail();
        $announce =  $category_a->post()->orderBy('created_at', 'desc')->paginate(5);
        $category = Category::where('slug', 'novosti')->firstOrFail();
        $posts = $category->post()->orderBy('id', 'desc')->paginate(3);
        return view('announces', compact('category_a','announce', 'category','posts'));
    }

    // проект Современная школа"
    // новости
    // документы

    public function projects()
    {
        return "Проекты";
    }
    public function modern_school()
    {
        $title="ФП \"Современная школа\"";
        $documents = DB::select( "SELECT * FROM posts WHERE category_id = 20");
        $posts = DB::select( "SELECT * FROM posts WHERE category_id = 19");
        return view('project.modern_school', compact( 'documents','posts','title'));
    }
    public function gpro()
    {
        $title="ГПРО";
        $posts_20 = DB::select( "SELECT * FROM posts WHERE category_id = 21 AND YEAR(created_at) = 2020 ");
        $posts_19 = DB::select( "SELECT * FROM posts WHERE category_id = 21 AND YEAR(created_at) = 2019 ");
        $posts_18 = DB::select( "SELECT * FROM posts WHERE category_id = 21 AND YEAR(created_at) = 2018 ");
        return view('project.gpro', compact( 'posts_20','posts_19','posts_18','title'));
    }
    public function srm()
    {
        $title="«Совершенствование республиканской модели повышения квалификации управленческих и педагогических кадров по вопросам изучения русского и чеченского языков»";
        $posts = DB::select( "SELECT * FROM posts WHERE category_id = 22");
        return view('project.srm', compact( 'posts','title'));
    }

    public function cos()
    {
        $title="ЦОС ДПО";
        return view('project.cos', compact( 'title'));
    }

    /**
     * РАЗДЕЛ ДЕЯТЕЛЬНОСТЬ --- НАЧАЛО
     */

    public function monitoring()
    {
        $title = "Мониторинги";
        return view('monitoring.monitoring', compact('title'));
    }

    public function rumo()
    {
        $title = "Республиканское учебно-методическое объединение в системе общего образования ЧР";
        $documents = DB::select( "SELECT * FROM posts WHERE category_id = 23");
        return view('educative.rumo', compact('title','documents'));
    }

    public function pub_report()
    {
        $title = "Публичный доклад";
        $documents = DB::select( "SELECT * FROM posts WHERE category_id = 32");
        return view('educative.rumo', compact('title','documents'));
    }

    public function plan()
    {
        $title = "План деятельности";
        $plans = DB::select( "SELECT * FROM posts WHERE category_id = 33");
        return view('educative.plan', compact('title','plans'));
    }


    public function approbation()
    {
        $title = "Апробация обновленных ФГОС НОО и ООО";
        $documents = DB::select( "SELECT * FROM posts WHERE category_id = 36");
        return view('educative.approbation', compact('title','documents'));
    }

    /**
     * РАЗДЕЛ ДЕЯТЕЛЬНОСТЬ ----- конец
     */



    /**
     * Полезные ссылки
     */
    public function useful_links()
    {
        $title = "Полезные ссылки";
        $links = DB::select( "SELECT * FROM posts WHERE type_id = 5");
        return view('useful.useful_links', compact('title','links'));
    }


    public function seminars_conference()
    {
        $category = Category::where('slug','seminary-i-konferencii')->firstOrFail();
        $posts = $category->post()->orderBy('created_at', 'desc')->paginate(6);
        return view('categories', compact('category', 'posts'));
    }

    public function contest()
    {
        $category = Category::where('slug','konkursy')->firstOrFail();
        $posts = $category->post()->orderBy('created_at', 'desc')->paginate(6);
        return view('categories', compact('category', 'posts'));
    }

}
