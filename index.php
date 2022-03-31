<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi proyecto SENATI</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"> -->
  <!-- en esta sona poner el css -->
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?view=home" class="nav-link">Acerca del albergue</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#062A47">
    <!-- Brand Logo -->
    
    <a class="brand-link mt-1">
      <img src="img/huella2.png" class="brand-image img-circle" style="opacity: 0.8;">
      <span class="brand-text font-weight-light">Patitas App</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar mt-4">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <!-- opciones -->
          <li class="nav-header">Nuestros Refugiados</li>
          <li class="nav-item">
            <a href="index.php?view=mascotas" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
              <p>Todas las mascotas</p>
            </a>
          </li>
          
          <li class="nav-header">Mascotas</li>

          <li class="nav-item">
            <a href="index.php?view=filtro-mascotas" class="nav-link">
              <i class="fas fa-filter nav-icon"></i>
              <p>Filtro de mascotas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?view=mascotas-adoptadas" class="nav-link">
              <i class="fas fa-home nav-icon"></i>
              <p>Mascotas Adoptadas</p>
            </a>
          </li>
          
          <li class="nav-header">Comunidad</li>
          
          <li class="nav-item">
            <a href="index.php?view=comentarios" class="nav-link ">
              <i class="fas fa-comments nav-icon"></i>
              <p>Comentarios</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="index.php?view=home" class="nav-link ">
              <i class="fas fa-info-circle nav-icon"></i>
              <p>Acerca del albergue</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid" id="contenido">
        <!-- Esta seccion se carga de forma dinamica -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/loadweb.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script> -->
<script>
  $(document).ready(function(){
    let content = getParam("view");
    // console.log(test);
    if(content == false){
      $("#contenido").load('views/home.php');
    }else{
      $("#contenido").load('views/' + content + '.php');
    }
  });
</script>
</body>
</html>
