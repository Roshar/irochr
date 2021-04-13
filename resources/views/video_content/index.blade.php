@extends('layouts.video_content_layout')

@section('title', $title)

@section('content')

<main class="with_aside">

    <h1>{{$title}}</h1>
    <div class="videos">
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xL4iSKXjfU0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Методические рекомендации по организации электронного и дистанционного обучения</h2>
                <p class="video_block__text video_block__text--blue">Сулейманов Саид-Хусейн Абдурахманович</p>
                <p class="video_block__text video_block__text--gold">Старший преподаватель Центра математики и информатики ГБУ ДПО ИРО ЧР</p>
            </div>
        </div>
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7X5hLtnF034" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Организация процесса адаптации первоклассников к школе</h2>
                <p class="video_block__text video_block__text--blue">Исламова Малика Исаевна</p>
                <!-- malika_islamova@inbox.ru -->
                <!-- yamalika95@mail.ru  -->
                <p  class="video_block__text video_block__text--gold">Проректор по связям с общественностью</p>
                <p class="video_block__text video_block__text--blue">Яударова Малика Юрьевна</p>
                <p class="video_block__text video_block__text--gold">Старший преподаватель Центра воспитания и психолого-педагогического сопровождения образовательной деятельности</p>
            </div>
        </div>
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RObo1NQyPuU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Особенности государственной итоговой аттестации по русскому языку в 2019 году</h2>
                <p class="video_block__text video_block__text--blue">Этиева Имана Эдуевна</p>
                <p class="video_block__text video_block__text--gold">Старший преподаватель Центра филологического образования ГБУ ДПО ИРО ЧР</p>
            </div>
        </div>
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/U6oKzXRh808" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Проектирование учебного плана на уровне среднего общего образования</h2>
                <p class="video_block__text video_block__text--blue">Эльмурзаева Румиса Абуязитовна</p>
                <p class="video_block__text video_block__text--gold">Проректор по НМР</p>
            </div>
        </div>
        <div class="video_block">
            <div class="video_block__recording">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hgZLegeVyI8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video_block__info">
                <h2 class="video_block__heading">Организация адаптационного периода первоклассников</h2>
                <p class="video_block__text video_block__text--blue">Исламова Малика Исаевна</p>
                <p class="video_block__text video_block__text--gold">Проректор по связям с общественностью</p>
                <p class="video_block__text video_block__text--blue">Яударова Малика Юрьевна</p>
                <p class="video_block__text video_block__text--gold">Старший преподаватель Центра воспитания и психолого-педагогического сопровождения образовательной деятельности</p>
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
