@extends('layouts.project_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        {{--        <h1>{{$category->title}}</h1>--}}
        <div class="center_wrapper">
            <h2>Цифровая образовательная среда дополнительного профессионального образования</h2>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Документы <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1PTiWyuUlYenst1TpPAR_esQnP2EcWTYb/view?usp=sharing" target="_blank">Инструктивные материалы для пользователей Единого федерального портала дополнительного профессионального педагогического образования</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1n_drOq5QpkNmcrMrj08cVn1FbIQHwc1w/view?usp=sharing" target="_blank">Об обучении экспертов</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1g1kfB2N5Tt3Zc19ysBw4DUrTAvpTiOPU/view?usp=sharing" target="_blank">Федеральный реестр дополнительных профессиональных программ педагогического образования: обновленный конструктор программ</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1BFGp4uO4tAtBvwd1x4sEI0T6L4RZyRgg/view?usp=sharing" target="_blank">Список федеральных экспертов программ ДПО</a></li>
                </ul>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
