
@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">

        <h1>Структура и органы управления образовательной организации</h1>
        <div class="info structure">
            <div class="info__block">
                <h2 class="info__heading">Структура ИРО ЧР</h2>
                <img src="{{asset('assets/front/img/structure.jpeg')}}" alt="">
            </div>

            <div class="info__block">
                <h2 class="info__heading">Информация о структурных подразделениях</h2>
                <div class="table_section">
                    <table class="table table--structure structure__table">
                        <tr class="tr--head">
                            <th>ФИО</th>
                            <th>Должность</th>
                            <th>Контактный телефон</th>
                            <th>Адрес электронной почты</th>
                        </tr>
                        <tr class="tr--head">
                            <th colspan="4">Ректорат</th>
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
                            <td>Эльмурзаева Румиса Абуязитовна</td>
                            <td>Проректор по НМР</td>
                            <td>+7 (928) 475-82-54</td>
                            <td>rumisaelmurzaeva@mail.ru</td>
                        </tr>
                        <tr>
                            <td>Успаева Галина Вахиевна</td>
                            <td>Проректор по управлению проектами</td>
                            <td>+7 (928) 021-88-13</td>
                            <td>sara01@yandex.ru</td>
                        </tr>
                        <tr>
                            <td>Анзорова Айшат Умаровна</td>
                            <td>Проректор по УМР</td>
                            <td>+7 (989) 926-92-79	</td>
                            <td>anzorova.85@mail.ru</td>
                        </tr>
                        <tr>
                            <td>Чимаев Саид-Селим Ярагиевич</td>
                            <td>Проректор по АХЧ</td>
                            <td>+7 (906) 025-77-77</td>
                            <td>amin_2004@mail.ru</td>
                        </tr>
                        <tr>
                            <td>Дурдиева Жамиля Ахмедовна</td>
                            <td>Главный бухгалтер</td>
                            <td>+7 (928) 898-47-37</td>
                            <td>durdieva67@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th colspan="4">Центры</th>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр филологического образования</th>
                        </tr>
                        <tr>
                            <td>Этиева Имана Эдуевна</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (928) 735-97-17</td>
                            <td>imana.etieva@bk.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр математики и информатики</th>
                        </tr>
                        <tr>
                            <td>Атаева Саша Умаруловна</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (928) 782-66-17</td>
                            <td>miss.ataewa@yandex.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр начального образования</th>
                        </tr>
                        <tr>
                            <td>Батаева Малика Башильевна</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (928) 781-90-94</td>
                            <td>malika_bashirovna@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр естественнонаучных дисциплин</th>
                        </tr>
                        <tr>
                            <td>Даудова Лайла Идрисовна</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (929) 890-47-90</td>
                            <td>layla.daudova.80@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр общественно-научных дисциплин</th>
                        </tr>
                        <tr>
                            <td>Горчханова Елизавета Султановна</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (928)786-70-09</td>
                            <td>egorchhanova@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр воспитания и психолого-педагогического сопровождения образовательной деятельности</th>
                        </tr>
                        <tr>
                            <td>Яударова Малика Юрьевна</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (963) 708-35-55</td>
                            <td>yamalika95@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр менеджмента в системе общего и профессионального образования</th>
                        </tr>
                        <tr>
                            <td>Муцаев Иса Рамазанович</td>
                            <td>Руководитель центра</td>
                            <td>+7 (928) 531-32-37</td>
                            <td>kuochipkro@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр ОБЖ и физической культуры</th>
                        </tr>
                        <tr>
                            <td>Хамзатов Джунид Саламувич</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (963) 596-24-46 </td>
                            <td></td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр ОБЖ и физической культуры</th>
                        </tr>
                        <tr>
                            <td>Хамзатов Джунид Саламувич</td>
                            <td>Старший преподаватель</td>
                            <td>+7 (963) 596-24-46 </td>
                            <td></td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Редакционно-издательский центр</th>
                        </tr>
                        <tr>
                            <td>Караев Руслан Зубаирович</td>
                            <td>Главный редактор</td>
                            <td>+7 (963) 599-44-66</td>
                            <td>rus269@yandex.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр информационно-технического обеспечения</th>
                        </tr>
                        <tr>
                            <td>Батукаев Рашид Эдуардович</td>
                            <td>заведующий</td>
                            <td>+7 (999) 144-07-88</td>
                            <td>rashid.batukaev@gmail.com <br>webrush@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр по сопровождению ГИА</th>
                        </tr>
                        <tr>
                            <td>Успаева Галина Вахиевна</td>
                            <td>старший преподаватель центра</td>
                            <td>+7 (928) 021-88-13</td>
                            <td>sara01@yandex.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр инклюзивного образования</th>
                        </tr>
                        <tr>
                            <td>Теучеж Нуриет Юнусовна</td>
                            <td>старший преподаватель центра</td>
                            <td>+7(964) 060-74-13</td>
                            <td>nuretnuret27@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр сопровождения проектов (программ) в сфере образования</th>
                        </tr>
                        <tr>
                            <td>Салатаева Разет Салмановна</td>
                            <td>заведующий</td>
                            <td>+7(928) 736-47-09</td>
                            <td>razet1955@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Центр сопровождения проектов (программ) в сфере образования</th>
                        </tr>
                        <tr>
                            <td>Лабазанов Муса</td>
                            <td>заведующий</td>
                            <td>+7(928) 953-89-48</td>
                            <td>allegro2011@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="structure__th" colspan="4">Отделы</th>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Отдел кадров</th>
                        </tr>
                        <tr>
                            <td>Сулейманова Малика Юнусовна</td>
                            <td>Начальник отдела</td>
                            <td>+7(928) 023-71-00</td>
                            <td>malika33@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Учебно-методический отдел</th>
                        </tr>
                        <tr>
                            <td>Мочигова Тумиша Раисовна</td>
                            <td>Заведующий</td>
                            <td>+7(928) 738-47-79</td>
                            <td>mochigova55@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Канцелярия</th>
                        </tr>
                        <tr>
                            <td>Газиев Эмир Бекханович</td>
                            <td>Руководитель канцелярии</td>
                            <td>+7(928) 738-47-79</td>
                            <td>mochigova55@mail.ru</td>
                        </tr>
                        <tr class="tr--head">
                            <th class="th--al" colspan="4">Хозяйственно-бытовой отдел</th>
                        </tr>
                        <tr>
                            <td>Чимаев Саид-Селим Ярагиевич	</td>
                            <td>Начальник отдела</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

{{--            <div class="info__block">--}}
{{--                <h2 class="info__heading">Общее собрание работников</h2>--}}
{{--                <a href=""></a>--}}
{{--            </div>--}}
            <h1> Документы </h1>
            <div class="info documents regulations">
                <ul class="documents__list">
                    @foreach($documents as $doc)
                        <li class="document">
                            <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                                <i class="far fa-file-alt" aria-hidden="true" ></i>
                                <p class="document_title">{{$doc->title}}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
