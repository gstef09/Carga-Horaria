<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CHDF') }}</title>

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
    <link rel="apple-touch-icon" href="{{ asset('css/img/apple-touch-icon.png') }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
<nav class="navbar navbar-default menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{ config('app.name', 'CHDF') }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-book"></i>
          <span>Materias</span>
          <span class="caret"></span
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/materias') }}"><i class="fa fa-circle-o"></i> Lista de Materias</a></li>
            <li><a href="{{ url('/materias/create') }}"><i class="fa fa-circle-o"></i> Agregar Materia</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-laptop"></i>
          <span>Docentes</span>
          <span class="caret"></span
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/docentes') }}"><i class="fa fa-circle-o"></i> Lista de Docentes</a></li>
            <li><a href="{{ url('/docentes/create') }}"><i class="fa fa-circle-o"></i> Agregar Docente</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-th"></i>
          <span>Periodos</span>
          <span class="caret"></span
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/periodos') }}"><i class="fa fa-circle-o"></i> Lista de Periodos</a></li>
            <li><a href="{{ url('/periodos/create') }}"><i class="fa fa-circle-o"></i> Agregar Periodo</a></li>
          </ul>
        </li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-building-o"></i>
          <span>Cursos y Paralelos</span>
          <span class="caret"></span
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/cursos') }}"><i class="fa fa-circle-o"></i> Cursos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Paralelos</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-users"></i>
          <span>Acceso</span>
          <span class="caret"></span
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/usuarios') }}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Paralelos</a></li>
          </ul>
        </li>

      </ul>
        </li>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
<div>
    @yield('content')
</div>
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
