@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/khamzatov.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Старший преподаватель<br>Хамзатов Джунид Саламувич</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (963) 596 24 46</p>
                    <p class="center_block__text--blue">электронный адрес:<br>hamzin143@mail.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">Реализация образовательных программ повышения квалификации, ориентированных на запросы учителей физической культуры и ОБЖ, а также ведение научно-исследовательской и опытно-экспериментальной работы по актуальным проблемам образования на основе достижений современной науки и практики.</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">обеспечение содержания и организация повышения квалификации учителей физической культуры и ОБЖ;</li>
                        <li class="center_block__text">организация, координация и участие в научно-исследовательских разработках и проектах по проблемам физической культуры и ОБЖ; </li>
                        <li class="center_block__text">оказание научно-методической помощи общеобразовательным учреждениям и муниципальным органам управления образованием по вопросам физической культуры и ОБЖ;</li>
                        <li class="center_block__text">изучение, обобщение и распространение передового педагогического опыта учителей физической культуры и ОБЖ;</li>
                        <li class="center_block__text">участие в экспертизах и профессиональной аттестации учителей данной категории.</li>

                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">повышение качества образования через совершенствование педагогического мастерства учителей;</li>
                        <li class="center_block__text">использование современных образовательных технологий;</li>
                        <li class="center_block__text">расширение психолого-педагогического обеспечения учебно-воспитательного процесса;</li>
                        <li class="center_block__text">разработка научно-методических рекомендаций в помощь учителям;</li>
                        <li class="center_block__text">изучение и распространение передового педагогического опыта.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема центра </h2>
                    <p>---</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Хамзатов Джунид Саламувич - заведующий центром</li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1Vj0LttWnzfY09sinsMoXaCsji1iejPPn/view?usp=sharing">Оценочная деятельность учителя в условиях реализации ФГОС и Концепции преподавания предмета «Физическая культура»  </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1uJpnRsMZCV0poc5y6xrGJ8CK2sqXftbO/view?usp=sharing">Оценочная деятельность  учителя  в предмете «Физическая  культура» </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1I1Vfjk3aZEP-QEmeZ5FYaFFY_0aKtOWz/view?usp=sharing">Оценочная деятельность учителя в предмете «Основы безопасности жизнедеятельности»</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1u_TTa3w557WhwVLwmITyc5X5jtik_euP/view?usp=sharing">Оценочная деятельность учителя в условиях реализации ФГОС и Концепции преподавания предмета «Основы безопасности жизнедеятельности» </a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1h-F5zMBo6xt_OQKkeUImdixGD9h7W5Ag/view?usp=sharing">Методические рекомендации для образовательных организаций Чеченской Республики об организации и преподавании курса «Основы безопасности жизнедеятельности» в 2020—2021 учебном году»</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1DtfdxB4nThm0cliYtXtD_ae5YXCLuOiu/view?usp=sharing">Методические рекомендации для образовательных организаций Чеченской Республики о преподавании учебного предмета «Физическая культура» в 2020-2021 учебном году</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1MueOoi0krLISIBNfim6BOZCc-jpKVMmp/view?usp=sharing">Методические рекомендации по организации освоения содержания образовательных программ по учебному предмету «Основы безопасности жизнедеятельности» вобщеобразовательных организациях в условиях использования ЭО и ДОТ</a></li>

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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1LNxmc02GdTcTYxfRONbmlNAoUV0UHjjy/view?usp=sharing">Положение о центре </a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Новостной раздел <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
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
