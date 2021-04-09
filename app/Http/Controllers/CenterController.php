<?php


namespace App\Http\Controllers;


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
        return view('center.ric',compact('title'));
    }
    public function cito()
    {
        $title = 'Центр информационно-технического обеспечения';
        return view('center.cito',compact('title'));
    }
    public function cgia()
    {
        $title = 'Центр по сопровождению ГИА';
        return view('center.cgia',compact('title'));
    }
    public function cio()
    {
        $title = 'Центр инклюзивного образования';
        return view('center.cio',compact('title'));
    }
    public function cmi()
    {
        $title = 'Центр математики и информатики';
        return view('center.cmi',compact('title'));
    }
    public function ced()
    {
        $title = 'Центр естественнонаучных дисциплин';
        return view('center.ced',compact('title'));
    }
    public function cod()
    {
        $title = 'Центр общественно-научных дисциплин';
        return view('center.ric',compact('title'));
    }
    public function cm()
    {
        $title = 'Центр менеджмента в системе общего и профессионального образования';
        return view('center.cm',compact('title'));
    }
    public function cno()
    {
        $title = 'Центр начального образования';
        return view('center.cno',compact('title'));
    }
    public function cvps()
    {
        $title = 'Центр воспитания и психолого-педагогического сопровождения образовательной деятельности';
        return view('center.cvps',compact('title'));
    }
    public function cfo()
    {
        $title = 'Центр филологического образования';
        return view('center.cno',compact('title'));
    }

    public function cofc()
    {
        $title = 'Центр ОБЖ и физической культуры';
        return view('center.cno',compact('title'));
    }
}
