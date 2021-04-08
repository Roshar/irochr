@extends('admin.layouts.layout')
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Новый материал</h1>
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
                                <h3 class="card-title">Новый материал</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" role="form" action="{{route('posts.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Выбрать тип материала</label>
                                        <select class="custom-select form-control-border border-width-2" name="type_id" id="selectType">
                                            @foreach($types as $type)
                                            <option value="{{$type->id_type}}">{{$type->type_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Заголовок</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                               placeholder="Название" name="title">
                                    </div>

                                    <div class="form-group" id="article-block">
                                        <label>Описание</label>
                                        <textarea class="form-control  description-editor @error('description') is-invalid @enderror"  name="description" id="description" rows="3" placeholder="Описание..."></textarea>
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
                                    <button type="submit" id="btn-action" class="btn btn-primary">Добавить статью</button>
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

                    }
                    if(flag==2){
                        $('#article-block').hide()
                        $('#btn-action').text("Добавить документ")

                    }
                    if(flag==3){
                        $('#article-block').hide()
                        $('#btn-action').text("Добавить видео")
                    }
                    if(flag==4){
                        $('#article-block').hide()
                        $('#btn-action').text("Добавить отзыв")
                    }
                }
                dataAttributes()
            });

        </script>
@endsection
