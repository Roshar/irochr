@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/uspaeva.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Старший преподаватель центра по сопровождению ГИА <br>Успаева Галина Вахиевна</h2>
                    <p class="center_block__text--blue">эл. адрес:<br>sara01@yandex.ru</p>
                    <p class="center_block__text--blue">контактный телефон:<br>8 928 021 88 13</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">создание образовательного пространства для подготовки работников образования и представителей общественности ЧР к успешной профессиональной деятельности в условиях организационно-методического сопровождения ГИА.</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">обновить содержание дополнительного профессионального образования с учетом современных тенденций в совершенствовании процедуры ГИА и реализации нормативно-правовой базы, регулирующей Порядок проведения ГИА; </li>
                        <li class="center_block__text">внедрить интерактивные формы обучения слушателей: интерактивные лекции: лекции-диалоги, лекции-беседы, проблемные лекции, лекции-исследования, мастер-классы, педагогические практикумы, круглые столы, деловые игры, тренинги;</li>
                        <li class="center_block__text">разработать современные образовательные программы и учебно-методические комплексы, внедрить современные педагогические технологии в системе ДПО по обучению работников ППЭ осуществлять свою деятельность в условиях ГИА;</li>
                        <li class="center_block__text">формировать мониторинг качества образовательной деятельности на основе итоговой диагностики;</li>
                        <li class="center_block__text">участвовать в мероприятиях всероссийского, межрегионального и регионального уровней.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Приоритетные направления работы центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">методическое обеспечение Порядка проведения ГИА;</li>
                        <li class="center_block__text">методическая поддержка и сопровождение ППЭ;</li>
                        <li class="center_block__text">распространение передового педагогического опыта;</li>
                        <li class="center_block__text">профессиональная подготовка специалистов в области ГИА, популяризация знаний о процессе проведения ЕГЭ и ОГЭ в российском обществе;</li>
                        <li class="center_block__text">организационно-методическое сопровождение ГВЭ.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема центра</h2>
                    <p>«Методические и практические аспекты обеспечения повышения квалификации педагогов и других специалистов, являющихся работниками ППЭ». </p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Успаева Галина Вахиевна - старший преподаватель</li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Учебные программы<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($edu_programs as $edu)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($edu->content)!!}" target="_blank">
                                {{$edu->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Методические рекомендации <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($method_rec as $rec)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($rec->content)!!}" target="_blank">
                                {{$rec->title}}
                            </a>
                        </li>
                    @endforeach
                    <li class="center_block__text"><a href="https://docs.google.com/document/d/1gfHgDA1vbBVnzFcO3WGYLxbzb41br3vq/edit?usp=sharing&ouid=103470700133688287880&rtpof=true&sd=true">Методические рекомендации к учебной программе дополнительного профессионального образования «Организационно-методическое сопровождение ГИА»</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1X4eqc6-QJQbJaX4w352K8s64TydZXh60/view?usp=sharing">Методические рекомендации по порядку проведения ЕГЭ</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Планы и отчеты <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($plans_reports as $plan)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($plan->content)!!}" target="_blank">
                                {{$plan->title}}
                            </a>
                        </li>
                    @endforeach
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1zHbXECYdcx4ifsinRKpD7JHhx6I_AWHx/view?usp=sharing">План центра на 2021 г.</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1t9B0bJGVivg_0RVD5jRHrWgh_2_D8E7K/view?usp=sharing">Дорожная карта сопровождения подготовки к ГИА-2021</a></li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Документы<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">

                    <li class="center_block__text"><a href="https://drive.google.com/file/d/18SV8Z4PX_NTlkvMU6IfR0-N16HY7hTmL/view?usp=sharing">Положение о центре</a></li>
                    @foreach($documents as $doc)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                                {{$doc->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Новостной раздел <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @if(count($news))
                        @foreach($news as $post)
                            <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>
                        @endforeach
                    @else
                        <li> нет записей</li>
                    @endif
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Статьи<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($publications as $pub)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($pub->content)!!}" target="_blank">
                                {{$pub->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
    <script type="text/javascript">

        let headings = document.querySelectorAll('.center_block__heading');

        headings.forEach(heading => {
            heading.addEventListener('click', event => {

                let list = event.currentTarget.nextElementSibling;
                let icon = event.currentTarget.firstElementChild.firstElementChild;

                list.classList.toggle('center__list--not_active');
                if (!list.classList.contains('center__list--not_active')) {
                    list.style.height = `${ list.scrollHeight / 16 + 1.8 }em`
                } else {
                    list.style.height = `${ list.scrollHeight / 16 }em`;
                    window.getComputedStyle(list, null).getPropertyValue("height");
                    list.style.height = "0";
                }

                if(heading.classList.contains('center_block__heading--blue')){
                    heading.classList.toggle('center_block__heading--no_margin')
                }

                if (list.classList.contains('center__list--not_active')){
                    icon.classList = 'fas fa-arrow-circle-down';
                } else {
                    icon.classList = 'fas fa-arrow-circle-up';
                }
            })
        })
    </script>
@endsection



