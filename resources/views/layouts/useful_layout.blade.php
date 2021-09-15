@include('layouts.partials.head_single')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="/"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item"><a href="{{route('useful_links')}}">Полезные</a></li>
            {{--            <li class="breadcrumbs_nav__item">{{$title}}</li>--}}
        </ul>
    </nav>
    <div class="row row--ne">
        <aside class="sidebar">
            <nav class="sidebar_menu">
                <ul class="sidebar_menu__items">

                    <li class="sidebar_menu__item sidebar_menu__item--parent sidebar_menu__item">
                        <a href="#">Полезное</a>
                        <button type="button"><i class="fas fa-caret-down"></i></button>
                        <ul class="sidebar_submenu sidebar_submenu--active">
                            <li class="sidebar_submenu__item"><a href="{{route('useful_links')}}" >Полезные ссылки</a></li>
                            </li>
                        </ul>
            </nav>
        </aside>
        @yield('content')
    </div>
</div>



@include('layouts.partials.footer_main');
