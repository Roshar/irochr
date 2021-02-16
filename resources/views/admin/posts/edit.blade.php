@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактировать статью</h1>
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
                            <h3 class="card-title">Статья "{{$post->title}}"</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" role="form" action="{{route('posts.update',['post' => $post->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Заголовок</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{$post->title}}" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" >{{$post->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Контент</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3"> {{$post->content}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Категория</label>
                                    <select name="category_id" id="category_id" class="custom-select">
                                        <option value=""> без категорий </option>
                                        @if(count($categories))
                                            @foreach($categories as $k => $cat)
                                                <option value="{{$k}}" @if($k == $post->category_id) selected @endif> {{$cat}} </option>
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
                                            <label class="custom-file-label" for="thumbnail">Выбрать изображение</label>
                                        </div>
                                    </div>
                                    <div><img src="{{$post->getImage()}}" alt="" class="image" width="200px"></div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Изменить</button>
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

@endsection
