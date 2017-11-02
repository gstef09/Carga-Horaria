@extends('welcome')
<nav class="navbar navbar-inverse menu">
  <ul class="nav navbar-nav">
    <<ul class="sidebar-menu">
    <li class="header"></li>
    <li>
      <a href="#">
        <i class="fa fa-book"></i>
         <span>Materias</span>
         <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/materias') }}"><i class="fa fa-circle-o"></i> Lista de Materias</a></li>
        <li><a href="{{ url('/materias/create') }}"><i class="fa fa-circle-o"></i> Agregar Materia</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Docentes</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/docentes') }}"><i class="fa fa-circle-o"></i> Lista de Docentes</a></li>
        <li><a href="{{ url('/docentes/create') }}"><i class="fa fa-circle-o"></i> Agregar Docente</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-th"></i>
        <span>Periodo</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/periodos')}}"><i class="fa fa-circle-o"></i> Lista de Periodos</a></li>
        <li><a href="{{url('/periodos/create')}}"><i class="fa fa-circle-o"></i> Agregar Periodo</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-building-o"></i>
        <span>Cursos y Paralelos</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/cursos') }}"><i class="fa fa-circle-o"></i> Cursos</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Paraleloss</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i> <span>Acceso</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/usuarios') }}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
        <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
        
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bar-chart"></i> <span>Consulta Compras</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="consultacompras.php"><i class="fa fa-circle-o"></i> Consulta Compras</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bar-chart"></i> <span>Consulta Ventas</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="consultaventas.php"><i class="fa fa-circle-o"></i> Consulta Ventas</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-plus-square"></i> <span>Ayuda</span>
        <small class="label pull-right bg-red">PDF</small>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
        <small class="label pull-right bg-yellow">IT</small>
      </a>
    </li>
    
  </ul>
  </ul>
  <p class="navbar-text">Some text</p>
</nav>