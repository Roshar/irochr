@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Управление материалами</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Список всех материалов</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3"> Добавить статью</a>
                    <div class="form-group">
                        <form action="" name="post">
                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Минимальный</font></font></label>
                        <select name="cat" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                            <option data-select2-id=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выбрать категорию</font></font></option>
                            @foreach($categories as $cat)
                            <option  data-select2-id="19"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$cat->title}}</font></font></option>
                            @endforeach
                        </select>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Применить фильтр</button>
                        </div>
                        </form>
                    </div>
                    @if(count($posts))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 10px">#ID</th>
                                <th>Наименование</th>
                                <th>Категория</th>
                                <th>Дата создания</th>
                                <th>Кол-во <br> просмотров</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td> {{$post->id}}</td>
                                <td><a href="{{route('posts.edit', ['post' => $post->id])}}">{{title_trim($post->title)}}</a></td>
                                @if(is_object($post->category))
                                    <td>{{$post->category->title}}</td>
                                @else
                                    <td> без категорий</td>
                                @endif
                                <td>
                                    <?php
                                    $timestamp = strtotime($post->created_at);
                                    $new_date = date("d-m-Y | H:i", $timestamp);
                                    ?>

                                    {{$new_date}}
                                </td>
                                <td>
                                    {{$post->views}}
                                </td>
                                <td>
                                    <!-- передаем в маршрут параметр-->
                                    <a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('posts.destroy',['post' => $post->id])}}"  method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>Новых статей нет</p>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    {{$posts->links()}}
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

@endsection
