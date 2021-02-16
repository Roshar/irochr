@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Новая статья</h1>
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
                                <h3 class="card-title">Новая статья</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" role="form" action="{{route('posts.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Заголовок</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                               placeholder="Название" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label>Описание</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror"  name="description" id="description" rows="3" placeholder="Описание..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Контент</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content"  rows="6" placeholder="Контент..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Категория</label>
                                        <select name="category_id" id="category_id" class="custom-select">
                                            <option value=""> без категорий </option>
                                        @if(count($categories))
                                                @foreach($categories as $k => $cat)
                                                    <option value="{{$k}}"> {{$cat}} </option>
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
                                    <button type="submit" class="btn btn-primary">Создать статью</button>
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
