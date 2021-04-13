@extends('layouts.video_content_layout')

@section('title', $title)

@section('content')

<main class="with_aside">

    <h1>{{$title}}</h1>
    <div class="videos">
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/TKOhGi-iCyU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Авторизация и регистрация на КПК в MOODLE</h2>
                <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
            </div>
        </div>
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/G-fFEPa010E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Основные типы заданий в СДО Moodle</h2>
                <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
            </div>
        </div>
    </div>
    <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
</main>
<script type="text/javascript">

    let arrowDown = document.querySelectorAll('.arrow_down');

    arrowDown.forEach(arrow => {
        arrow.addEventListener('click', event => {

            let list = event.currentTarget.parentElement.nextElementSibling;
            let heading = event.currentTarget.parentElement;
            let icon = event.currentTarget.firstElementChild;

            list.classList.toggle('center__list--not_active');
            if (!list.classList.contains('center__list--not_active')) {
                list.style.height = `${ list.scrollHeight / 16 + 1.8 }em`
            } else {
                list.style.height = `${ list.scrollHeight / 16 }em`;
                window.getComputedStyle(list, null).getPropertyValue("height");
                list.style.height = "0";
            }

            if(heading.classList.contains('center_block__heading--blue')){
                heading.classList.toggle('center_block__heading--no_margin')
            }

            if (list.classList.contains('center__list--not_active')){
                icon.classList = 'fas fa-arrow-circle-down';
            } else {
                icon.classList = 'fas fa-arrow-circle-up';
            }
        })
    })
</script>
@endsection
