@include('layouts.partials.head_single')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="/"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item"><a href="{{route('monitoring')}}">Мониторинги</a></li>
            {{--            <li class="breadcrumbs_nav__item">{{$title}}</li>--}}
        </ul>
    </nav>
    <div class="row row--ne">
        <aside class="sidebar">
            <nav class="sidebar_menu">
                <ul class="sidebar_menu__items">

                    <li class="sidebar_menu__item sidebar_menu__item--parent sidebar_menu__item">
                        <a href="#">Деятельность</a>
                        <button type="button"><i class="fas fa-caret-down"></i></button>
                        <ul class="sidebar_submenu sidebar_submenu--active">
                            <li class="sidebar_submenu__item"><a href="https://drive.google.com/drive/folders/1juUPMy6s49hsePja9bG6-djbqd58Fgl4?usp=sharing" target="_blank">Воспитательная деятельность в сфере образования</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('rumo')}}">Республиканское учебно-методическое объединение в системе общего образования ЧР</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('monitoring')}}">Мониторинг</a></li>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        @yield('content')
    </div>
</div>



@include('layouts.partials.footer_main');
