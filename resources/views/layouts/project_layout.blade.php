@include('layouts.partials.head_single')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="/"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item"><a href="{{route('project.index')}}">Проекты</a></li>
            <li class="breadcrumbs_nav__item">{{$title}}</li>
        </ul>
    </nav>
    <div class="row row--ne">
        <aside class="sidebar">
            <nav class="sidebar_menu">
                <ul class="sidebar_menu__items">

                    <li class="sidebar_menu__item sidebar_menu__item--parent sidebar_menu__item">
                        <a href="centers.html">Проекты</a>
                        <button type="button"><i class="fas fa-caret-down"></i></button>
                        <ul class="sidebar_submenu sidebar_submenu--active">
                            <li class="sidebar_submenu__item"><a href="{{route('modern_school')}}">ФП "Современная школа"</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('gpro')}}">ГПРО/ФЦПРО</a></li>
                            <li class="sidebar_submenu__item"><a href="https://drive.google.com/drive/folders/1b6IKu0TvnvYidibTBDQTcOfK5b-c1VmQ?usp=sharing" target="_blank" >Проект "Я сдам профильную математику"</a></li>
                            <li class="sidebar_submenu__item"><a href="https://drive.google.com/drive/folders/1ega2DBElofJNez2I-g5_xnoHWxjv-AbK?usp=sharing" target="_blank">Проект "Будущее ЧР"</a></li>
                            <li class="sidebar_submenu__item"><a href="https://drive.google.com/drive/folders/1Yu0xhadty1Z5OxTrkXhh96oZFsx4W0gG?usp=sharing" target="_blank">Проект "РЭШ"</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('cos')}}">Проект ЦОС ДПО</a></li>
                            <li class="sidebar_submenu__item"><a href="{{route('srm')}}">«Совершенствование республиканской модели повышения квалификации управленческих и педагогических кадров по вопросам изучения русского и чеченского языков»</a></li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        @yield('content')
    </div>
</div>



@include('layouts.partials.footer_main');
