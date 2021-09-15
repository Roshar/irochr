@extends('layouts.educative_layout')

@section('title', $title)

@section('content')
    <main class="with_aside documents_template">
        <h1>{{$title}}</h1>
        <div class="info documents regulations">
            <ul class="documents__list with_icon_list">
                @foreach($documents as $doc)
                    <li class="document">
                        <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                            <i class="far fa-file-alt" aria-hidden="true" ></i>
                            <p class="document_title">{{$doc->title}}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection


