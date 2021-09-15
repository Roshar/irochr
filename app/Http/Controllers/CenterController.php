<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{
    public function index()
    {
        $title="Центры";
        return view('center.index',compact('title'));
    }

    public function ric()
    {
        $title = 'Редакционно-издательский центр';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 1');
        return view('center.ric',compact('title','news'));
    }
    public function cito()
    {
        $title = 'Центр информационно-технического обеспечения';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 2');
        return view('center.cito',compact('title','news'));
    }
    public function cgia()
    {
        $title = 'Центр по сопровождению ГИА';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 3 AND category_id = 35');
        return view('center.cgia',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cio()
    {
        $title = 'Центр инклюзивного образования';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 4 AND category_id = 35');
        return view('center.cio',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cmi()
    {
        $title = 'Центр математики и информатики';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 6 AND category_id = 35');
        return view('center.cmi',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function ced()
    {
        $title = 'Центр естественнонаучных дисциплин';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 7 AND category_id = 35');
        return view('center.ced',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cod()
    {
        $title = 'Центр общественно-научных дисциплин';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 8 AND category_id = 35');;
        return view('center.cod',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cm()
    {
        $title = 'Центр менеджмента в системе общего и профессионального образования';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 9 AND category_id = 35');

        return view('center.cm',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cno()
    {
        $title = 'Центр начального образования';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 10 AND category_id = 35');

        return view('center.cno',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cvps()
    {
        $title = 'Центр воспитания и психолого-педагогического сопровождения образовательной деятельности';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 11 AND category_id = 35');
        return view('center.cvps',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
    public function cfo()
    {
        $title = 'Центр филологического образования';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 12 AND category_id = 35');
        return view('center.cfo',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }

    public function cofc()
    {
        $title = 'Центр ОБЖ и физической культуры';
        $news = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND type_id = 1');
        $method_rec = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND category_id = 27');
        $edu_programs = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND category_id = 26');
        $documents = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND category_id = 28');
        $plans_reports = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND category_id = 29');
        $publications = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND category_id = 31');
        $useful = DB::select('SELECT * FROM posts WHERE department_relation = 13 AND category_id = 35');
        return view('center.cofc',compact('title','news','method_rec','edu_programs','documents','plans_reports','publications','useful'));
    }
}
