@extends('layouts.monitoring_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        {{--        <h1>{{$category->title}}</h1>--}}
        <div class="center_wrapper">
            <h2>Мониторинг</h2>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мониторинг 2021 <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/drive/folders/1c9wRIBdph1Poo2EhoI-u8bGHFTPn5-NU?usp=sharing" target="_blank">Мониторинг оценки качества кадрового состава ММС</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мониторинг 2020 <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1LXcCpckn8TopPkwC8KSQAyVhiklQfC-6/view?usp=sharing" target="_blank">Аналитический отчет по итогам мониторинга эффективности деятельности профессиональных педагогических объединений (учебно-методических объединений) </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1XZ38EWFjWocRELHOrH4xj4JgkO9-8Kl2/view?usp=sharing" target="_blank">Аналитический отчет по итогам мониторинга реализации предметных концепций</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мониторинг 2019 <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1gg9FYsiQAgl49GtONddOBBTQ9gkxPLA5/view?usp=sharing" target="_blank">Мониторинг учителей начальных классов Веденского района</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/16lg5LJWsQGiZ-Q7gn5N0Js0JspR9mfpU/view?usp=sharing" target="_blank">Мониторинговое  исследование реализации Концепции преподавания русского языка, литературного чтения и литературы</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1_HnYT08kTIyOp5-wHX4qrmDi9NGI8n7H/view?usp=sharing" target="_blank">Мониторинговое  исследование реализации Концепции развития математического образования</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1UivTwb2HTgNOzo_ziq9bzXQZhWL2KDvm/view?usp=sharing" target="_blank">Мониторинговое  исследование реализации межпредметных технологий на уроках учителей, прошедших  курсы повышения квалификации в рамках ГПРО</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1krjpj0J9iMOsI3pvhdNKMpR4HjtMNpdg/view?usp=sharing" target="_blank">Анализы мониторингов</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1IEMcWlVPHlwnteWrp8dM3cKZ_WTB4RcS/view?usp=sharing" target="_blank">Мониторинг профориентации 9 кл. </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1CgAn91oVUHdoS5L5H7IOkE9zy-Bbk8_P/view?usp=sharing" target="_blank">Общие результаты по ЧР-диагностика учителей НОО от 2 марта 2019</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мониторинг 2018 <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/174_6y-0E9sMwPL4sHpJMOA5J3wzezftp/view?usp=sharing" target="_blank">Мониторинг ОРКСЭ с 08.12 - 22.12.2018 </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1L903LP4YqI4qCmam0k8b0qyuI65mhGz5/view?usp=sharing" target="_blank">Анализ результатов пробного ЕГЭ по математике профильного уровня </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1J990q0Ckfle_5sTL8XAUFS0eCqqHhSar/view?usp=sharing" target="_blank">Анализ результатов диагностики учебных достижений обучающихся 2-4 классов </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/180ZAqYbo-ZKZJd2SBRLCbUUs1LT7UGA9/view?usp=sharing" target="_blank">ВПР-2018 по математике и русскому языку в 4 классах </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1imPjKQM0PTKlCiOLu5Mtx0zDwb5-NI6O/view?usp=sharing" target="_blank">Сравнительный анализ ВПР по математике в 4-х и 5-х классах </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/159F9aQdDRY1Drfch7MNxhnTySwopaA3a/view?usp=sharing" target="_blank">Удовлетворенность слушателей курсов повышения квалификации</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1NOl551tB-A29d64RTciAeyo2B3-SCow3/view?usp=sharing" target="_blank">Мониторинг качества курсов повышения квалификации</a></li>
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Мониторинг 2017 <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1jNmMHUozLFTMvg8Ts8yDzZ1ZM1neyuXS/view?usp=sharing" target="_blank">Мониторинг предметной компетентности учителей выпускных классов</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1jmzrSG8eRcNlUu6GB2uWvZWxDj8xtRqh/view?usp=sharing" target="_blank">Анализ итогов тестирования учащихся 11 и 9 классов МБОУ «Курчалоевская СШ№2»</a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1UVpYrRd36OOAMXpV9OfKD6Drvr3mQyO_/view?usp=sharing" target="_blank">Мониторинг реализации проектов «Я сдам ЕГЭ!», «За честный ОГЭ» и «Будущее ЧР» в ОУ ЧР 2017 год </a></li>
                    <li class="center_block__text"><a href="https://drive.google.com/file/d/1NCa9ofKx9kgOU0Pm4fAvg3g0Zda3ni-E/view?usp=sharing" target="_blank">Мониторинговые исследования образовательного процесса в ОУ ЧР в 2017г. </a></li>
                </ul>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
