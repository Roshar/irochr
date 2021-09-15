@extends('layouts.project_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        {{--        <h1>{{$category->title}}</h1>--}}
        <div class="center_wrapper">
            <h2>Государственная программа "Развитие образования Чеченской Республики", направленная на развитие современных управленческих и образовательных практик реализации ФГОС и концепций учебных предметов</h2>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Документы <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1qyOQdcIt25-hmAcC5FifTdE0qAMFKMYT?usp=sharing">Нормативно-правовые акты Федеральной стажировочной площадки (приказы, соглашения, договора)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1r__6u9qGwLPIgQkA0AR7_dQ-VWnFi8Tw?usp=sharing">Курсы повышения квалификаци педагогических и управленческих кадров</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1NV9730f63JpEZMxc4kjRWMbXyWG6pFxB?usp=sharing">Вебинары, круглые столы, конкурсы, семинары</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1Owz2An5DPbWNXxGLtVf32JloBvnkd2OT?usp=sharing"> Программы дополнительного профессионального образования (ДПО)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1HGgcpHgiXqL7QE4ud-gG6rks4-w0yHxg?usp=sharing">Методические рекомендации </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1xWnFGMWygaL_x7RvB9Zgq7qPGFRoXE5h?usp=sharing"> Материалы о реализации мероприятий ГПРО опубликованные в СМИ</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1b_v2U1Dl-CQFTgMbv4Anai4n-iwzScwa?usp=sharing">Мониторинги </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1VLaAqJt0HcUWNL1AQK_clnlFGplnjiFT?usp=sharing">Отчёты по итогам реализации мероприятий в 2020 году по направлению «Модернизация технологий и содержания обучения в соответствии с новыми федеральными государственными образовательными стандартами (ФГОС) посредством разработки концепций модернизации конкретных областей, поддержки региональных программ развития образования и поддержки сетевых методических объединений» в рамках государственной программы «Развитие образования» </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1rnDJ32SiQiGHIsDTm6MFZ1iOA9BJwZjA/view?usp=sharing">СПРАВКА по итогам деятельности федеральной стажировочной площадки ГБУ ДПО ЧИПКРО в 2018 /2019 г.г. по реализации мероприятий Государственной программы Российской Федеральной «Развитие образования» на 2018-2025 годы</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мероприятия ГПРО (2020) <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @if(count($posts_20))
                        @foreach($posts_20 as $post)
                             <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>
                        @endforeach
                    @else
                        <li> нет записей</li>
                    @endif
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мероприятия ГПРО (2019) <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @if(count($posts_19))
                        @foreach($posts_19 as $post)
                            <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>
                        @endforeach
                    @else
                        <li> нет записей</li>
                    @endif
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мероприятия ГПРО (2018) <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @if(count($posts_18))
                        @foreach($posts_18 as $post)
                            <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>
                        @endforeach
                    @else
                        <li> нет записей</li>
                    @endif
                </ul>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
