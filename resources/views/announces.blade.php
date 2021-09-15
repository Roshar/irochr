@extends('layouts.category_layout')

@section('title',$category->title)

@section('content')

    <div class="container container--with_aside">
        <nav class="breadcrumbs_nav">
            <ul class="breadcrumbs_nav__items">
                <li class="breadcrumbs_nav__item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumbs_nav__item">{{$category->title}}</li>
            </ul>
        </nav>
        <div class="row row--ne">
            <main class="with_aside">
                <h1>{{$category_a->title}}</h1>
                <div class="news">
                    <div id="news">
                        @csrf
                        @foreach($announce as $item)
                            <div class="news__block">
                                <img src="{{$item->getImage()}}" alt="" class="news__image">
                                <div class="news__info">
                                    <h3 class="news__heading"><a href="{{route('article',['slug' => $item->slug])}}">{{$item->title}}</a></h3>
                                    <p class="news__text">{!!$item->description!!}</p>
                                    <a href="{{route('article',['slug' => $item->slug])}}" class="news__details">подробнее</a>
                                    <p class="news__date">{{$item->getPostDate()}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $posts->links('pagination::semantic-ui') }}

                    {{--                <button class="more_news_button" id="add_more"></button>--}}
                </div>
                <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
            </main>
            <aside class="sidebar">
                <div class="popular_news">
                    <h2>Последние новости</h2>
                    @foreach($posts as $item)
                        <div class="popular_news__block">
                            <a href="{{route('article',['slug' => $item->slug])}}"><h3 class="popular_news__heading">{{$item->title}}</h3></a>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>

    <script>
        let token = $('input[name="_token"]').val()

        $("#add_more").on('click', function(){
            load_more('', token)
        })

        function load_more(id="", token) {
            $.ajax({
                url: "{{ route('load_more_data')}}",
                method: "POST",
                data: {id: id, _token: token},
                success: function(data){
                    $("#news").append(data)
                }
            })
        }
    </script>

@endsection
