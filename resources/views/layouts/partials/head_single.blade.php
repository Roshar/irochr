<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Istok+Web&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/front/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/sass/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/sass/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{--    <link rel="stylesheet" href="/test2/example-app/resources/css/">--}}
    <title> @yield('title') </title>

    <meta name="keywords" content="ЧИПКРО, институт, дополнительное образование, курсы, Чечня, кафедра, школа, учителя, форум, фгос, вебинары, семинары, итоги, министерство, Чеченская Республика, ГПРО, повышение квалификации">
    <meta name="description" content="Чеченский институт повышения квалификации работников образования">

    <script src="https://kit.fontawesome.com/1f3a4be6e9.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container container--header">
        <div class="row row--header">
            <div class="logo">
                <a href="/"><img src="{{asset('assets/front/img/logo.png')}}" alt="Логотип ЧИПКРО"></a>
                <!-- <p class="logo__text">Чеченский институт повышения квалификации работников образования</p> -->
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
                            <li class="main_nav_submenu__item"><a href="templates/institiute/council.html">Учёный совет</a></li>
                            <li class="main_nav_submenu__item"><a href="templates/institiute/trade_union.html">Профсоюзная страничка</a></li>
                        </ul>
                    </li>
                    <li class="main_nav__item"><a href="{{route('news_list')}}">Новости</a></li>
                    <li class="main_nav__item"><a href="{{route('video_content.index')}}">Вебинары</a></li>
                    <li class="main_nav__item"><a href="monitoring.html">Мониторинг</a></li>
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
