@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
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
                                <h3 class="card-title">Создание категории</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" role="form" action="{{route('categories.store')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <!-- РЕАЛИЗОВАТЬ ВЫВОД РОДИТЕЛЬСКОЙ КАТЕГОРИИ-->
                                        <label>Название</label>
                                        <input type="text" class="custom-select" @error('title') is-invalid @enderror" id="title"
                                               placeholder="Название" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Выбрать тип материала</label>
                                        <select class="custom-select form-control-border border-width-2" name="type_id" id="selectType">
                                            @foreach($types as $type)
                                                <option value="{{$type->id_type}}">{{$type->type_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <!-- РЕАЛИЗОВАТЬ ВЫВОД РОДИТЕЛЬСКОЙ КАТЕГОРИИ-->
{{--                                        <label for="title">Родительская категория</label>--}}
{{--                                        <select name="parent_id" id="parent_id">--}}
{{--                                            <option value=""> без родительской категорий </option>--}}
{{--                                        @if(count($parentCategory))--}}
{{--                                                @foreach($parentCategory as $pcat)--}}
{{--                                                    <option value="{{$pcat->id}}"> {{$pcat->title}} </option>--}}
{{--                                                @endforeach--}}
{{--                                        @endif--}}
{{--                                        </select>--}}
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Создать</button>
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
