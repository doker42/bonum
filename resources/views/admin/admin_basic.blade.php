<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
{{--    <!-- Tell the browser to be responsive to screen width -->--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <!-- Favicon-->--}}
{{--    <link rel="icon" type="image/x-icon" href= "{{ env('SUB') }}/public/img/fav-devar.png" />--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="{{ env('SUB') }}/public/adminlte/plugins/fontawesome-free/css/all.min.css">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <!-- JQVMap -->--}}
{{--    <link rel="stylesheet" href="{{ env('SUB') }}/public/adminlte/plugins/jqvmap/jqvmap.min.css">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{ env('SUB') }}/public/adminlte/dist/css/adminlte.min.css">--}}
{{--    <!-- Google Font: Source Sans Pro -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">--}}
    <!-- custom css -->
{{--    <link rel="stylesheet" href="{{ env('SUB') }}/public /css/custom.css">--}}

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="{{ route('admin') }}" class="nav-link">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item d-none d-sm-inline-block">--}}
{{--                <a href="{{ route('admin') }}" class="nav-link">Contact</a>--}}
{{--            </li>--}}
            <li class="nav-item dropdown">
{{--                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                    {{ Auth::user()->name }}--}}
{{--                </a>--}}
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
{{--                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                        {{ __('Logout') }}--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
                </div>
            </li>


        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
{{--        <a href="{{ route('admin') }}" class="brand-link">--}}
{{--            <img src="{{ env('SUB') }}/public/img/admin.jpg" alt="AdminLogo" class="brand-image img-circle elevation-3"--}}
{{--                 style="opacity: .8">--}}
{{--            <span class="brand-text font-weight-light">Admin</span>--}}
{{--        </a>--}}

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
{{--                        <a href="{{ route('jobs') }}" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-user-cog"></i>--}}
{{--                            <p>Jobs</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('avatars') }}" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-portrait"></i>--}}
{{--                            <p>Avatars</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('images') }}" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-images"></i>--}}
{{--                            <p>Background-images</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('about') }}" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-address-card"></i>--}}
{{--                            <p>AboutMe</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('letters') }}" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-address-card"></i>--}}
{{--                            <p>CV Letters</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('projects') }}" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-address-card"></i>--}}
{{--                            <p>Projects</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('visitors') }}" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-address-card"></i>--}}
{{--                            <p>Visitors</p>--}}
{{--                        </a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a href="{{ route('admins') }}" class="nav-link">--}}
{{--                            <i class="nav-icon far fa-address-card"></i>--}}
{{--                            <p>Admins</p>--}}
{{--                        </a>--}}
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- MESSAGE BLOCK --}}
{{--        @if (count($errors) > 0)--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        @if (session('status'))--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        @if (session('error'))--}}
{{--            <div class="alert alert-danger" role="alert">--}}
{{--                {{ session('error') }}--}}
{{--            </div>--}}
{{--        @endif--}}
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">

            <main class="">
                @yield('content')
            </main>

        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Bootstrap 4 -->
{{--<script src="{{ env('SUB') }}/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}

</body>
</html>

