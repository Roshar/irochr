@extends('admin.layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Редактирование "{{$category->title}}"</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" role="form" action="{{route('categories.update', ['category' => $category->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- РЕАЛИЗОВАТЬ ВЫВОД РОДИТЕЛЬСКОЙ КАТЕГОРИИ-->
                                    <label for="title">Название</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{$category->title}}" name="title">
                                </div>
                                <div class="form-group">
                                    <!-- РЕАЛИЗОВАТЬ ВЫВОД РОДИТЕЛЬСКОЙ КАТЕГОРИИ-->
                                    <label>Родительская категория</label>
                                    <select name="parent_id" id="parent_id" class="custom-select">
                                        <option value=""> без родительской категорий </option>
                                        @if(count($parentCategory))
                                            @foreach($parentCategory as $pcat)
                                                <option value="{{$pcat->id}}" @if($pcat->id == $category->parent_id)
                                                    " selected " @endif> {{$pcat->title}} </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
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
