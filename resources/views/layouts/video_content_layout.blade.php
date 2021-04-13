@include('layouts.partials.head_single')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item">{{$title}}</li>
        </ul>
    </nav>
    <div class="row row--ne row--webinars">
        <aside class="sidebar">
            <nav class="sidebar_menu">
                <ul class="sidebar_menu__items">
                    <li class="sidebar_menu__item sidebar_menu__item--parent">
                        <a href="{{route('video_content.index')}}">Видеоматериалы</a>
                        <button type="button"><i class="fas fa-caret-down"></i></button>
                        <ul class="sidebar_submenu sidebar_submenu--active">
                            <li class="sidebar_submenu__item"><a href="{{route('video_content.index')}}">Вебинары и live-трансляции</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('video_content.instruction_student')}}">Инструкции для слушателей ИРО ЧР (дистанционное обучение)</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('video_content.instruction_teacher')}}">Видеокурс для преподавателей ИРО ЧР</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('video_content.master_class')}}">Мастер-классы</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('video_content.smi')}}">СМИ</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        @yield('content')
    </div>
</div>



@include('layouts.partials.footer_main');
