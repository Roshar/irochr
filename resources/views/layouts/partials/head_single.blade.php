<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/front/img/logo.png')}}" type="image/png">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Istok+Web&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/front/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/sass/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/sass/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{--    <link rel="stylesheet" href="/test2/example-app/resources/css/">--}}
    <title> @yield('title') </title>

    <meta name="keywords" content="ЧИПКРО, институт, дополнительное образование, курсы, Чечня, кафедра, школа, учителя, форум, фгос, вебинары, семинары, итоги, министерство, Чеченская Республика, ГПРО, повышение квалификации">
    <meta name="description" content="Институт развития образования Чеченской Республики">

    <script src="https://kit.fontawesome.com/1f3a4be6e9.js" crossorigin="anonymous"></script>
    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}

        .pagination a.active{
            background-color: #285299;
        }
    </style>
</head>
<body>
<section style="padding: .3em; background:tomato; color: #FFF; text-align: center; position: fixed; top: 0; right: 0; left: 0; z-index: 1000; max-width: 100vw;">Уважаемые пользователи! Сайт находится в стадии разработки. Приносим свои извинения за временные неудобства.</section>
<header>
    <div class="container container--header">
        <div class="row row--header">
            <div class="logo">
                <a href="/"><img src="{{asset('assets/front/img/logo.png')}}" alt="Логотип ЧИПКРО"></a>
                <p class="logo__text">Институт развития образования<br>Чеченской Республики</p>
            </div>
            <button type="button" class="menu_btn" id="menu_btn">
                <span></span>
            </button>
            <nav class="main_nav">
                <ul class="main_nav__items">
                    <li class="main_nav__item main_nav__item--parent"><a href="#" class="not_for_hover">Институт <i class="fas fa-caret-down"></i></a>
                        <ul class="main_nav_submenu">
                            <li class="main_nav_submenu__item"><a href="{{route('institute.index')}}">Общие сведения</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('institute.history')}}">История</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('institute.structure')}}">Сведения об образовательной организации</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('center.index')}}">Центры</a></li>
                            <li class="main_nav_submenu__item"><a href="http://cnppmpr.ru/">Центр непрерывного повышения профессионального мастерства</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('institute.academic_council')}}">Учёный совет</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('institute.trade_union')}}">Профсоюзная страничка</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('article',['slug' => 'regionalnaya-sistema-ocenki-kachestva-obrazovaniya'])}}">Региональная система оценки качества образования</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('article',['slug' => 'centr-podderzhki-distancionnogo-obucheniya'])}}">Центр поддержки дистанционного обучения</a></li>
                            <li class="main_nav_submenu__item"><a href="https://drive.google.com/drive/folders/1ayK0Isamg4vhqVl8BLVvkl00JBTB48os?usp=sharing" target="_blank">Учебно-методический отдел</a></li>
                        </ul>
                    </li>
                    <li class="main_nav__item main_nav__item--parent"><a href="#" class="not_for_hover">Мероприятия <i class="fas fa-caret-down"></i></a>
                        <ul class="main_nav_submenu">
                            <li class="main_nav_submenu__item"><a href="{{route('news_list')}}">Новости</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('seminars_conference')}}">Семинары и конференции</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('contest')}}">Конкурсы</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('video_content.index')}}">Вебинары</a></li>
                        </ul>
                    </li>
                    <li class="main_nav__item main_nav__item--parent"><a href="#" class="not_for_hover">Проекты <i class="fas fa-caret-down"></i></a>
                        <ul class="main_nav_submenu">
                            <li class="main_nav_submenu__item"><a href="{{route('modern_school')}}">ФП "Современная школа"</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('gpro')}}">ГПРО/ФЦПРО</a></li>
                            <li class="main_nav_submenu__item"><a href="https://drive.google.com/drive/folders/1b6IKu0TvnvYidibTBDQTcOfK5b-c1VmQ?usp=sharing" target="_blank">Проект "Я сдам профильную математику"</a></li>
                            <li class="main_nav_submenu__item"><a href="https://drive.google.com/drive/folders/1ega2DBElofJNez2I-g5_xnoHWxjv-AbK?usp=sharing" target="_blank">Проект "Будущее ЧР"</a></li>
                            <li class="main_nav_submenu__item"><a href="https://drive.google.com/drive/folders/1Yu0xhadty1Z5OxTrkXhh96oZFsx4W0gG?usp=sharing" target="_blank">Проект "РЭШ"</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('cos')}}">Проект ЦОС ДПО</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('srm')}}">«Совершенствование республиканской модели повышения квалификации управленческих и педагогических кадров по вопросам изучения русского и чеченского языков»</a></li>

                        </ul>
                    </li>
                    <li class="main_nav__item main_nav__item--parent"><a href="#" class="not_for_hover">Деятельность <i class="fas fa-caret-down"></i></a>
                        <ul class="main_nav_submenu">
                            <li class="main_nav_submenu__item"><a href="https://drive.google.com/drive/folders/1juUPMy6s49hsePja9bG6-djbqd58Fgl4?usp=sharing" target="_blank">Воспитательная деятельность в сфере образования</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('rumo')}}">Республиканское учебно-методическое объединение в системе общего образования ЧР</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('monitoring')}}">Мониторинг</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('pub_report')}}">Публичный доклад</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('plan')}}">План деятельности</a></li>
                            <li class="main_nav_submenu__item"><a href="{{route('approbation')}}">Апробация обновленных ФГОС НОО, ООО</a></li>
                        </ul>
                    </li>
                    <li class="main_nav__item main_nav__item--parent"><a href="#" class="not_for_hover">Полезное <i class="fas fa-caret-down"></i></a>
                        <ul class="main_nav_submenu">
                            <li class="main_nav_submenu__item"><a href="{{route('useful_links')}}">Полезные ссылки</a></li>
                        </ul>
                    </li>
                    <li class="main_nav__item search">
                        <form method="GET" action="" class="search_form">
                            <input type="search" class="search__field" placeholder="Поиск...">
                            <button class="search__button">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
