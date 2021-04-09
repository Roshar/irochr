@include('layouts.partials.head_single')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="/"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item"><a href="{{route('institute.index')}}">Сведения об образовательной организации</a></li>
            <li class="breadcrumbs_nav__item">{{$title}}</li>
        </ul>
    </nav>
    <div class="row row--ne">
        <aside class="sidebar">
            <nav class="sidebar_menu">
                <ul class="sidebar_menu__items">
                    <li class="sidebar_menu__item"><a href="{{route('institute.index')}}">Основные сведения</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.history')}}">История</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.structure')}}">Структура и органы управления образовательной организации</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.document')}}">Документы</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.education')}}">Образование</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.educational_standards')}}">Образовательные стандарты</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.leadership')}}">Руководство. Педагогический (научно-педагогический) состав</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.mts')}}">Материально-техническое обеспечение и оснащённость образовательного процесса</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.scholarships')}}">Стипендии и иные виды материальной поддержки</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.paid_educational_services')}}">Платные образовательные услуги</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.financial')}}">Финансово-хозяйственная деятельность</a></li>
                    <li class="sidebar_menu__item"><a href="{{route('institute.vacancies')}}">Вакантные места для приема (перевода)</a></li>
                </ul>
            </nav>
        </aside>
@yield('content')
    </div>
</div>



@include('layouts.partials.footer_main');
