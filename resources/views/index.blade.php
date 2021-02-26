@extends('app')

@section('title','Main')

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
            <nav class="mobile_nav">
                <ul class="mobile nav__items">
                    <li class="mobile_nav__item mobile_nav__item--news"><a href="#">Новости</a></li>
                    <li class="mobile_nav__item mobile_nav__item--events"><a href="#">События</a></li>
                </ul>
            </nav>
            <div class="news">
                <h2>Новости</h2>
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
                <h2>События</h2>
                <div class="event__block">
                    <div class="event__image_block"><img src="assets/front/img/2.png" alt="" class="event__image"></div>
                    <h3 class="event__heading"><a class="#">Ежегодный конкурс «Лучший учитель чеченского языка»</a></h3>
                    <a href="" class="event__all">Все события</a>
                </div>
            </div>
        </div>
    </div>

    <section class="cards_section">
        <div class="cards">
            <div class="card">
                <div class="card__image_block">
                    <img src="assets/front/img/4.png" alt="" class="card__image">
                </div>
                <div class="card__info">
                    <h3 class="card__heading"><a href="#">Межрегиональный брейн-ринг по естественнонаучным предметам</a></h3>
                    <p class="card__date">11.01.2019</p>
                    <a href="templates/post.html" class="card__details">Читать</a>
                </div>
            </div>

            <div class="card">
                <div class="card__image_block">
                    <img src="assets/front/img/3.png" alt="" class="card__image">
                </div>
                <div class="card__info">
                    <h3 class="card__heading"><a href="#">Республиканский круглый стол “Объединимся в&nbsp;борьбе против коррупции в&nbsp;интересах мира, развития и безопасности”</a></h3>
                    <p class="card__date">11.01.2019</p>
                    <a href="templates/post.html" class="card__details">Читать</a>
                </div>
            </div>

            <div class="card">
                <div class="card__image_block">
                    <img src="assets/front/img/5.png" alt="" class="card__image">
                </div>
                <div class="card__info">
                    <h3 class="card__heading"><a href="#">Специалисты ЧИПКРО приняли участие в&nbsp;презентации сборника "Литературно-географический атлас Чеченской Республики"</a></h3>
                    <p class="card__date">11.01.2019</p>
                    <a href="templates/post.html" class="card__details">Читать</a>
                </div>
            </div>
        </div>
        <a href="templates/news.html" class="all_news_link">Все новости</a>
    </section>

    <div class="container">
        <div class="row row--ne">
            <div class="news">
                <div class="news__block">
                    <img src="assets/front/img/1.png" alt="" class="news__image">
                    <div class="news__info">
                        <h3 class="news__heading"><a href="#">Специалисты ЧИПКРО приняли участие в&nbsp;презентации сборника "Литературно-географический атлас Чеченской Республики"</a></h3>
                        <p class="news__text">состоявшейся в&nbsp;актовом зале Национальной библиотеки ЧР им. А.Айдамирова 10 января 2019 года.</p>
                        <a href="" class="news__details">подробнее</a>
                        <p class="news__date">11.01.2019</p>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="event__block">
                    <div class="event__image_block"><img src="assets/front/img/2.png" alt="" class="event__image"></div>
                    <h3 class="event__heading"><a class="#">Ежегодный конкурс «Лучший учитель чеченского языка»</a></h3>
                    <!-- <a href="" class="event__all">Все события</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row--ne">
            <div class="news">
                <div class="news__block">
                    <img src="assets/front/img/1.png" alt="" class="news__image">
                    <div class="news__info">
                        <h3 class="news__heading"><a href="#">Специалисты ЧИПКРО приняли участие в&nbsp;презентации сборника "Литературно-географический атлас Чеченской Республики"</a></h3>
                        <p class="news__text">состоявшейся в&nbsp;актовом зале Национальной библиотеки ЧР им. А.Айдамирова 10 января 2019 года.</p>
                        <a href="" class="news__details">подробнее</a>
                        <p class="news__date">11.01.2019</p>
                    </div>
                </div>
            </div>
            <div class="event">
                <div class="event__block">
                    <div class="event__image_block"><img src="assets/front/img/2.png" alt="" class="event__image"></div>
                    <h3 class="event__heading"><a class="#">Ежегодный конкурс «Лучший учитель чеченского языка»</a></h3>
                    <a href="" class="event__all">Все события</a>
                </div>
            </div>
        </div>
    </div>

@endsection
