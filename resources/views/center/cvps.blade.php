@extends('layouts.center_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        <h1>{{$title}}</h1>
        <div class="center_wrapper center_wrapper--ric">
            <div class="center_block center_block--white center_main">
                <img src="{{asset('assets/front/img/centers/employee/yaudarova.jpg')}}" alt="" class="center_block__image">
                <div class="center_block__info">
                    <h2 class="center_main__heading">Заведующий центром<br>Яударова Малика Юрьевна</h2>
                    <p class="center_block__text--blue">контактный номер:<br>+7 (963) 708 35 55</p>
                    <p class="center_block__text--blue">электронный адрес:<br>yamalika95@mail.ru</p>
                </div>
            </div>
            <div class="center_block--white">
                <div class="center_block">
                    <h2 class="center_block__heading">Цель работы</h2>
                    <p class="center_block__text">повышение профессиональной компетентности кадрового состава психологической службы и специалистов в области воспитания ЧР</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные задачи центра</h2>
                    <ul class="center__list">
                        <li class="center_block__text">повышение качества дополнительного образования путем обновления содержания моделей повышения квалификации работников системы образования;</li>
                        <li class="center_block__text">всестороннее содействие участникам образовательного процесса в методическом и научно-педагогическом обеспечении по проблемам  модернизации регионального образования;</li>
                        <li class="center_block__text">программно-методическое    обеспечение и психолого-педагогическое сопровождение  процесса  формирования  здоровьесберегающей образовательной среды;</li>
                        <li class="center_block__text">стимулирование творческой активности специалистов в области воспитания, педагогов-психологов, социальных педагогов;</li>

                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Основные направления деятельности Центра <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">усиление деятельности, направленной на повышение качества  воспитания и психолого-педагогического сопровождения образовательной деятельности.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Методическая тема Центра {{--<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button>--}}</h2>
                    <p>«Развитие и воспитание личности в современном образовательном пространстве»</p>
                </div>
                <div class="center_block">
                    <h2 class="center_block__heading">Научную и учебно-методическую работу профессорско-преподавательский состав центра строит на основе  следующих основополагающих принципов:<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                    <ul class="center__list">
                        <li class="center_block__text">научной обоснованности;</li>
                        <li class="center_block__text">диверсификации, предполагающей многообразие, вариативность услуг, форм, содержания развития профессионализма;</li>
                        <li class="center_block__text">личностно-ориентированного подхода, учитывающего запросы, а также индивидуальный уровень профессионализма каждого педагога;</li>
                        <li class="center_block__text">оптимальности форм, методов, содержания развития профессионализма;</li>
                        <li class="center_block__text">открытости и доступности, предполагающих добровольность участия и свободу выбора индивидуального пути развития профессионализма педагога, форм и содержания образования, возможности перехода с одной формы на другую и их сочетание и т.д.;</li>
                        <li class="center_block__text">продуктивности  и результативности.</li>
                    </ul>
                </div>
                <div class="center_block">
                    <p>В основе программ курсовой подготовки слушателей центра  лежит понимание важности изменений социально-психологического сопровождения образовательного процесса в образовательных организациях, его эффективности и специфики в условиях реализации ФГОС. Содержание разделов программ акцентирует внимание слушателей на том, что суть социально-психолого-педагогической деятельности заключается в сопровождении образовательного процесса и его участников.</p>
                    <p>Общие, теоретические вопросы обсуждаются на лекционных занятиях, которые проводятся в форме лекций-диалогов, лекций с заранее запланированными ошибками и др. Со слушателями  КПК проводятся  практические занятия: диагностика на выявление психологических особенностей слушателей, тренинги, практическая апробация диагностического инструментария для разновозрастных групп школьников, составление психологических портретов, разрабатываются творческие социально-психологические проекты.</p>
                    <p>Материалы, изложенные в программах расширяют информационное пространство по проблеме, связанной с организацией образовательного процесса в современных условиях, что способствует повышению уровня компетентности педагога-психолога и социального педагога.</p>
                </div>
            </div>
        </div>

        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Сотрудники центра<button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text">Яударова Малика Юрьевна - заведующий центром</li>
                    <li class="center_block__text">Медаева Хава Лемиевна - старший преподаватель</li>
                    <li class="center_block__text">Ибрагимов Саламбек Салманович - старший преподаватель </li>

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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1xn_q-6867end7p3BRr2lfe88mP-WEstO/view?usp=sharing">Современные подходы в работе социального педагога в условиях реализации ФГОС</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1LCQQK-dEN_S3F0qi2X6aj21BRKSDFvHZ/view?usp=sharing">Психолого-педагогическое сопровождение образовательного процесса в условиях реализации ФГОС</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1TKOX9AxZq1uLpvGRfjsTHs7vkh5ph-hC/view?usp=sharing">Психолого-педагогическая подготовка к ГИА обучающихся выпускных классов общеобразовательных организаций</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue">Методические рекомендации(социальный педагог, педагог-психолог) <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    @foreach($method_rec as $rec)
                        <li class="center_block__text">
                            <a href="{!!doc_trim($rec->content)!!}" target="_blank">
                                {{$rec->title}}
                            </a>
                        </li>
                    @endforeach
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1BAiaWYthM7D50YVI6n5OX6Oc8dXArvsz/view?usp=sharing">Методические рекомендации для классных руководителей</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1pZzgBzS0q9ltTI3HoSOA_hnEh2OK6bkT/view?usp=sharing">Психологическое сопровождение образовательного процесса в основной школе</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1nFfnzpMunFCobtkvkRKTmsczpTgnUNz9/view?usp=sharing">Организация обучения первоклассников в адаптапционный период</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1gAOzAl2pLsUu0jLoibfRwW3DG9dsJuPX/view?usp=sharing">Методические рекомендации по проведению адаптационного периода в 1-м классе в условиях реализации стандартов 2-го поколения</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1KKn4nbR0t-tiLmHScxVkM8ZLM9CRaTwY/view?usp=sharing">Методические рекомендации по подготовке к ГИА</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/12VWngd82nAmW-IBZG5bjjJY8SUvw4851/view?usp=sharing">Методические рекомендации для участников образовательных отношений по психолого-педагогическому сопровождению перехода на дистанционное обучение</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1F3b-qIdVyFWAepAPRSO3OM8o1XWLpFbO/view?usp=sharing">Методические рекомендации для осуществления психолого-педагогического сопровождения учебного процесса в условиях реализации ФГОС в 1-м классе</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1cAow2YAr592DdN3N-enkVsn4jNdII_ET/view?usp=sharing">Методические рекомендации для организации образовательного процесса после проведения адаптационного периода в 1-м классе</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1Sw5gIbEOfcffuU-xSUEoa0n0V3n8Kyxe/view?usp=sharing">Методические рекомендации «Профилактика употребления психоактивных веществ»</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1Ib06fRkOQUpXuI5sSr9pmK5Jgu662JYl/view?usp=sharing">Методические рекомендации "Психологическое сопровождение образовательного процесса в основной школе"</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1xkXVOOHFBsq4hGxlVSGABN0HXym-XuUZ/view?usp=sharing">Методические рекомендации "Организация психолого-педагогического сопровождения детей и подростков из замещающих семей специалистами образовательных организаций"</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1EJE_0tYX4z-PhZn0cdBY58DT3ZlYZ0Pd/view?usp=sharing">Этический и профессиональный кодекс (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/18W2IrhHI2ebtIlkyj838jirj6Hhzb-R6/view?usp=sharing">Социальный паспорт учащегося (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1qMTEOqa0OaZL_smsiCw1AGkY61yaHdIr/view?usp=sharing">Примерный перечень документации социального педагога образовательного учреждения (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1D2QOdVMB3d-NNUZg7eT8bziy6N6Q3xRx/view?usp=sharing">ПМПК рекомендации МОНРФ (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/16IhgpyjIiAwpFNNo8esCi8bVHRDq-aP1/view?usp=sharing">Номенклатура дел социального педагога (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1nsPHxJ2yjBP3AhWa49FCVk_c1EFJy8gI/view?usp=sharing">Методические рекомендации по составлению годового аналитического и статистического отчета социального педагога образовательного учреждения (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/16wtISd6sH2bSPzbxhSsPhRHKF_qbmMCg/view?usp=sharing">Метод конгруэнтной коммуникации (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1-P_x7IyL1l5Fp8IvjtkwFhJXeM8S6VhT/view?usp=sharing">Годовая циклограмма деятельности социального педагога (для социального педагога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/17KwT805wBf6F21JtW6RWC7SIDt_NPany/view?usp=sharing">Этический кодекс педагога-психолога (для педагога-психолога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1jG-4T0udVwzYVepar2iZZ5em_-ncuXKd/view?usp=sharing">Трудовые права педагога-психолога (для педагога-психолога)</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1vsPTpXf1RoZNP9ePMN3p_5jQbKk3kmXO/view?usp=sharing">Должностная инструкция педагога-психолога (для педагога-психолога)</a></li>
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
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1SpoypyLIaazSaL2SYc9aBObH9AvqjrMs/view?usp=sharing">Положение о центре </a></li>
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
