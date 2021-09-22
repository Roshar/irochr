@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
    <main class="with_aside documents_template">
        <h1>{{$title}}</h1>
        <div class="info documents regulations">
            <ul class="documents__list with_icon_list">
                <li class="document file">
                    <a href="https://drive.google.com/drive/folders/1y4g9uTpQs60oLUsfurd_JVOXvSoO1RsD?usp=sharing" target="_blank">
                        <i class="far fa-folder"></i>
                        <p class="document_title">2021</p>
                    </a>
                </li>

                @foreach($documents as $doc)
                    <li class="document">
                        <a href="{!!doc_trim($doc->content)!!}" target="_blank">
                            <i class="far fa-file-alt" aria-hidden="true" ></i>
                            <p class="document_title">{{$doc->title}}</p>
                        </a>
                    </li>
                @endforeach

                <li class="document file">
                    <a href="https://drive.google.com/drive/folders/1Hggd1B7LZC7QUzMAXbOFNFv9sRBlW8cU?usp=sharing" target="_blank">
                        <i class="far fa-folder"></i>
                        <p class="document_title">2019</p>
                    </a>
                </li>
            </ul>
        </div>
        <button class="scroll_to_top_button--hidden"><i class="fas fa-chevron-up"></i></button>
    </main>
@endsection
