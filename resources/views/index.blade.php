@extends('layouts.main_layout')

@section('title','Главная')

@section('content')

    <section class="slider_section">
        <div class="slider_section__items">
            <div class="slider_section__item slider_section__item--active">
                <img class="slider_section__image" src="assets/front/img/main-bg.png">
                <a href="#"><h1 class="slider_section__heading">Всероссийское совещание руководителей системы ДПО</h1></a>
            </div>
            <div class="slider_section__item">
                <img class="slider_section__image" src="assets/front/img/main-bg.png">
                <a href="#"><h1 class="slider_section__heading">Всероссийское совещание руководителей системы ДПО</h1></a>
            </div>
            <div class="slider_section__item">
                <img class="slider_section__image" src="assets/front/img/main-bg.png">
                <a href="#"><h1 class="slider_section__heading">Всероссийское совещание руководителей системы ДПО</h1></a>
            </div>
        </div>
        <div class="slider_section__controllers">
            <button type="button" class="slider_section__controller slider_section__controller--left"><i class="fas fa-arrow-left"></i></button>
            <button type="button" class="slider_section__controller slider_section__controller--right"><i class="fas fa-arrow-right"></i></button>
        </div>
    </section>
    <div class="container">
        <div class="row row--ne">
            <div class="news">
                <h3 class="bigger">Актуальная новость</h2>
                    <div class="news__block">
                        <img src="assets/front/img/1.png" alt="" class="news__image">
                        <div class="news__info">
                            <h3 class="news__heading"><a href="#">Специалисты ЧИПКРО приняли участие в&nbsp;презентации сборника "Литературно-географический атлас Чеченской Республики"</a></h3>
                            <p class="news__text">состоявшейся в&nbsp;актовом зале Национальной библиотеки ЧР им.&nbsp;А.Айдамирова 10 января 2019 года.</p>
                            <a href="templates/post.html" class="news__details">подробнее</a>
                            <p class="news__date">11.01.2019</p>
                        </div>
                    </div>
            </div>
            <div class="event">
                <h3 class="bigger">Актуальное мероприятие</h3>
                <div class="event__block">
                    <div class="event__image_block"><img src="assets/front/img/2.png" alt="" class="event__image"></div>
                    <h3 class="event__heading"><a class="#">Ежегодный конкурс «Лучший учитель чеченского языка»</a></h3>
                    <a href="" class="event__all">Все мероприятия</a>
                </div>
            </div>
        </div>
    </div>

    <section class="cards_section">

        <h2>Новости</h2>
        @foreach($posts as $post)
        <div class="cards">
            <div class="card">
                <div class="card__image_block">
                    <img src="{{$post->getImage()}}" alt="" class="card__image">
                </div>
                <div class="card__info">
                    <h3 class="card__heading"><a href="{{ route('article', ['slug' =>$post->slug]) }}"> {{$post->title}}</a></h3>
                    <p class="card__date">{{$post->getPostDate()}}</p>
                    <a href="{{ route('article', ['slug' =>$post->slug]) }}" class="card__details">Читать</a>
                </div>
            </div>
        </div>
        @endforeach
        <a href="{{ route('category', ['slug' => $post->category->slug])}}" class="to_all_link">Все новости</a>
        
    </section>
    <div class="container documents_section">
        <h2>Нормативные документы</h2>
        <div class="row documents">
            <a href="#" class="document">
                <i class="far fa-file-alt"></i>
                <p class="document_title">Приказ Минобрнауки ЧР №86-п от 08.02.2011 г. "О введении ФГОС" </p>
            </a>
            <a href="#" class="document">
                <i class="far fa-file-alt"></i>
                <p class="document_title">Закон Чеченской Республики от 30 октября 2014 г. N 37-РЗ "Об образовании в Чеченской Республике"</p>
            </a>
            <a href="#" class="document">
                <i class="far fa-file-alt"></i>
                <p class="document_title">О внесении изменений в статьи 48 и 481 закона чеченской республики «об образовании в Чеченской Республике»</p>
            </a>
            <a href="#" class="document">
                <i class="far fa-file-alt"></i>
                <p class="document_title">Приказ Минобрнауки ЧР №86-п от 08.02.2011 г. "О введении ФГОС" </p>
            </a>
            <a href="#" class="document">
                <i class="far fa-file-alt"></i>
                <p class="document_title">Закон Чеченской Республики от 30 октября 2014 г. N 37-РЗ "Об образовании в Чеченской Республике"</p>
            </a>
            <a href="#" class="document hide-m">
                <i class="far fa-file-alt"></i>
                <p class="document_title">О внесении изменений в статьи 48 и 481 закона чеченской республики «об образовании в Чеченской Республике»</p>
            </a>
            <a href="#" class="document hide-m">
                <i class="far fa-file-alt"></i>
                <p class="document_title">Приказ Минобрнауки ЧР №86-п от 08.02.2011 г. "О введении ФГОС" </p>
            </a>
            <a href="#" class="document hide-m">
                <i class="far fa-file-alt"></i>
                <p class="document_title">Закон Чеченской Республики от 30 октября 2014 г. N 37-РЗ "Об образовании в Чеченской Республике"</p>
            </a>
            <a href="#" class="document hide-m">
                <i class="far fa-file-alt"></i>
                <p class="document_title">О внесении изменений в статьи 48 и 481 закона чеченской республики «об образовании в Чеченской Республике»</p>
            </a>
        </div>
        <a href="templates/institiute/regulations.html" class="to_all_link">Все документы</a>
    </div>
    <div class="container--colored">
        <div class="container videos_section">
            <h2>Видео</h2>
            <div class="row videos">
                <div class="video"><iframe width="100%" height="315" src="https://www.youtube.com/embed/u09M20Z77Hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video"><iframe width="100%" height="315" src="https://www.youtube.com/embed/u09M20Z77Hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video"><iframe width="100%" height="315" src="https://www.youtube.com/embed/u09M20Z77Hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video hide-m"><iframe width="100%" height="315" src="https://www.youtube.com/embed/u09M20Z77Hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video hide-m"><iframe width="100%" height="315" src="https://www.youtube.com/embed/u09M20Z77Hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video hide-m"><iframe width="100%" height="315" src="https://www.youtube.com/embed/u09M20Z77Hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
            <a href="templates/institiute/regulations.html" class="to_all_link">Все видео</a>
        </div>
    </div>
    <div class="container store_section">
        <h2>Витрина</h2>
        <div class="row products">
            <a href="" class="product">
                <img src="assets/front/img/products/obl1.16.jpg" alt="">
                <p>Журнал “Вестник”</p>
            </a>
            <a href="" class="product">
                <img src="assets/front/img/products/obl1.16.jpg" alt="">
                <p>Журнал “Вестник”</p>
            </a>
            <a href="" class="product">
                <img src="assets/front/img/products/obl1.16.jpg" alt="">
                <p>Журнал “Вестник”</p>
            </a>
            <a href="" class="product">
                <img src="assets/front/img/products/obl1.16.jpg" alt="">
                <p>Журнал “Вестник”</p>
            </a>
            <a href="" class="product">
                <img src="assets/front/img/products/obl1.16.jpg" alt="">
                <p>Журнал “Вестник”</p>
            </a>
        </div>
        <a href="templates/institiute/regulations.html" class="to_all_link">Все товары</a>
    </div>
    <!-- <div class="container--colored"> -->
    <div class="container testimonials_section">
        <h2>Отзывы</h2>
        <div class="testimonials_controllers">
            <div class="testimonials_controller testimonials_controller--left"><i class="fas fa-arrow-left"></i></div>
            <div class="testimonials_controller testimonials_controller--right"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="testimonials_wrapper">
            <div class="testimonials">
                <div class="testimonial">
                    <p class="testimonial__name">Петров Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
                <div class="testimonial">
                    <p class="testimonial__name">Иванов Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
                <div class="testimonial">
                    <p class="testimonial__name">Николаев Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
                <div class="testimonial">
                    <p class="testimonial__name">Грачев Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
                <div class="testimonial">
                    <p class="testimonial__name">Грачев Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
                <div class="testimonial">
                    <p class="testimonial__name">Грачев Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
                <div class="testimonial">
                    <p class="testimonial__name">Грачев Иван</p>
                    <p class="testimonial__org">СОШ №1</p>
                    <p class="testimonial__text">3 июля 2020 года завершились курсы повышения квалификации
                        «Организация учебной деятельности в предметной области
                        «Иностранные языки» по результатам оценки качества образования
                        в условиях внедрения новых ФГОС». 33 педагога Липецкой области
                        высоко оценили КПК, отметив значимость и актуальность материала,
                        изучаемого на курсах в рамках лекционной и практической работы.
                        Несмотря на новый формат проведения курсов (в режиме on-line),
                        учителя ИЯ получили исчерпывающие ответы на интересующие их вопросы,
                        что способствует развитию профессиональных навыков и повышению качества
                        преподавания.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container links_section">
        <h2>Полезные ссылки</h2>
        <div class="row links">
            <a href="https://govzalla.ru/index.php/component/content/article/9-uncategorised/916-metodicheskie-materialy-dlya-zamestitelej-direktorov-ou-i-rabotnikov-mms.html" class="links__link">
                <img src="assets/front/img/links/mmc2.jpg">
            </a>
            <a href="https://resh.edu.ru/" class="links__link">
                <img src="assets/front/img/links/resh.png">
            </a>
            <a href="https://govzalla.ru/index.php/component/content/article/9-uncategorised/906-metodicheskie-rekomendatsii-na-2015-2016-uchebnyj-god.html" class="links__link">
                <img src="assets/front/img/links/МР2020_21.jpg">
            </a>
            <a href="https://vks.edu.ru/" class="links__link">
                <img src="assets/front/img/links/soch.png">
            </a>
        </div>
    </div>

    <div class="container partners_section">
        <h2>Партнёры</h2>
        <div class="row partners">
            <a href="http://obrnadzor.gov.ru/" class="partner"><img src="assets/front/img/partners/rosobr.png" alt=""></a>
            <a href="https://minobrnauki.gov.ru/" class="partner"><img src="assets/front/img/partners/minobr.png" alt=""></a>
            <a href="https://fipi.ru/" class="partner"><img src="assets/front/img/partners/fipi.png" alt=""></a>
            <a href="https://edu.gov.ru/" class="partner"><img src="assets/front/img/partners/minpros.png" alt=""></a>
            <a href="https://mon95.ru/" class="partner"><img src="assets/front/img/partners/minobrchr.jpg" alt=""></a>
        </div>
    </div>
    <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>


@endsection
