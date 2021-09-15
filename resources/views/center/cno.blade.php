@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/bataeva.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Старший преподаватель<br>Батаева Мальгиз Башильевна</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (928) 781 90 94</p>
                    <p class="center_block__text--blue">электронный адрес:<br>malika_bashirovna@mail.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">оказание научно-методической помощи в формировании функциональной грамотности учителей начальной школы образовательных учреждений Чеченской Республики, а также в овладении ими современными и инновационными педагогическими технологиями, отражающими принципы новой концепции обучения</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра </h2>
                    <ul class="center__list">
                        <li class="center_block__text">Совершенствование профессиональных форм и методов работы учителей начальной школы;</li>
                        <li class="center_block__text">Развитие ключевых компетенций учителей начальной школы;</li>
                        <li class="center_block__text">Реализация адресного повышения квалификации на основе результатов оценочных процедур;</li>
                        <li class="center_block__text">Внедрение современных образовательных технологий в образовательную деятельность;</li>
                        <li class="center_block__text">Создание инновационных образовательных площадок, которые обеспечат изучение, развитие и дальнейшее внедрение инновационных технологий в образовательных организациях Чеченской Республики;</li>
                        <li class="center_block__text">Выявление талантливых, творчески работающих учителей начальной школы;</li>
                        <li class="center_block__text">Диссеминация передового педагогического опыта учителей начальной школы;</li>
                        <li class="center_block__text">Стимулирование их творческой активности.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности центра  <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">Усиление деятельности, направленной на обновление содержания образования (использование современных образовательных технологий в педагогической деятельности);</li>
                        <li class="center_block__text">Непрерывное системное совершенствование уровня профессиональной компетенции специалистов центра;</li>
                        <li class="center_block__text">Оказание научно-методической помощи, которая обеспечит непрерывное повышение профессионального мастерства педагогов начальной школы Чеченской Республики в области формирования у обучаемых функциональной грамотности;</li>
                        <li class="center_block__text">Расширение психолого-педагогического обеспечения учебно-воспитательного процесса в начальной школе;</li>
                        <li class="center_block__text">Совершенствование работы центра, направленной на научно-методическое обеспечение инновационных процессов в образовательных учреждениях;</li>
                        <li class="center_block__text">Разработка научно-методических рекомендаций по организации учебно-воспитательного процесса школой;</li>
                        <li class="center_block__text">Изучение и распространение передового педагогического опыта творчески учителей начальной школы.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Научная и учебно-методическая работа центра должна строиться с соблюдением следующих принципов: <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">актуальности;</li>
                        <li class="center_block__text">научной обоснованности;</li>
                        <li class="center_block__text">системности;</li>
                        <li class="center_block__text">мобильности;</li>
                        <li class="center_block__text">продуктивности и результативности.</li>
                    </ul>
                    <p>Деятельность сотрудников центра должна быть основана на научном анализе существующей теории и практики образования и направлена на создание условий для развития педагогической компетентности учителей начальной школы.</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Батаева Мальгиз Башильевна - старший преподаватель</li>
                    <li class="center_block__text">Болатбиева Анжелика Наврадиевна - старший преподаватель</li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1TSwsA9bm6xJvHeloFpF42AA7UXc1JfWj/view?usp=sharing">Методические рекомендации по русскому языку(1-4 кл.)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1CorvGS3TR__3jAOAic9Ey80XQGQnVIsT/view?usp=sharing">Методические рекомендации по проектированию системы оценки достижения планируемых результатов освоения основной образовательной программы начального общего образования</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1-H2kdbzhrgrTjiRyFK5A8yP8QHyuLu_Q/view?usp=sharing">Методические материалы для проведения практических работ на уроках курса "Окружающий мир"</a></li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Планы и отчеты<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($plans_reports as $plan)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($plan->content)!!}" target="_blank">
                                {{$plan->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Документы<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($documents as $doc)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                                {{$doc->title}}
                            </a>
                        </li>
                    @endforeach

                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1ACPPnYm2q--2HSo3ZtLrTXSfbWFrH9d_/view?usp=sharing">Положение о центре </a></li>
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
