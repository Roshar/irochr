@extends('layouts.video_content_layout')

@section('title', $title)

@section('content')

    <main class="with_aside">

        <h1>{{$title}}</h1>
        <div class="videos">
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/amH8GQKzaU4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">Технология продуктивного чтения на уроках литературного чтения на чеченском языке в начальной школе</h2>
{{--                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>--}}
                    <p class="video_block__text video_block__text--gold">Мастер-класс «Технология продуктивного чтения на уроках литературного чтения на чеченском языке в начальной школе»</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/cW9TA5pbROw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">Урок литер. чтения по теме: А.П. Чехов. Рассказ «Мальчики». Герои рассказа. Поступки героев рассказа</h2>
{{--                    <p class="video_block__text video_block__text--blue"></p>--}}
                    <p class="video_block__text video_block__text--gold">Мастер-класс «Урок литературного чтения по теме: А.П. Чехов. Рассказ «Мальчики». Герои рассказа. Поступки героев рассказа»</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zOw9wR3qFBY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">Применение Сингапурских методик в рамках урока по предмету литературное чтение</h2>
                    {{--                    <p class="video_block__text video_block__text--blue"></p>--}}
                    <p class="video_block__text video_block__text--gold">Мастер-класс с применением Сингапурских методик в рамках урока по предмету литературное чтение по теме А.П. Чехов. Рассказ «Мальчики».</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Cued3rEK3a0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">Мастер-класс «Урок русского языка по теме: «Наречие как часть речи», 4 класс»</h2>
                    {{--                    <p class="video_block__text video_block__text--blue"></p>--}}
                    <p class="video_block__text video_block__text--gold">Мастер-класс «Урок русского языка по теме: «Наречие как часть речи», 4 класс»</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tYOl4NP5K_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">Мастер-класс «Урок технологии. Скульптуры разных времен и народов»</h2>
                    {{--                    <p class="video_block__text video_block__text--blue"></p>--}}
                    <p class="video_block__text video_block__text--gold">Мастер-класс «Урок технологии. Скульптуры разных времен и народов»</p>
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
