<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Istok+Web&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sass/common.css">
    <link rel="stylesheet" href="css/sass/main.css">
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
                <a href="index.html"><img src="img/logo.png" alt="Логотип ЧИПКРО"></a>
                <!-- <p class="logo__text">Чеченский институт повышения квалификации работников образования</p> -->
            </div>
            <button type="button" class="menu_btn" id="menu_btn">
                <span></span>
            </button>
            <nav class="main_nav">
                <ul class="main_nav__items">
                    <li class="main_nav__item main_nav__item--parent"><a href="templates/institiute/general_information.html" class="not_for_hover">Институт <i class="fas fa-caret-down"></i></a>
                        <ul class="main_nav_submenu">
                            <li class="main_nav_submenu__item"><a href="templates/institiute//general_information.html">Общие сведения</a></li>
                            <li class="main_nav_submenu__item"><a href="templates/institiute/history.html">История института</a></li>
                            <li class="main_nav_submenu__item"><a href="templates/institiute//general_information.html">Сведения об образовательной организации</a></li>
                            <li class="main_nav_submenu__item"><a href="templates/institiute/centers.html">Центры</a></li>
                            <li class="main_nav_submenu__item"><a href="templates/institiute/council.html">Учёный совет</a></li>
                            <li class="main_nav_submenu__item"><a href="templates/institiute/trade_union.html">Профсоюзная страничка</a></li>
                        </ul>
                    </li>
                    <li class="main_nav__item"><a href="templates/news.html">Новости</a></li>
                    <li class="main_nav__item"><a href="templates/webinars.html">Вебинары</a></li>
                    <li class="main_nav__item"><a href="#">Мониторинг</a></li>
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
