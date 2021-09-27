@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Заведующий центром <br>Батукаев Рашид Эдуардович</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (999) 144 07 88</p>
                    <p class="center_block__text--blue">эл. адрес:<br>rashid.batukaev@gmail.com</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">Информационно-техническое обеспечение деятельности ГБУ ДПО ИРО ЧР</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">информационно-техническое обеспечение образовательного процесса и иных мероприятий, проводимых ГБУ ДПО ИРО ЧР самостоятельно или совместно с другими организациями;</li>
                        <li class="center_block__text">ввод в эксплуатацию и обслуживание вычислительной техники, оргтехники, копировально-множительных аппаратов и другого электронного оборудования;</li>
                        <li class="center_block__text">установка и сопровождение базового и специального программного обеспечения для функционирования структурных подразделений, и учебных кабинетов ГБУ ДПО ИРО ЧР;</li>
                        <li class="center_block__text">обеспечение бесперебойной работы информационной сети, объединяющей все структурные подразделения ГБУ ДПО ИРО ЧР телекоммуникационных систем систем связи;</li>
                        <li class="center_block__text">оказание своевременной и квалифицированной помощи работникам ГБУ ДПО ИРО ЧР в вопросах использования программного обеспечения, компьютерной техники и другого технического оборудования;</li>
                        <li class="center_block__text">системное администрирование серверов ГБУ ДПО ИРО ЧР.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности Центра: <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">Развитие локальных вычислительных сетей. Обеспечение работоспособности технических средств доступа к сети Интернет.</li>
                        <li class="center_block__text">Обеспечение доступа и техническое сопровождение образовательного процесса в компьютерных аудиториях в соответствии с расписанием занятий и годовым календарным учебным графиком.</li>
                        <li class="center_block__text">Настройка системного программного обеспечения в компьютерных классах.</li>
                        <li class="center_block__text">Участие в разработке, внедрении и эксплуатации программных продуктов.</li>
                        <li class="center_block__text">Обеспечение защиты информации от несанкционированного доступа, от потери информации в результате сбоев программ, действия программных вирусов.</li>
                        <li class="center_block__text">Осуществление методической поддержки деятельности структурных подразделений в вопросах использования программного обеспечения, компьютерной техники и другого технического оборудования, внедрения в учебный процесс современных технических средств обучения и технологий.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Батукаев Рашид Эдуардович - заведующий центром</li>
                    <li class="center_block__text">Каимова Фариза Алашевна - инженер-программист</li>
                    <li class="center_block__text">Адаева Элита Ахмадовна - инженер-программист</li>
                    <li class="center_block__text">Сулумов Магомед Русланович - инженер-программист</li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Планы и отчеты<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    {{--@foreach($plans_reports as $plan)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($plan->content)!!}" target="_blank">
                                {{$plan->title}}
                            </a>
                        </li>
                    @endforeach--}}
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1NU_zccflXrPKbdZb5QdgpSPOahHEyqDz/view?usp=sharing">План центра на 2021 г.</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/13nOAMGfppbHQtHKwJ81_nuoax4-hJ9I-/view?usp=sharing">Отчет центра за 2020 г.</a></li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Документы <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    {{--@foreach($documents as $doc)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                                {{$doc->title}}
                            </a>
                        </li>
                    @endforeach--}}
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1KrTFPO6ITGIq4aC7MmeY59_1moe58Qeg/view?usp=sharing">Положение о центре</a></li>
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



