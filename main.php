<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patitas App</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link type="image/png" rel="icon" sizes="32x32" href="img/huella">
  <!-- datatable -->


</head>

<body class="hold-transition sidebar-mini">
<style>
  hr{
    border-color: #797878;
  }
</style>
<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="main.php?view=home" class="nav-link">Acerca del albergue</a>
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
            <a href="main.php?view=mascotas" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
              <p>Todas las mascotas</p>
            </a>
          </li>
          
          <li class="nav-header">Mascotas</li>

          <li class="nav-item">
            <a href="main.php?view=filtro-mascotas" class="nav-link">
              <i class="fas fa-filter nav-icon"></i>
              <p>Filtro de mascotas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="main.php?view=mascotas-adoptadas" class="nav-link">
              <i class="fas fa-home nav-icon"></i>
              <p>Mascotas Adoptadas</p>
            </a>
          </li>
          
          <li class="nav-header">Comunidad</li>
          
          <li class="nav-item">
            <a href="main.php?view=comentarios" class="nav-link ">
              <i class="fas fa-comments nav-icon"></i>
              <p>Comentarios</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="main.php?view=home" class="nav-link ">
              <i class="fas fa-info-circle nav-icon"></i>
              <p>Acerca del albergue</p>
            </a>
          </li>

          <li class="nav-header">Colaborador</li>

          <li class="nav-item">
            <a href="main.php?view=mascotas-registro" class="nav-link ">
              <i class="fas fa-save nav-icon"></i>
              <p>Registro Mascota</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="main.php?view=adopciones-registro" class="nav-link ">
              <i class="fas fa-save nav-icon"></i>
              <p>Registro Adopción</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="main.php?view=eventos-registro" class="nav-link ">
              <i class="fas fa-save nav-icon"></i>
              <p>Registro Eventos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="main.php?view=voluntarios-registro" class="nav-link ">
              <i class="fas fa-save nav-icon"></i>
              <p>Registro Voluntarios</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="main.php?view=apoyos-registro" class="nav-link ">
              <i class="fas fa-save nav-icon"></i>
              <p>Registro Apoyo</p>
            </a>
          </li>
                  
          <li class="nav-item">
            <a href="main.php?view=padrinos-registro" class="nav-link ">
              <i class="fas fa-save nav-icon"></i>
              <p>Registro Padrinos</p>
            </a>
          </li>
          <li class="nav-header">Gráficos</li>
          
          <li class="nav-item">
            <a href="main.php?view=grafico-donaciones" class="nav-link ">
            <i class="far fa-chart-bar nav-icon"></i>
              <p>Grafico donaciones</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="main.php?view=grafico-adoptados" class="nav-link ">
            <i class="far fa-chart-bar nav-icon"></i>
              <p>Grafico de adopciones</p>
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
      <h5>Desarrolladores</h5>
      <hr>
      <p><strong>Apellidos y Nombres:</strong></p>
      <p>Belleza Torres, Anderson David.</p>
      <p><strong>Edad:</strong> 18</p>
      <hr>
      <p><strong>Apellidos y Nombres:</strong></p>
      <p>Boada Ramos, Luis Anderson.</p>
      <p><strong>Edad:</strong> 19</p>
      <hr>
      <p><strong>Apellidos y Nombres:</strong></p>
      <p>Francia Minaya, Brenda Andrea.</p>
      <p><strong>Edad:</strong> 19</p>
      
      <div style="margin-top: 12em; text-align:right;">
        <p><strong>Carrera:</strong></p>
        <p>Ing. de Software con I.A. V</p>
        <p><strong>Instructor:</strong></p>
        <p>Francia Minaya, Jhon Edward.</p>
        <h4 style="text-align:right;">SENATI 2022</h4>
      </div>
      

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

<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="dist/js/jquery.mask.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/colores-graficos.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/loadweb.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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