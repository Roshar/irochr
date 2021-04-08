@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
    <main class="with_aside documents_template">
        <h1>{{$title}}</h1>
        <div class="info documents regulations">
            <ul class="documents__list">

            </ul>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
