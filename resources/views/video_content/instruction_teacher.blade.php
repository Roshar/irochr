@extends('layouts.video_content_layout')

@section('title', $title)

@section('content')

    <main class="with_aside">

        <h1>{{$title}}</h1>
        <div class="videos">
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1u393awwOto" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">1. Вступление</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5bZuDXLDTR8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">2. Добавление текстового объекта</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ktQ2dx5nRD4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">3. Добавление файла</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/f25h0Be-r1E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">4. Контрольные задания. Часть №1 (задание)</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/N8y55QBBcB4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">5. Контрольные задания (дополнение к видео №4)</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>

            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CK2Xc9SZBww" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">6. Контрольные задания. Часть 3 (Тесты - продолжение)</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/h88SOe8aaog" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">7. Итоговая отчетность в СДО Moodle</h2>
                    <p class="video_block__text video_block__text--blue">Батукаев Рашид Эдуардович</p>
                    <p class="video_block__text video_block__text--gold">Руководитель Центра информационно-технического обеспечения ГБУ ДПО "ИРО ЧР"</p>
                </div>
            </div>
            <div class="video_block">
                <div class="video_block__recording">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/y1-rhL-g6TM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video_block__info">
                    <h2 class="video_block__heading">8. Быстрое оценивание в СДО Moodle</h2>
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
