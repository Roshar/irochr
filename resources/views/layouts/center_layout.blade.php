@include('layouts.partials.head_single')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="/"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item"><a href="{{route('center.index')}}">Центры</a></li>
            <li class="breadcrumbs_nav__item">{{$title}}</li>
        </ul>
    </nav>
    <div class="row row--ne">
        <aside class="sidebar">
            <nav class="sidebar_menu">
                <ul class="sidebar_menu__items">
                    <li class="sidebar_menu__item">
                        <a href="{{route('institute.education')}}">Программы повышения квалификации</a>
                    </li>
                    <li class="sidebar_menu__item sidebar_menu__item--parent sidebar_menu__item">
                        <a href="centers.html">Центры</a>
                        <button type="button"><i class="fas fa-caret-down"></i></button>
                        <ul class="sidebar_submenu">
                            <li class="sidebar_submenu__item"><a href="{{route('center.ric')}}">Редакционно-издательский центр</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cito')}}">Центр информационно-технического обеспечения</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cgia')}}">Центр по сопровождению ГИА</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cio')}}">Центр инклюзивного образования</a></li>

                            <li class="sidebar_submenu__item"><a href="{{route('center.cmi')}}">Центр математики и информатики</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.ced')}}">Центр ественнонаучных дисциплин </a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cod')}}">Центр общественно-научных дисциплин</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cm')}}">Центр менеджмента в системе общего и профессионального образования</a></li>

                            <li class="sidebar_submenu__item"><a href="{{route('center.cno')}}">Центр начального образования</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cvps')}}">Центр воспитания и психолого-педагогического сопровождения образовательной деятельности</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cfo')}}">Центр филологического образования</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('center.cofc')}}">Центр ОБЖ и физической культуры</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        @yield('content')
    </div>
</div>



@include('layouts.partials.footer_main');
