@extends('layouts.main_layout')

@section('title','Главная')

@section('content')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.7);
        }
        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: transparent;
            margin: 15% auto;
            padding: 20px;
            width: max-content;
        }

        .close {
            color: white;
            font-size: 38px;
            font-weight: bold;
            position: absolute;
            top:-10%;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

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
                <h3 class="bigger">Главная новость</h3>
                @foreach($mainArticle as $article)
                    <div class="news__block">
                        <img src="{{$article->getImage()}}" alt="" class="news__image">
                        <div class="news__info">
                            <h3 class="news__heading"><a href="#">{{$article->title}}</a></h3>
                            <p class="news__text">{!! $article->description !!}</p>
                            <a href="{{route('article',['slug' => $article->slug])}}" class="news__details">подробнее</a>
                            <p class="news__date">{{$article->getPostDate()}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="actual_video">
                <h3 class="bigger">Актуальное видео</h3>
                @foreach($mainMovie as $movie)
                <div class="actual_video__block">
                    {!! $movie->content !!}
                    <h3 class="actual_video__heading">
                        <a class="">
                            {{$movie->title}}
                        </a>
                    </h3>
                    <a href="templates/webinars.html" class="actual_video__all">Все видео</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <section class="cards_section">
            <h2><button class="csh">Новости</button> | <button class="csh csh--disable">Анонсы</button></h2>
            <div class="cards" data-name="news">
                @foreach($posts as $post)
                <div class="card">
                    <div class="card__image_block">
                        <img src="{{$post->getImage()}}" alt="" class="card__image">
                    </div>
                    <div class="card__info">
                        <h3 class="card__heading"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></h3>
                        <p class="card__date">{{$post->getPostDate()}}</p>
                        <a href="{{route('article',['slug' => $post->slug])}}" class="card__details">Читать</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="cards cards--disable" data-name="announcements">
                @foreach($announces as $announce)
                    <div class="card">
                        <div class="card__image_block">
                            <img src="{{$announce->getImage()}}" alt="" class="card__image">
                        </div>
                        <div class="card__info">
                            <h3 class="card__heading"><a href="{{route('article',['slug' => $announce->slug])}}">{{$announce->title}}</a></h3>
                            <p class="card__date">{{$announce->getPostDate()}}</p>
                            <a href="{{route('article',['slug' => $announce->slug])}}" class="card__details">Читать</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('category', ['slug' => $post->category->slug])}}" class="to_all_link">Все новости</a>
            <a href="{{ route('category', ['slug' => $announce->category->slug])}}" class="to_all_link to_all_link--disable">Все анонсы</a>
        </section>
    <div class="container documents_section">
        <h2>Нормативные документы</h2>
        <div class="row documents">

            @foreach($documents as $doc)
                <a href="{{$doc->content}}" class="document" target="_blank">
                    <i class="far fa-file-alt"></i>
                    <p class="document_title">{{$doc->title}} </p>
                </a>
            @endforeach

        </div>
        <a href="{{route('institute.document')}}" class="to_all_link">Все документы</a>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="close">&times;</span>
            <div id="container-video" style="text-align: center">
            </div>
        </div>
    </div>
    <div class="container--colored">
        <div class="container videos_section">
            <h2>Видео</h2>
            <div class="row videos">
                @if(isset($videoList))
                    @foreach($videoList->items as $key=> $item)
                        <div class="video hide-m">
                              <img src="{{$item->snippet->thumbnails->high->url}}" class="myBtn"  data-id="{{$item->id->videoId}}" alt="">
                        </div>
                    @endforeach
                @endif
            </div>
            <a href="templates/institiute/regulations.html" class="to_all_link">Все видео</a>
        </div>
    </div>
    <div class="container resources_section">
        <h2>Информационные ресурсы института</h2>
        <div class="row resources">
            <a href="http://tallam.ru/" class="resource">
                <img src="{{asset('assets/front/img/resources/tallam.png')}}" alt="Tallam">
                <p>Информационно-аналитическая платформа Tallam</p>
            </a>
            <a href="http://e-learning.ipkrochr.ru/" class="resource">
                <img src="{{asset('assets/front/img/resources/moodle.png')}}" alt="Moodle ИРО ЧР">
                <p>Учебный центр ГБУ ДПО ИРО ЧР</p>
            </a>
            <a href="http://poll.ipkrochr.ru/" class="resource">
                <img src="<img src="{{asset('assets/front/img/resources/moodle.png')}}"" alt="Онлайн заявки на КПК">
                <p>Онлайн заявки на КПК</p>
            </a>
            <a href="https://statipkro.ru/" class="resource">
                <img src="<img src="{{asset('assets/front/img/resources/moodle.png')}}"" alt="Statipkro">
                <p>Портал изучения образовательных потребностей педагогического сообщества ЧР</p>
            </a>
        </div>
    </div>
{{--    <div class="container store_section">--}}
{{--        <h2>Витрина</h2>--}}
{{--        <div class="row products">--}}
{{--            <a href="" class="product">--}}
{{--                <img src="assets/front/img/products/obl1.16.jpg" alt="">--}}
{{--                <p>Журнал “Вестник”</p>--}}
{{--            </a>--}}
{{--            <a href="" class="product">--}}
{{--                <img src="assets/front/img/products/obl1.16.jpg" alt="">--}}
{{--                <p>Журнал “Вестник”</p>--}}
{{--            </a>--}}
{{--            <a href="" class="product">--}}
{{--                <img src="assets/front/img/products/obl1.16.jpg" alt="">--}}
{{--                <p>Журнал “Вестник”</p>--}}
{{--            </a>--}}
{{--            <a href="" class="product">--}}
{{--                <img src="assets/front/img/products/obl1.16.jpg" alt="">--}}
{{--                <p>Журнал “Вестник”</p>--}}
{{--            </a>--}}
{{--            <a href="" class="product">--}}
{{--                <img src="assets/front/img/products/obl1.16.jpg" alt="">--}}
{{--                <p>Журнал “Вестник”</p>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <a href="templates/institiute/regulations.html" class="to_all_link">Все товары</a>--}}
{{--    </div>--}}
    <div class="container testimonials_section">
        <h2>Отзывы</h2>
        <div class="testimonials_controllers">
            <div class="testimonials_controller testimonials_controller--left"><i class="fas fa-arrow-left"></i></div>
            <div class="testimonials_controller testimonials_controller--right"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="testimonials_wrapper">
            <div class="testimonials">
                @foreach($reviews as $rev)
                <div class="testimonial">
                    <p class="testimonial__name">{{$rev->title}}</p>
                    <p class="testimonial__text">{!! $rev->content !!}</p>
                </div>
                @endforeach

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

    <script>
        $(document).ready(function() {
            let modal = document.getElementById("myModal");
            let content = $('#container-video')

            $('.myBtn').click((event)=>{
                let link = event.target.getAttribute("data-id")
                content = $('#container-video')
                content.append('<iframe id="ytplayer" type="text/html" width="720" height="405" src="https://www.youtube.com/embed/'+link+'?autoplay=1'+'" frameborder="0" allowfullscreen>')
                modal.style.display = "inline-block";
            })

            $('#close').click(()=>{
                modal.style.display = "none";
                content.empty()
            })

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    content.empty()
                }
            }
        });

    </script>
@endsection
