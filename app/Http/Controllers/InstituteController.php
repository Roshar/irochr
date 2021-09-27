<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstituteController extends Controller
{
    public function index()
    {
        $title="Институт";
        return view('institute.index',compact('title'));
    }

    public function history()
    {
        $title="История";
        return view('institute.history',compact('title'));
    }

    public function document()
    {
        $documents = DB::select('SELECT * FROM posts WHERE category_id = 3 ORDER BY created_at DESC');
        $title="Документы";
        return view('institute.documents',compact('documents','title'));
    }

    public function structure()
    {
        $title = "Структура и органы управления образовательной организации";
        $documents = DB::select('SELECT * FROM posts WHERE category_id = 15');
        return view('institute.structure',compact('documents','title'));
    }

    public function leadership()
    {
        $title = "Руководство. Педагогический (научно-педагогический) состав";
        return view('institute.leadership',compact('title'));
    }

    public function material_technical_support()
    {
        $title = "Материально-техническое обеспечение и оснащённость образовательного процесса";
        return view('institute.material_technical_support',compact('title'));
    }

    public function scholarships()
    {
        $title = "Стипендии и иные виды материальной поддержки";
        return view('institute.scholarships',compact('title'));
    }

    public function education()
    {
        $documents = DB::select('SELECT * FROM posts WHERE category_id = 13');
        $title="Образование";
        return view('institute.education',compact('documents','title'));
    }

    public function educational_standards()
    {
        $title="ОБРАЗОВАТЕЛЬНЫЕ СТАНДАРТЫ";
        return view('institute.educational_standards',compact('title'));
    }


    public function financial_and_economic_activities()
    {
        $documents = DB::select('SELECT * FROM posts WHERE category_id = 10 ORDER BY category_id DESC ');
        $title="ФИНАНСОВО-ХОЗЯЙСТВЕННАЯ ДЕЯТЕЛЬНОСТЬ";
        return view('institute.financial_and_economic_activities',compact('documents','title'));
    }

    public function vacancies()
    {
        $title="ВАКАНТНЫЕ МЕСТА ДЛЯ ПРИЕМА (ПЕРЕВОДА)";
        return view('institute.vacancies',compact('title'));
    }

    public function paid_educational_services()
    {
        $title="ПЛАТНЫЕ ОБРАЗОВАТЕЛЬНЫЕ УСЛУГИ";
        return view('institute.paid_educational_services',compact('title'));
    }

    //Ученый совет
    public function academic_council()
    {
        $documents = DB::select('SELECT * FROM posts WHERE category_id = 34');
        $title="Ученый совет";
        return view('institute.academic_council',compact('documents','title'));
    }

    public function trade_union()
    {
        $title="Профсоюзная страничка";
        return view('institute.trade_union',compact('title'));
    }

}
