<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>shoes shop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{ asset("panel/plugins/fontawesome-free/css/all.min.css") }}>
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('panel/dist/css/adminlte.min.css') }}>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
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
        <a href={{ route('home') }} class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <div class="input-group-append">
            
              
                     </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href={{ route('Product-List') }} class="nav-link {{ request()->is('Admin/Product/*')? 'active' :'page note found' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{ route('Category-List') }} class="nav-link {{ request()->is('Admin/Category/*')? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{ route('Shops-List') }} class="nav-link {{ request()->is('Admin/Shops/*')? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>shops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{ route('Users-List') }} class="nav-link {{ request()->is('Admin/Users/*')? 'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>users</p>
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
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
            <!-- /.card -->

            
          <!-- /.col-md-6 -->
   
                <!-- /.d-flex -->

       
            <!-- /.card -->

      
    
                <!-- /.d-flex -->
          
                <!-- /.d-flex -->
           
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src={{ asset("panel/plugins/jquery/jquery.min.js")}}?>></script>
<!-- Bootstrap 4 -->
<script src={{ asset("panel/plugins/bootstrap/js/bootstrap.bundle.min.js")}}>></script>
<!-- DataTables  & Plugins -->
<script src={{ asset("panel/plugins/datatables/jquery.dataTables.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}>></script>
<script src={{ asset("panel/plugins/jszip/jszip.min.js")}}>></script>
<script src={{ asset("panel/plugins/pdfmake/pdfmake.min.js")}}>></script>
<script src={{ asset("panel/plugins/pdfmake/vfs_fonts.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-buttons/js/buttons.html5.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-buttons/js/buttons.print.min.js")}}>></script>
<script src={{ asset("panel/plugins/datatables-buttons/js/buttons.colVis.min.js")}}>></script>
<!-- AdminLTE App -->
<script src={{ asset("panel/dist/js/adminlte.min.js")}}>></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
