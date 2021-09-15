@extends('layouts.project_layout')

@section('title', $title)

@section('content')
    <main class="with_aside center_template">
        {{--        <h1>{{$category->title}}</h1>--}}
{{--        <div class="center_wrapper center_wrapper--ric">--}}
{{--            <div class="center_block--white">--}}
{{--                <div class="center_block">--}}
{{--                    <h2 class="center_block__heading">О проекте</h2>--}}
{{--                    <p>Федеральный проект «Современная школа» направлен на обеспечение возможности детям получать качественное общее образование в условиях, отвечающих современным требованиям, независимо от места проживания ребенка, а также обеспечение возможности профессионального развития педагогических работников.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <h2>Федеральный проект «Современная школа» направлен на обеспечение возможности детям получать качественное общее образование в условиях, отвечающих современным требованиям, независимо от места проживания ребенка, а также обеспечение возможности профессионального развития педагогических работников.</h2>
        <div class="center_wrapper">
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Новостной раздел <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    {{--                    @if(count($news))--}}
                    {{--                        @foreach($news as $post)--}}
                    {{--                            <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>--}}
                    {{--                        @endforeach--}}
                    {{--                    @else--}}
                    {{--                        <li> нет записей</li>--}}
                    {{--                    @endif--}}
                </ul>
            </div>
            <div class="center_block center_block--blue">
                <h2 class="center_block__heading center_block__heading--blue"> Документы <button type="button" class="arrow_down"><i class="fas fa-arrow-circle-up"></i></button></h2>
                <ul class="center__list">
                    {{--                    @if(count($news))--}}
                    {{--                        @foreach($news as $post)--}}
                    {{--                            <li class="center_block__text"><a href="{{route('article',['slug' => $post->slug])}}">{{$post->title}}</a></li>--}}
                    {{--                        @endforeach--}}
                    {{--                    @else--}}
                    {{--                        <li> нет записей</li>--}}
                    {{--                    @endif--}}
                </ul>
            </div>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
