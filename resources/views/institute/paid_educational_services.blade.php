@extends('layouts.institute_layout')

@section('title', $title)

@section('content')
<main class="with_aside documents_template">
    <h1>{{$title}}</h1>
    <div class="info documents">

        <ul class="documents__list with_icon_list">
            <li class="document file">
                <a href="https://drive.google.com/file/d/1JY-UTifmefT8xqttFwT6HQWI2-0TGHMm/view?usp=sharing" target="_blank">
                    <i class="far fa-file-alt" aria-hidden="true"></i>
                    <p class="document_title">Калькуляция стоимости обучения на курсах и семинарах, проводимых в ГБУ ДПО "ЧИПКРО"</p>
                </a>
            </li>
            <li class="document file">
                <a href="https://drive.google.com/file/d/1a6Np7v8ow_L9NHECasGhGoCsj7zX0vq5/view?usp=sharing" target="_blank">
                    <i class="far fa-file-alt" aria-hidden="true"></i>
                    <p class="document_title">Положение о платных образовательных услугах</p>
                </a>
            </li>
            <li class="document file">
                <a href="https://drive.google.com/file/d/1OtNBCC6-ePDD5xg3RSMwgWqGCmtHwmg4/view?usp=sharing" target="_blank">
                    <i class="far fa-file-alt" aria-hidden="true"></i>
                    <p class="document_title">ПРИКАЗ №38 от 20 03 2019 О стоимости обучения по дополнительным профессиональным программам на 2019 г</p>
                </a>
            </li>
        </ul>
    </div>
</main>
@endsection
