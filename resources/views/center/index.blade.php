@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside">
        <h1>Центры института</h1>
        <div class="centers">
            <div class="center">
                <a href="{{route('center.ric')}}" class="center__wrapper">
                    <h2 class="center__heading">Редакционно-издательский центр</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cito')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр информационно-технического обеспечения</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cgia')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр по сопровождению ГИА</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cio')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр инклюзивного образования</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>

            <div class="center">
                <a href="{{route('center.cmi')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр математики и информатики</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.ced')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр ественнонаучных дисциплин</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cod')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр общественно-научных дисциплин</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cm')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр менеджмента в системе общего и профессионального образования</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>

            <div class="center">
                <a href="{{route('center.cno')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр начального образования</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cvps')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр воспитания и психолого-педагогического сопровождения образовательной деятельности</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cfo')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр филологического образования</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
            <div class="center">
                <a href="{{route('center.cofc')}}" class="center__wrapper">
                    <h2 class="center__heading">Центр ОБЖ и физической культуры</h2>
                    <div class="center__details">Подробнее</div>
                </a>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection



