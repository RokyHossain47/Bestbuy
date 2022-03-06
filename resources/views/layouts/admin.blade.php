<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin @yield('title') </title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="icon" href="{{asset('dist/img/fabicon.png')}}" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/custome.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed body-color">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" href="{{route('logout')}}" role="button">
          <i class="fas fa-sign-out-alt fa-lg"></i>
        </a>
        
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://127.0.0.1:8000/" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="Custom Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bestbuy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('adminprofile')}}" class="d-block">Roky Hossain</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard')?'active0':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>

          </li>
          <li class="nav-item {{request()->is('neworder')?'menu-open':(request()->is('manageorder')?'menu-open':'')}}">
            <a href="#" class="nav-link {{request()->is('neworder')?'active0':(request()->is('manageorder')?'active0':(request()->is('neworder')?'active1':''))}}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('neworder')}}" class="nav-link {{request()->is('neworder')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manageorder')}}" class="nav-link {{request()->is('manageorder')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Order</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('addproduct')?'menu-open':(request()->is('manageproducts')?'menu-open':'')}}">
            <a href="#" class="nav-link {{request()->is('addproduct')?'active0':(request()->is('manageproducts')?'active0':'')}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addproduct')}}" class="nav-link {{request()->is('addproduct')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manageproducts')}}" class="nav-link {{request()->is('manageproducts')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{request()->is('addcategory')?'menu-open':(request()->is('managecategory')?'menu-open':'')}}">
            <a href="#" class="nav-link {{request()->is('addcategory')?'active0':(request()->is('managecategory')?'active0':'')}}">
              <i class="nav-icon fas fa-stream"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addcategory')}}" class="nav-link {{request()->is('addcategory')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('alluser')}}" class="nav-link {{request()->is('alluser')?'active0':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item {{request()->is('addbanner')?'menu-open':(request()->is('contactus')?'menu-open':'')}}">
            <a href="#" class="nav-link  {{request()->is('addbanner')?'active0':(request()->is('contactus')?'active0':'')}}">
              <i class="nav-icon fas fa-copyright"></i>
              <p>
                CMS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('siteidenty')}}" class="nav-link {{request()->is('addbanner')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Identy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addbanner')}}" class="nav-link {{request()->is('addbanner')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contactus')}}" class="nav-link {{request()->is('contactus')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{request()->is('di')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivery Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adminprivecy')}}" class="nav-link {{request()->is('adminprivecy')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link {{request()->is('os')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Sitemap</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item {{request()->is('appsetting')?'menu-open':(request()->is('smssetting')?'menu-open':'')}}">
            <a href="#" class="nav-link {{request()->is('appsetting')?'active0':(request()->is('smssetting')?'active0':'')}}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('appsetting')}}" class="nav-link {{request()->is('appsetting')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>App Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('smssetting')}}" class="nav-link {{request()->is('smssetting')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('emailgatway')}}" class="nav-link {{request()->is('emailgatway')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Gatway</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('massage')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Massage
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if($errors->any())
                      <div class="alert alert-danger">
                        {{$errors->first()}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                </div>             
            </div>
        </div><!-- /.container-fluid -->
    </div>
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 Bestbuy.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



    <!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>


<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>

<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
</body>
</html>