@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
    <main class="with_aside documents_template">
        <h1>{{$title}}</h1>
        <div class="info__block">
            <p>Прием слушателей осуществляется по <a href="#">государственному заданию</a> и <a href="">плану образовательных услуг на 2021 год</a> </p>
        </div>
    </main>
@endsection
