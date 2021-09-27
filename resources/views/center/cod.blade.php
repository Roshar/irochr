@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/magomadov.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Преподаватель<br>Магомадов Висхан Шамсудинович</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (938) 898 95 35</p>
                    <p class="center_block__text--blue">электронный адрес:<br></p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">совершенствование профессиональной компетентности учителей в соответствии с требованиями ФГОС и Концепциями модернизации содержания и технологий преподавания образовательных областей</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">Выявить точки роста предметников на основе анализа результатов диагностики и мониторинга методических западаний учителей истории, обществознания и географии по итогам РСУР и результатам сдачи ВПР – 2020 и ГИА - 2020;</li>
                        <li class="center_block__text">Разработка дополнительных профессиональных модульных образовательных программ повышения квалификации  в соответствии с точками роста в предметных областях, курируемых Центром;</li>
                        <li class="center_block__text">Проведение в соответствии с планом-графиком курсов повышения квалификации, а также всех видов учебных занятий, предусмотренных учебными планами для соответствующих специальностей и форм обучения;</li>
                        <li class="center_block__text">Диагностика потребностей педагогических кадров и образовательных учреждений в повышении квалификации и формирования заказа с учетом запроса образовательных учреждений и муниципальных методических служб, территориальных органов управления образованием;</li>
                        <li class="center_block__text">Организация совместной деятельности с муниципальными методическими службами и методистами, курирующими общественно-научные дисциплины, по вопросам содержания, технологий преподавания предметов, оказания методической помощи учителям истории, обществознания и географии в рамках реализации проекта «Учитель будущего»;</li>
                        <li class="center_block__text">Организация совместной деятельности с региональными отделениями Ассоциаций учителей истории, обществознания и географии по вопросам модернизации содержания и технологий преподавания образовательных областей;</li>
                        <li class="center_block__text">Консультативная деятельность, оказание научно-методической помощи учителям истории, обществознания, географии.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">---</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема центра</h2>
                    <p>«Развитие компетентностей по осуществлению профессиональной деятельности в соответствии с требованиями ФГОС и Концепциями модернизации образовательных областей»</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Мажидов Ислам Саид-Салихович - старший преподаватель</li>
                    <li class="center_block__text">Магомадов Висхан Шамсудинович - преподаватель </li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/13VfrINRmNNU74-bSRraaiUFaIxZDxAZ9/view?usp=sharing">Методические аспекты формирования метапредметных результатов на уроках истории </a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Методические рекомендации<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($method_rec as $rec)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($rec->content)!!}" target="_blank">
                                {{$rec->title}}
                            </a>
                        </li>
                    @endforeach
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/19APT80MQco_uWp0O4TOrojgDlwNAbH85/view?usp=sharing">Анализ результатов и методические рекомендации по подготовке учащихся к ВПР(история)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1INxwHbuDxsQopSBIyfropzgLbzRyPplK/view?usp=sharing">Методические рекомендации для образовательных организаций Чеченской Республики об особенностях преподавания учебного предмета «История» в 2020/2021 учебном году</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/15jGgAaTkTH9Xr6s8wcW5FveFBpgv2bCS/view?usp=sharing">Методические рекомендации для образовательных организаций Чеченской Республики об особенностях преподавания учебного предмета «Обществознание» в 2020/2021 учебном году </a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1ofZsbSqPz3zKdtx2k6VYefTTUmwfl_0m/view?usp=sharing">Отчет работы за 2020 год </a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1W_kNvzvOd67g9MJ7FP2fsVM65DaJABj8/view?usp=sharing">Положение о центре </a></li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Ассоциация школьных учителей истории и обществознания ЧР<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1ByOJJ1ktpNrfSXiGHJMBQvyA70dOEv1V/view?usp=sharing">Устав некоммерческой общественной организации «Ассоциация школьных учителей истории и обществознания Чеченской Республики» </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1_q2hqPozR-PKsG-8w2x3Sh5FZNmaiwiw/view?usp=sharing">Протокол №1 </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1ka30QEJOY4zjLtRK4q9lu0-6_sh0J-pF/view?usp=sharing">План работы Регионального профессионально-методического объединения учителей истории и обществознания «Ассоциации учителей истории и обществознания Чеченской Республики» на 2016-2017 учебный год</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1Umw7wg3CkVsZfvr8WVGDq_hqzlVqlBSQ/view?usp=sharing">Список членов Регионального отделения «Ассоциации учителей истории и обществознания» Чеченской Республики</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1xp7hwyVQCu-jngOdTcFYibtzBO8Bw728/view?usp=sharing">Заявление о приеме</a></li>
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
