@extends('layouts.single_layout')

@section('title',$post->title)

@section('content')

<div class="container container--with_aside">
    <nav class="breadcrumbs_nav">
        <ul class="breadcrumbs_nav__items">
            <li class="breadcrumbs_nav__item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumbs_nav__item"><a href="{{route('category',['slug' => $post->category->slug])}}">{{$post->category->title}}</a></li>
            <li class="breadcrumbs_nav__item">{{$post->title}}</li>
        </ul>
    </nav>
    <div class="row row--ne">
        <main class="with_aside">
            <h1 class="post_page_header">{{$post->title}}</h1>
            <div class="post">
                <div class="post__header">
                    <p class="post__date">{{$post->getPostDate()}}</p>
                    <ul class="post__share_items">
                        <li class="post__share_item"><a href="#"><i class="fab fa-vk"></i></a></li>
                        <li class="post__share_item"><a href="https://www.facebook.com/dialog/share?app_id=145634995501895&display=popup&href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2F&redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fexplorer"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="post__share_item"><a href="#"><i class="fab fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <div class="post__info">
                    <p class="post__text">{!!$post->content!!}</p>
                </div>
            </div>
            <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
        </main>
        <aside class="sidebar">
            <div class="popular_news">
                <h2>Последние новости</h2>
                @foreach($last_news as $item)
                <div class="popular_news__block">
                    <a href="{{route('article',['slug' => $item->slug])}}"><h3 class="popular_news__heading">{{$item->title}}</h3></a>
                </div>
                @endforeach
{{--                <div class="popular_news__block">--}}
{{--                    <a href=""><h3 class="popular_news__heading">Ежегодный конкурс <br>«Лучший учитель чеченского языка»</h3></a>--}}
{{--                </div>--}}

                <a href="{{route('news_list')}}" class="all_news_link all_news_link--gold">Все новости <i class="far fa-newspaper"></i></a>
            </div>
        </aside>
    </div>
</div>
</body>
</html>

@endsection

