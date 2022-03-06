@extends('layouts.admin')
@section('title', 'New Order')
@section('content')

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">

<div class="card m-3">
  <div class="m-2">
    <div class="row p-2">          
      <h2 class="pt-3 pl-3">Custome order</h2>
      <table class="table p-sm-3 table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Location</th>
            <th scope="col">Quantity</th>
            <th scope="col">Order Status</th>
            <th scope="col">Clear</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><input type="text" class="form-control " placeholder="ID"></td>
              <td><input type="text" class="form-control" placeholder="Product Name"></td>
              <td><input type="text" class="form-control" placeholder="Phone"></td>
              <td><input type="text" class="form-control" placeholder="Location"></td>
              <td><input type="text" class="form-control" placeholder="Quantity"></td>
              <td><input type="text" class="form-control" value="Active"></td>
              <td><button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
            <tr>
              <td><h6 class="text-center p-2">Total Amount</h6></td>
              <td><input type="text" class="form-control " placeholder="0.00"></td>
            </tr>
          </tbody>
      </table>
      <td colspan="7"><button type="button" class="btn btn-success ml-3">submit</button></td>         
    </div>
  </div>
</div>

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