@extends('admin.layouts.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новая ссылка</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Новая ссылка</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" role="form" action="{{route('review.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Тип материала</label>
                                    <select class="custom-select form-control-border border-width-2" name="type_id" id="selectType">
                                        <option value="5">Ссылка</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Заголовок</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Контент</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content"  rows="6" placeholder="Контент..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Категория</label>
                                    <select name="category_id" id="category_id" class="custom-select">
                                        @if(count($categories))
                                            @foreach($categories as $k => $cat)
                                                <option value="{{$cat['id']}}" class="io" data-type="{{$cat['type_id']}}"> {{$cat['title']}}  </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group" id="department_relation">
                                    <label>Связать материал с центром</label>
                                    <select name="department_relation"  class="custom-select">
                                        @if(count($departments))
                                            <option value="">без меток</option>
                                            @foreach($departments as $dep)
                                                <option value="{{$dep->id}}"> {{$dep->title}}  </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Дата публикаций</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" id="start1" name="created_at"
                                               value="0000-00-00 " min="2020-01-01" max="2030-12-31" style=" border:1px solid rgba(73,80,87,0.5)">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="thumbnail">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" id="btn-action" class="btn btn-primary">Добавить ссылка</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        $( document ).ready(function() {

            let today = new Date();
            let dd = String(today.getDate()).padStart(2, '0');
            let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            let yyyy = today.getFullYear();
            today = yyyy +  '-' + mm + '-' + dd;
            document.querySelector('#start1').value = today




            $('#selectType').change(()=>{
                let flag = document.querySelector('#selectType').value
                let sel = false
                selectType(flag)
                dataAttributes(flag,sel)
            })

            function dataAttributes(flag,sel){

                flag = typeof flag !== 'undefined' ?  flag : document.querySelector('#selectType').value;
                let elements = document.querySelectorAll('.io');
                if(flag){
                    for(let i = 0; i<elements.length; i++){
                        if(elements[i].getAttribute('data-type')!= flag){
                            elements[i].style.display = 'none'
                            elements[i].removeAttribute('selected')
                        }else{
                            if(!sel){
                                sel = true
                                elements[i].setAttribute('selected', true);
                            }
                            elements[i].style.display = "block";
                        }
                    }
                }
            }
            function selectType(flag){
                if(flag == 1){
                    $('#article-block').show()
                    $('#btn-action').text("Добавить статью")
                    $('#department_relation').show()

                }
                if(flag==2){
                    $('#article-block').hide()
                    $('#btn-action').text("Добавить документ")
                    $('#department_relation').show()

                }
                if(flag==3){
                    $('#article-block').hide()
                    $('#btn-action').text("Добавить видео")
                    $('#department_relation').hide()

                }
                if(flag==4){
                    $('#article-block').hide()
                    $('#btn-action').text("Добавить отзыв")
                    $('#department_relation').hide()
                }
                if(flag==5){
                    $('#article-block').hide()
                    $('#btn-action').text("Добавить ссылку")
                    $('#department_relation').hide()
                }
            }
            dataAttributes()
        });

    </script>
@endsection
