@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/akhmadov.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Старший преподаватель <br> Ахмадов Муса Махмудович</h2>
                    <p class="center_block__text--blue">эл. адрес:<br>musa.cdo@mail.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text"> научно-методическое обеспечение условий для формирования и развития инклюзивного образования в регионе и оказание образовательным учреждениям республики содействия в социализации детей с ограниченными возможностями здоровья.</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">развитие профессиональной компетентности педагогов в области инклюзивного образования и методическое обеспечение их деятельности;</li>
                        <li class="center_block__text">научно-методическая поддержка образовательных учреждений, реализующих инклюзивную практику;</li>
                        <li class="center_block__text">изучение, обобщение, пропаганда, распространение и внедрение опыта инклюзивного образования в регионе;</li>
                        <li class="center_block__text">мониторинг развития инклюзивных процессов в образовательных учреждениях республики.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">нормативно-правовое обеспечение реализации федеральных государственных образовательных стандартов для детей с ограниченными возможностями здоровья в условиях общеобразовательной и специальной (коррекционной) школы</li>
                        <li class="center_block__text">методическая поддержка и сопровождение образовательных учреждений, реализующих адаптированные образовательные программы</li>
                        <li class="center_block__text">внедрение эффективных организационно-административных моделей инклюзивных школ</li>
                        <li class="center_block__text">современные здоровьесберегающие технологии в образовании детей с особыми образовательными потребностями</li>
                        <li class="center_block__text">распространение передового педагогического опыта</li>
                        <li class="center_block__text">профессиональная подготовка специалистов в области инклюзивного образования, популяризация идеи инклюзивного образования в российском обществе</li>
                        <li class="center_block__text">организация и содержание психолого-педагогического сопровождения детей с особыми образовательными потребностями в процессе обучения и воспитания</li>
                        <li class="center_block__text">психолого-педагогическое диагностирование достижений детей с особыми образовательными потребностями</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема центра</h2>
                    <p> «Теоретико-методические аспекты обеспечения повышения квалификации педагогических работников в условиях введения ФГОС ОВЗ»</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Ахмадов Муса Махмудович - старший преподаватель</li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Учебные программы <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($edu_programs as $edu)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($edu->content)!!}" target="_blank">
                                {{$edu->title}}
                            </a>
                        </li>
                    @endforeach
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1LxKes_rbTxEyLIqVeja2vMpYeKguRrok/view?usp=sharing">Использование межпредметных технологий в обучении детей с ОВЗ (36ч)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1DjKYgwPZizIz4mDNh6kXhwhgHJohfQds/view?usp=sharing">Использование межпредметных технологий в обучении детей с ОВЗ (72ч)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1rsc65ndPBm2PPJCVhQzUmoP1LQ7KOhfc/view?usp=sharing">Организация получения среднего профессионального образования обучающимися с ОВЗ.</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1GJmu9btUlbPC1obqwxUcOZ3sf1IuGegJ/view?usp=sharing">Методология и технология реализации ФГОС НОО ОВЗ и ФГОС О У/О в условиях общеобразовательной и специальной (коррекционной) школы</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1WyaUhKH6LzXxHNv_cLD0jqDnZj2rC3ss/view?usp=sharing">Реализация системы профессиональной ориентации и мотивации обучающихся с инвалидностью в процессе профессионального обучения через организацию системы конкурсов профессионального мастерства АБИЛИМПИКС</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1GpLqoOioUOBtkDoMAJiL7vkrZlBXzoWf/view?usp=sharing">Использование инновационных методов, средств и технологий с целью повышения мотивации и качества образования детей с ОВЗ.</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1yGtRfWESksXqwEIjgD5UU9-I7vauGq09/view?usp=sharing">Организация предпрофессиональной подготовки детей-инвалидов и детей с ОВЗ в современных условиях.</a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1F-ugehBDJeilBS9ho5UuI6LigGO7CQzm/view?usp=sharing">Методические рекомендации по организации получения образования детьми с ОВЗ и/или инвалидностью в общеобразовательных организациях Чеченской Республике в 2018-2019 учебном году </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1kC0hgs5k-10bDQTj1VQcncgtwhHSTshP/view?usp=sharing">Дорожная карта введения ФГОС НОО обучающихся с ограниченными возможностями здоровья и ФГОС  образования обучающихся с умственной отсталостью (интеллектуальными нарушениями)</a></li>
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
                <h2 class="center_block__heading center_block__heading--blue">Документы <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($documents as $doc)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                                {{$doc->title}}
                            </a>
                        </li>
                    @endforeach
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/16yg8pSnpqjmb94Iosw7eBGhYFPUDV16s/view?usp=sharing">Положение о центре</a></li>
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



