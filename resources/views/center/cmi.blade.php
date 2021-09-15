@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/ataeva.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Старший преподаватель центра<br>Атаева Саша Умаруловна</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (928) 782-66-17</p>
                    <p class="center_block__text--blue">электронный адрес:<br>miss.ataewa@yandex.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">Совершенствование предметных и методических компетенций учителей математики и информатики
                        (в том числе и в области формирования функциональной грамотности обучающихся)</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">выявить точки роста учителей-предметников на основе анализа результатов диагностики и мониторинга методических западаний учителей математики и информатики (на основе результатов ГИА, ВПР, по результатам КПК (региональных и федеральных (в рамках проекта «Учитель будущего»));</li>
                        <li class="center_block__text">разработка дополнительных профессиональных программ повышения квалификации  в соответствии с выявленными профессиональными дефицитами учителей;</li>
                        <li class="center_block__text">проведение в соответствии с планом-графиком курсов повышения квалификации, а также всех видов учебных занятий, предусмотренных учебными планами;</li>
                        <li class="center_block__text">организация совместной деятельности с региональными отделениями Ассоциаций и Сетевых методических объединений учителей математики
                            и информатики по вопросам реализации предметных Концепций;</li>
                        <li class="center_block__text">Консультативная деятельность, оказание научно-методической помощи учителям математики и информатики;</li>

                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">разработка новых программ дополнительного профессионального образования курсов повышения квалификации;</li>
                        <li class="center_block__text">планирование и проведение курсов повышения квалификации по темам образовательных программ центра;</li>
                        <li class="center_block__text">усиление деятельности, направленной на обновление содержания образования (использование современных образовательных технологий)  в обучении;</li>
                        <li class="center_block__text">расширение психолого-педагогического  сопровождения учебно-воспитательного процесса;</li>
                        <li class="center_block__text">совершенствование работы центра, направленной на научно-методическое обеспечение инновационных процессов в образовательных учреждениях; </li>
                        <li class="center_block__text">разработка научно-методических рекомендаций по преподаванию математики и информатики;</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема центра</h2>
                    <p>«Реализация деятельностного подхода в преподавании математики и информатики»</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Атаева Саша Умаруловна - старший преподаватель</li>
                    <li class="center_block__text">Виситаева Марет Балаудиновна - старший преподаватель (канд. пед. наук)</li>
                    <li class="center_block__text">Гехаева Марха Жамаловна - старший преподаватель </li>
                    <li class="center_block__text">Сулумов Магомед Русланович - преподаватель </li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1wDhLiTcVsxEKuBXwfy0FGGOVcA4RNuZa/view?usp=sharing">Методические рекомендации для учителей математики на 2017-2018 учебный год </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1RBWKBQM2UY1oPqiZlvw4z7gP-rOZ7_cf/view?usp=sharing">Система оценивания образовательных и личностных результатов при обучении математике в условиях введения ФГОС ООО  </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1Wc_fpedUrc9apdiWY3G1KiSLjkoYnSdK/view?usp=sharing">Методические рекомендации проведения групповой работы по математике «Линии математики» (Виситаева М.Б.)</a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1XCGKIgp72quRozvO1l5JoGlyKqfrZgAk/view?usp=sharing">Использование межпредметных технологий в преподавании учебного предмета "Математика" </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1zO3FRU4CXjX3HEenykgUusTNETO3H-pw/view?usp=sharing">Методика решения уравнений и неравенств  </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1U-KmPdmTXmc1VHKic-wMJNCCGT1GHm48/view?usp=sharing">Современный урок в условиях реализации ФГОС</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1fBKB5APuTlY8Gl1NaX-AdAtsmElWRXLh/view?usp=sharing">Формирование универсальных учебных действий в контексте  ФГОС </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1KWNdvfWAPVq0p5IE5guulPmw29Vv6at-/view?usp=sharing">Теоретические и практические основы обучения математике </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1iaPfO4aVJRLbCrU0dCkn3pHbcuqjEwtv/view?usp=sharing">Методические аспекты подготовки учащихся к государственной итоговой аттестации по математике</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1H4wUCYX3EPI8f-UDEacHyb2epqZYNMBF/view?usp=sharing">Система оценивания образовательных и личностных результатов при обучении математике в условиях введения ФГОС ООО  </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1HwOEH7LuzMjZtAbH_rnWHh_yAhGkMrGG/view?usp=sharing">Формирование метапредметных умений на уроках математики в рамках ФГОС</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/15khA8Ff66det7PR4j44OF7Vnu6BlLIHM/view?usp=sharing">Проектирование образовательных технологий, обеспечивающих формирование планируемых результатов обучения математике в условиях ФГОС ООО  </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1HoLZETmtb0qTDiMgoFQX6l_nEswwmpKj/view?usp=sharing">Решение уравнений и неравенств </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1HBcDPBb2SatgkzB7pZOUxgCLCkQpe1A2/view?usp=sharing">Требования к современному уроку в условиях реализации ФГОС (физика)</a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1ZGIjqpa70jjtGWt0P5XyxkglhVIAeuHu/view?usp=sharing">Положение о центре </a></li>
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
                    @foreach($useful as $us)§§§
                        <li class="center_block__text">
                            <a href="{!!doc_trim($us->content)!!}" target="_blank">
                                {{$us->title}}
                            </a>
                        </li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1Z7b1CWPKf6cg2xK23kVSwgHTVKH9rpFr/view?usp=sharing">Мастер-класс «Лаборатория познания» М.Б. Виситаева </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1kuPmM6lE_EkteAwNSOHGV66Ctdl4OZHe/view?usp=sharing">Задачи на развитие геометрического зрения у учащихся 5-6 класов (Виситаева М.Б) </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1eF2qHiOa16SE5ogsqjoNJmTWCAL-o9b0/view?usp=sharing">Об изучении пропедевтического курса  геометрии в школах Чеченской республики (Виситаева М.Б.) </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1dhT1GFmOJlhrFgj72M98kzUiRu2oThrz/view?usp=sharing">Олимпиада по математике в Чеченской республике (Виситаева М.Б.)  </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1qwu9BKtx2b0360qcXKC2uAqq7v0beGyE/view?usp=sharing">Статья Виситаевой М.Б. </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1hEAxHeHcDtWCXwMR5KPUessfpP1nkeQv/view?usp=sharing">Список опубликованных работ М.Б.Виситаевой </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1plTobj2zNzxUbukwamuVuvh3o28NXzOg/view?usp=sharing">Федеральный перечень учебников, рекомендуемых к использованию при реализации имеющих государственную аккредитацию образовательных программ начального общего,
                                основного общего, среднего общего образования  </a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1Owf7SLAeRDGq3tNs64d3Gmf6PJfSadtE/view?usp=sharing">Рекомендуемые материалы (С.М. Никольский)</a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1gOCLQXZfXeRAZRRB9Poe-HtR_qZFOQze/view?usp=sharing">Рекомендуемые материалы (М.К. Потапов, А.В. Шевкин)</a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1QMA8tT_XPwekrWaIFFSiqv873aCCKMZI/view?usp=sharing">Презентации 5 кл.</a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1wE-WGdyGZCj14oqlxgfhYgD7nr8ikYQj/view?usp=sharing">Презентации 6 кл.</a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/18kvcUguweerIXIfgY27Te6vjNpzofsXf/view?usp=sharing">Сценарий урока</a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1Wj58StHeuRpRGEmUdXm5Lu-085HGj-a_/view?usp=sharing">В помощь учителю математики</a></li>
                        <li class="center_block__text"><a href="https://drive.google.com/file/d/1F5HcopnapBT8Qbsm2WDr5nd21DmBEK93/view?usp=sharing">Проект "Подготовка к ЕГЭ по информатике"</a></li>
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



