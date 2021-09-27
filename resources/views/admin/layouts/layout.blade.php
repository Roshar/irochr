<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/assets/admin/css/admin.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        .ck-editor__editable_inline{
            min-height: 300px;
        }
    </style>
    <script src="https://cdn.tiny.cloud/1/burwiq9dtt2q2ssg5wbuezb6buu3s871ixqputu5ynlliw6a/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<script src="https://kit.fontawesome.com/8955b94b2b.js" crossorigin="anonymous"></script>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar link -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.index')}}" class="nav-link">Домой</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Контакты</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar link -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->


        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/') }}" target="_blank" class="brand-link">
            <img src="{{asset('assets/admin/img/AdminLTELogo.png')}}"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">На сайт</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
{{--                    <img src="{{asset('assets/admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}
                </div>
{{--                <div class="info">--}}
{{--                    <a href="#" class="d-block">Администратор</a>--}}
{{--                </div>--}}
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('admin.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-home "></i>
                            <p class="text">Главная</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Категории
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('categories.index')}}" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Список категорий</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('categories.create')}}" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Добавить категорию</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Статьи
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('posts.index')}}" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Список статей</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('posts.create')}}" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Добавить статью</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">

                            <i class="nav-icon far fa-file-word"></i>
                            <p>
                                Документы
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('document.index')}}" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Список документов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('document.create')}}" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Добавить документ</p>
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">

                            <i class="nav-icon fas fa-caret-square-left"></i>
                            <p>
                                Видео
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('video.index')}}" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Список видеоматериалов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('video.create')}}" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Добавить видео</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">

                            <i class="nav-icon fab fa-rocketchat"></i>
                            <p>
                                Отзывы

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">

                                <a href="{{route('review.index')}}" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Список отзывов</p>
                                </a>
                            </li>
                            <li class="nav-item">

                                <a href="{{route('review.create')}}" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Добавить отзыв</p>
                                </a>
                            </li>
                        </ul>

                    </li>
{{--                    <i class="fa fa-link" aria-hidden="true"> </i>--}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">

                            <i class="fa fa-link" aria-hidden="true"></i>
                            <p>
                                Ссылки

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">

                                <a href="{{route('link.index')}}" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Список ссылок</p>
                                </a>
                            </li>
                            <li class="nav-item">

                                <a href="{{route('link.create')}}" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Добавить ссылку</p>
                                </a>
                            </li>
                        </ul>

                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Панель администратора</a>.</strong> Все права защищены
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<script src="{{asset('/assets/admin/js/admin.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        selector: '#description',
        height:200,
        relative_urls: false,

        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify ",
        file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config);
    var editor_config = {
        path_absolute : "/",
        selector: '#content',
        height:800,
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config);
</script>

</body>
</html>
