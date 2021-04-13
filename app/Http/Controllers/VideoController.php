<?php
namespace App\Http\Controllers;


class VideoController extends Controller
{
    public function index()
    {
        $title="Вебинары на канале IPKRO-CHR";
        return view('video_content.index',compact('title'));
    }
    public function instruction_student()
    {
        $title="Инструкции для слушателей ИРО ЧР (дистанционное обучение)";
        return view('video_content.instruction_student',compact('title'));
    }
    public function instruction_teacher()
    {
        $title="Видеокурс для преподавателей ИРО ЧР";
        return view('video_content.instruction_teacher',compact('title'));
    }
    public function master_class()
    {
        $title="Мастер-классы";
        return view('video_content.master_class',compact('title'));
    }
    public function smi()
    {
        $title="СМИ";
        return view('video_content.smi',compact('title'));
    }


}
