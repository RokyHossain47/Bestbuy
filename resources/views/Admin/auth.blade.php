<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BestBuy | Admin Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="icon" href="{{asset('dist/img/fabicon.png')}}" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/custome.css')}}">
</head>
<body class="hold-transition body-color">
<div class="wrapper">
    <!-- Main content -->
    <section class="content p-sm-4 ml-sm-4" id='main-content'>
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-4 mr-sm-4">

        </div>
          <!-- left column -->
          <div class="col-sm-3 col-md-3 pt-sm-4 mt-sm-3">
              <div class="row mt-sm-4 pt-sm-4">

              </div>
              <div class="row mt-sm-4 pt-sm-4">

              </div>
            <!-- jquery validation -->
            <div class="card card-success">
              @if($errors->any())
              <div class="alert alert-danger">
                  {{$errors->first()}}
              </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">BestBuy <small>Admin login Page</small></h3>
              </div>
              <!-- form start -->
              <form id="quickForm"  action="{{route('adminlogin')}}" method="Post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" value="1" class="custom-control-input bg-success" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a class='text-success' href="#">terms of service</a>.</label>
                      <span></span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form>
            </div>
            </div>
        </div>
      </div>
      <footer class='text-center mr-sm-4 pr-sm-4'>
        <b>Copyright &copy; 2022-2023 <a class='text-success' href="#">Best Buy</a>.</b> <br>  &nbsp; All rights reserved
        <b>Best Buy A Ecommerce Store</b>
    </footer>
    </section>
  </div>
</div>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{asset('dist/js/demo1.js')}}"></script> -->
<!-- Page specific script -->
<script src="{{asset('dist/js/custom.js')}}"></script>

</body>
</html>