@extends('layouts.category_layout')

@section('title','sdssd')

@section('content')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="../index.html"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item">{{$category->title}}</li>
        </ul>
    </nav>
    <div class="row row--ne">
        <main class="with_aside">
            <h1>{{$category->title}}</h1>
            <div class="news">
            <div id="news">
            @csrf
            @foreach($posts as $post)
                <div class="news__block">
                    <img src="{{$post->getImage()}}" alt="" class="news__image">
                    <div class="news__info">
                        <h3 class="news__heading"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></h3>  
                        <p class="news__text">{!!$post->description!!}</p>
                        <a href="{{route('article',['slug' => $post->slug])}}" class="news__details">подробнее</a>
                        <p class="news__date">{{$post->getPostDate()}}</p>
                    </div>
                </div>
            @endforeach
            </div>
           
                <button class="more_news_button" id="add_more">Загрузить ещё новости</button>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
        </main>  
        <aside class="sidebar">
            <div class="popular_news">
                <h2>Популярные новости</h2>
                <div class="popular_news__block">
                    <a href=""><h3 class="popular_news__heading">Ежегодный конкурс <br>«Лучший учитель чеченского языка»</h3></a>
                </div>
                <div class="popular_news__block">
                    <a href=""><h3 class="popular_news__heading">Ежегодный конкурс <br>«Лучший учитель чеченского языка»</h3></a>
                </div>
                <div class="popular_news__block">
                    <a href=""><h3 class="popular_news__heading">Ежегодный конкурс <br>«Лучший учитель чеченского языка»</h3></a>
                </div>
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