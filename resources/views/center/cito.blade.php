@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="../../img/5.png" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Руководитель центра <br>Батукаев Рашид Эдуардович</h2>
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
                    <h2 class="center_block__heading">Основные направления деятельности Центра: <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-down"></i></button></h2>
                    <ul class="center__list center__list--not_active">
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
                <h2 class="center_block__heading center_block__heading--blue center_block__heading--no_margin">Сотрудники центра: <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-down"></i></button></h2>
                <ul class="center__list center__list--not_active">
                    <li class="center_block__text">Адаева Элита Ахмадовна - ведущий специалист</li>
                    <li class="center_block__text">Сакаев Ахмед Магомедович - ведущий специалист</li>
                    <li class="center_block__text">Сулумов Магомед Русланович - ведущий специалист</li>
                    <li class="center_block__text">Каимова Фариза Алашевна - ведущий специалист</li>
                </ul>
            </div>

            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Положение о центре <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="#">Положение о центре</a></li>
                    <li class="center_block__text"><a href="#">План центра на 2020 г</a></li>
                    <li class="center_block__text"><a href="#">Самообследование ГБУ ДПО ИРО ЧР</a></li>
                </ul>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
    <script type="text/javascript">

        let arrowDown = document.querySelectorAll('.arrow_down');

        arrowDown.forEach(arrow => {
            arrow.addEventListener('click', event => {

                let list = event.currentTarget.parentElement.nextElementSibling;
                let heading = event.currentTarget.parentElement;
                let icon = event.currentTarget.firstElementChild;

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



