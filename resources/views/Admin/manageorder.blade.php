@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">

<div class="card m-sm-3">
  <div class="card-header">
    <h3 class="card-title">All Products</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" cellspacing="0" class="table table-hover table-bordered table-striped">
      <thead>
      <tr class="text-center">
        <th class="col-sm-1">ID</th>  
        <th class="col-sm-3">Name</th>
        <th class="col-sm-2">Phone</th>
        <th class="col-sm-2">Qantity</th>
        <th class="col-sm-1">Variation</th>
        <th class="col-sm-1">status</th>
        <th class="col-sm-2">Edit</th>
      </tr>
      </thead>
      <tbody>
      <tr class="text-center">
        <td class="">1</td>  
        <td>The Best Shoe in 2022</td>
        <td>+01254669452</td>
        <td>Men/Shoe</td>
        <td>1253</td>
        <td> &#36; 12.00</td>
        <td>
          <a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a>
          <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>                    
      </tr>
      <tr class="text-center">
        <td class="">2</td>  
        <td>The Best Shoe in 2022</td>
        <td>+01254669452</td>
        <td>Men/Shoe</td>
        <td>1253</td>
        <td> &#36; 12.00</td>
        <td>
          <a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a>
          <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>                    
      </tr>
      <tr class="text-center">
        <td class="">3</td>  
        <td>The Best Shoe in 2022</td>
        <td>+01254669452</td>
        <td>Men/Shoe</td>
        <td>1253</td>
        <td> &#36; 12.00</td>
        <td>
          <a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a>
          <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>                    
      </tr>
      <tr class="text-center">
        <td class="">11</td>  
        <td>The Best Shoe in 2022</td>
        <td>+01254669452</td>
        <td>Men/Shoe</td>
        <td>1253</td>
        <td> &#36; 12.00</td>
        <td>
          <a href="#" class="btn btn-success"><i class="fas fa-eye"></i></a>
          <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>                    
      </tr>
      </tbody>
      <tfoot>
      <tr class="text-center">
        <th class="col-sm-1">ID</th>  
        <th class="col-sm-3">Name</th>
        <th class="col-sm-2">Phone</th>
        <th class="col-sm-2">Qantity</th>
        <th class="col-sm-1">Variation</th>
        <th class="col-sm-1">status</th>
        <th class="col-sm-2">Edit</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>

<!-- dataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<!-- dataTables -->
@endsection