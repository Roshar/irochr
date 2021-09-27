@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/daudova.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Заведующий центром<br>Даудова Лайла Идрисовна</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (929) 890 47 90 </p>
                    <p class="center_block__text--blue">электронный адрес:<br>layla.daudova.80@mail.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">совершенствование предметных и методических компетенций учителей биологии, химии, физики и астрономии (в том числе и в области формирования функциональной грамотности обучающихся)</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра </h2>
                    <ul class="center__list">
                        <li class="center_block__text">выявить точки роста учителей-предметников на основе анализа результатов диагностики и мониторинга методических западаний учителей химии, биологии, физики и астрономии (на основе результатов ГИА, ВПР, по результатам КПК (региональных и федеральных (в рамках проекта «Учитель будущего»));</li>
                        <li class="center_block__text">разработка дополнительных профессиональных программ повышения квалификации  в соответствии с выявленными профессиональными дефицитами учителей;</li>
                        <li class="center_block__text">проведение в соответствии с планом-графиком курсов повышения квалификации, а также всех видов учебных занятий, предусмотренных учебными планами;</li>
                        <li class="center_block__text">организация совместной деятельности с региональными отделениями Ассоциаций и Сетевых методических объединений учителей химии, физики, астрономии и биологии по вопросам реализации предметных Концепций;</li>
                        <li class="center_block__text">консультативная деятельность, оказание научно-методической помощи учителям химии, биологии, физики и астрономии;</li>

                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности центра: <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">разработка новых программ дополнительного профессионального образования курсов повышения квалификации;</li>
                        <li class="center_block__text">планирование и проведение курсов повышения квалификации по темам образовательных программ центра;</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема центра</h2>
                    <p>«Реализация деятельностного подхода в преподавании естественнонаучных дисциплин».</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Даудова Лайла Идрисовна - заведующий центром</li>
                    <li class="center_block__text">Мочигова Тумиша Раисовна - старший преподаватель</li>
                    <li class="center_block__text">Сулейманов Саид-Хусаин Абдрахманович - старший преподаватель </li>
                    <li class="center_block__text">Хасиева Малика Геланиевна - старший преподаватель </li>
                    <li class="center_block__text">Губанова Елена Владимировна - доцент центра естественнонаучных дисциплин </li>

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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/15cuCVrF98FqdNqs0mlGAACud_EmHTb0Q/view?usp=sharing">Формирование метапредметных умений на уроках биологии</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/11Gfi5BAkEBHiig7gPVkQzjnH47acEOjv/view?usp=sharing">Использование межпредметных технологий в преподавании учебного предмета "Биология"</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1TNDBNvjn87zKBKHVhhT-SlBhbNrJU0d4/view?usp=sharing">Использование межпредметных технологий в преподавании учебного предмета "Химия"</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1X0ryrthBH7cHdgbVfDPrWQ6Rf-PIlh0w/view?usp=sharing">Использование межпредметных технологий в преподавании учебного предмета "Астрономия"</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1TNuSLxqbA9oTz3xI8V4M8Pikl6lFk_FN/view?usp=sharing">Использование межпредметных технологий в преподавании учебного предмета "Физика"</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1WCM8xDa7vjEBnTXTAZltmGZz0S3zLOqd/view?usp=sharing">Требования к современному уроку в условиях реализации ФГОС (ФЦПРО) (биология)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1xoiqjsFoABvQ4zfE-NlGJy-t-Vf7XUg4/view?usp=sharing">Требования к современному уроку в условиях реализации ФГОС (ФЦПРО) (химия)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1LLVOiqI3R6ubNh2o-uxZeTMcp5sVGL_f/view?usp=sharing">Методика решения расчетных задач по химии (модульная программа)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1RK694H1hJ7e18LpYCafFUUG9b52RMhp4/view?usp=sharing">Методика обучения решению задач по цитологии</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1as0p5PCTj8f1Jqk-pxh37R3MNkDvK4EP/view?usp=sharing">Интеграция содержания предметов естественнонаучного цикла в образовательном процессе в условиях введения ФГОС</a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1IXzYGB18rlrdC05C_xD_w603WOlowOy0/view?usp=sharing">Методические рекомендации по подготовке обучающихся к ВПР (составлены на основе анализа результатов ВПР за 2020 год)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1l3dX6JIc27K0u9FCrRyP_od7W97awhyF/view?usp=sharing">Методические рекомендации по преподаванию предметов естественнонаучного цикла с применением электронного обучения и дистанционных образовательных технологий</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1HMit_5MwM_Q7IqDfVZxoyg2sGXVx47cU/view?usp=sharing">Методические рекомендации по преподаванию учебного предмета «Биология» в 2020-2021 учебном году</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1I97s95qXhpkekaKGGiq_4i2uwLjDunnb/view?usp=sharing">Методические рекомендации по преподаванию учебного предмета «Химия» в 2020-2021 учебном году</a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1sEsntUq3bhI3565X04MIAr9rDm84dBgt/view?usp=sharing">Отчет работы за 2020 год</a></li>
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
                <h2 class="center_block__heading center_block__heading--blue">Полезное<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($useful as $us)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($us->content)!!}" target="_blank">
                                {{$us->title}}
                            </a>
                        </li>
                    @endforeach
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



