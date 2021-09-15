@extends('layouts.useful_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        {{--        <h1>{{$category->title}}</h1>--}}
        <div class="center_wrapper">
            <h2>Полезные ссылки</h2>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Веб-сайты <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($links as $link)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($link->content)!!}" target="_blank">
                                {{$link->title}}
                            </a>
                        </li>
                    @endforeach
                        <li class="center_block__text"><a href="https://www.dpomos.ru/" target="_blank">Дополнительное профессиональное образование педагогических работников города Москвы (региональный реестр ДПП)</a></li>
                        <li class="center_block__text"><a href="http://skiv.instrao.ru/" target="_blank">Сетевой комплекс информационного взаимодействия субъектов Российской Федерации в проекте «Мониторинг формирования функциональной грамотности учащихся»</a></li>
                        <li class="center_block__text"><a href="https://in-texno.ru/" target="_blank">Институт новых технологий в образовании</a></li>
                </ul>
            </div>
        </div>

    </main>
@endsection
