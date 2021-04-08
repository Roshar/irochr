@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">

        <h1>Руководство. Педагогический (научно-педагогический) состав</h1>
        <div class="info structure">
            <div class="info__block">
                <h2 class="info__heading">Руководство образовательной организации</h2>
                <div class="table_section">
                    <table class="table table--structure structure__table">
                        <tr class="tr--head">
                            <th>ФИО</th>
                            <th>Должность</th>
                            <th>Контактный телефон</th>
                            <th>Адрес электронной почты</th>
                        </tr>
                        <tr>
                            <td data-label="ФИО">Эльмурзаева Ганга Бекхановна</td>
                            <td data-label="Должность">Ректор</td>
                            <td data-label="Контактный телефон">+7 (8712) 21-22-24</td>
                            <td data-label="Адрес эл.почты">ganga18@mail.ru</td>
                        </tr>
                        <tr>
                            <td>Исламова Малика Исаевна</td>
                            <td>Первый проректор</td>
                            <td>+7 (928) 745-91-16</td>
                            <td>malika_islamova@inbox.ru</td>
                        </tr>
                        <tr>
                            <td>Дурдиева Жамиля Ахмедовна</td>
                            <td>Главный бухгалтер</td>
                            <td>+7 (928) 898-47-37</td>
                            <td>durdieva67@mail.ru</td>
                        </tr>
                        <tr>
                            <td>Салатаева Разет Салмановна</td>
                            <td>Проректор по УМР</td>
                            <td>+7(928) 736-47-09</td>
                            <td>razet1955@mail.ru</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="info__block">
                <h2 class="info__heading">Руководство филиалов образовательной организации</h2>
                <p>У образовательной организации филиалов нет.</p>
            </div>
            <div class="info__block">
                <h2 class="info__heading">Список педагогических работников ГБУ ДПО ИРО ЧР</h2>
                <a href="https://drive.google.com/file/d/1mg0xbWMadXfzivKHzbih8PeuCS3buNdJ/view?usp=sharing" target="_blank" class="icon icon--file"><i class="fas fa-file"></i>&nbsp;&nbsp;Открыть файл</a>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
