@extends('layouts.institute_layout')
@section('title', $title)
@section('content')
<main class="with_aside center_template">

    <h1>Профсоюзная страничка</h1>
    <div class="info trade_union">
        <div class="info__block">
            <img src="{{asset('assets/front/img/trade_union.png')}}" alt="">
            <p class="align-center">У К А З <a href="https://drive.google.com/file/d/1gJI__TfEWKKTvDlovVAowSjWQ81IwiVR/view?usp=sharing">(скачать)</a>
                ПРЕЗИДЕНТА ЧЕЧЕНСКОЙ РЕСПУБЛИКИ <br>
                от 28.04.2008 г. г. Грозный № 163 <br>
                О взаимодействии органов государственной власти Чеченской Республики, администрации
                районов, городов чеченской республики и  работодателей с профессиональными союзами и
                их объединениями</p>
        </div>
        <div class="info__block">
            <p><a href="https://docs.google.com/document/d/1bmIkgLFPSXTEBzeZmOY88JUuiQ5piZTj/edit?usp=sharing&ouid=103470700133688287880&rtpof=true&sd=true" class="uppercase">Положение</a> о Некоммерческом профсоюзном Фонде социальной поддержки учителей Чеченской республиканской организации Общероссийского Профсоюза образования</p>
            <p><a href="https://docs.google.com/document/d/1HRN8sn9-P8xf3foNpgiHka1LF50YP7o7/edit?usp=sharing&ouid=103470700133688287880&rtpof=true&sd=true" class="uppercase">Положение</a> о первичной организации Профсоюза работников народного образования и науки Российской Федерации</p>
            <p><a href="https://docs.google.com/document/d/1RLSxggdbPtIb4Uv-eIY5Jb2VdNxCmGmE/edit?usp=sharing&ouid=103470700133688287880&rtpof=true&sd=true" class="uppercase">Положение</a> о представителе Чеченской организации Профсоюза работников народного образования и науки РФ в районной (городской) организации Профсоюза</p>
            <p><a href="https://docs.google.com/document/d/1jqVM2zHineSMOCWG0kkQw4c7OK8zw5f-/edit?usp=sharing&ouid=103470700133688287880&rtpof=true&sd=true" class="uppercase">Положение</a> о районном (городском) совете председателей первичных профсоюзных организаций образовательных учреждений Чеченской Республики</p>
            <p><a href="https://docs.google.com/document/d/1U2FcjVNNLN32xAE0hCGCy3KmbOw1hRqg/edit?usp=sharing&ouid=103470700133688287880&rtpof=true&sd=true" class="uppercase">Положение</a> o Чеченской Республиканской организации профсоюза работников народного образования и науки Российской Федерации</p>
        </div>
        <div class="info__block">
            <h2 class="info__heading">Члены первичной профсоюзной организации ГБУ&nbsp;ДПО&nbsp;ИРО ЧР</h2>
            <div class="table_section">
                <table class="table table--structure structure__table">
                    <tr class="tr--head">
                        <th>№</th>
                        <th>ФИО</th>
                        <th>Должность</th>
                        <th>Контактный телефон</th>
                    </tr>
                    <tr>
                        <td data-label="№">1</td>
                        <td data-label="ФИО">Атаева Саша Умаруловна</td>
                        <td data-label="Должность">старший преподаватель кафедры математики и информатики</td>
                        <td data-label="Контактный телефон">8928 782-66-17</td>
                    </tr>
                    <tr>
                        <td data-label="№">2</td>
                        <td data-label="ФИО">Медаева Хава Лемиевна</td>
                        <td data-label="Должность">старший преподаватель</td>
                        <td data-label="Контактный телефон">8928 479-90-55</td>
                    </tr>
                    <tr>
                        <td data-label="№">3</td>
                        <td data-label="ФИО">Успаева Галина Вахиевна</td>
                        <td data-label="Должность">старший преподаватель</td>
                        <td data-label="Контактный телефон">8928 001-73-25</td>
                    </tr>
                    <tr>
                        <td data-label="№">4</td>
                        <td data-label="ФИО">Сулейманова Малика Юнусовна</td>
                        <td data-label="Должность">начальник отдела кадров</td>
                        <td data-label="Контактный телефон">8928 023-71-00</td>
                    </tr>
                    <tr>
                        <td data-label="№">5</td>
                        <td data-label="ФИО">Дурдиева Жамиля Ахмедовна</td>
                        <td data-label="Должность">главный бухгалтер</td>
                        <td data-label="Контактный телефон">8928 782-66-17</td>
                    </tr>
                    <tr>
                        <td data-label="№">6</td>
                        <td data-label="ФИО">Яударова Наталья Юрьевна</td>
                        <td data-label="Должность">старший преподаватель</td>
                        <td data-label="Контактный телефон">8963 708-35-55</td>
                    </tr>
                    <tr>
                        <td data-label="№">7</td>
                        <td data-label="ФИО">Мочигова Тумиша Раисовна</td>
                        <td data-label="Должность"></td>
                        <td data-label="Контактный телефон">8928 738-47-79</td>
                    </tr>
                    <tr>
                        <td data-label="№">8</td>
                        <td data-label="ФИО">Газиев Эмир Бекханович</td>
                        <td data-label="Должность"></td>
                        <td data-label="Контактный телефон"></td>
                    </tr>
                    <tr>
                        <td data-label="№">9</td>
                        <td data-label="ФИО">Исаев Кюра Шамсудинович</td>
                        <td data-label="Должность"></td>
                        <td data-label="Контактный телефон"></td>
                    </tr>
                </table>
            </div>
        </div>

        {{--<div class="info__block">
            <h2 class="info__heading">Общее собрание работников</h2>
            <a href="../../doc/info/Положение об общем собрании работников.pdf">Положение об общем собрании работников</a>
        </div>
        <div class="info__block">
            <h2 class="info__heading">Учёный совет</h2>
            <a href="../../doc/info/Положение об общем собрании работников.pdf">Положение об Учёном совете</a>
        </div>
        <div class="info__block">
            <h2 class="info__heading">Устав</h2>
            <a href="../../doc/info/Устав 2019.pdf">Устав</a>
        </div>--}}
    </div>
    <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
</main>
@endsection
