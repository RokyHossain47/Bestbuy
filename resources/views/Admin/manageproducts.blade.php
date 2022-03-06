@extends('layouts.admin')
@section('title', 'Manage Products')
@section('content')


<div class="card mr-sm-3 ml-sm-3">
  <div class="card-header bg-success">
    <h3 class="card-title">All Products</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" cellspacing="0" class="table table-hover table-bordered table-striped">
      <thead>
      <tr class="text-center">
        <th class="col-sm-1">ID</th>  
        <th class="col-sm-1">Image</th>
        <th class="col-sm-3">Title</th>
        <th class="col-sm-1">Catagory</th>
        <th class="col-sm-1">Quantity</th>
        <th class="col-sm-1">MRP</th>
        <th class="col-sm-1">Seeling Price</th>
        <th class="col-sm-1">Buying Price</th>
        <th class="col-sm-2">Edit</th>
      </tr>
      </thead>
      <tbody>
        @php $i=1;
        @endphp
      @foreach ($product as $value)

      <tr class="text-center">
        <td>{{ $i++ }}</td>  
        <td><img src="{{asset('storage/product-image/'.$value->image)}}" alt="{{$value->image}}" height="70px" width="80px"></td>
        <td>{{ $value->p_name }}</td>
        <td>{{ $value->c_name }}</td>
        <td>{{ $value->quantity }}</td>
        <td> &#36; {{ $value->mrp_price }}</td>
        <td> &#36; {{ $value->s_price }}</td>
        <td> &#36; {{ $value->b_price }}</td>
        <td>
          <a href="{{route('editproduct', ['id'=>$value->id])}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>                    
      </tr>

      @endforeach

      </tbody>
      <tfoot>
      <tr class="text-center">
      <th class="col-sm-1">ID</th>  
        <th class="col-sm-1">Image</th>
        <th class="col-sm-3">Title</th>
        <th class="col-sm-1">Catagory</th>
        <th class="col-sm-1">Quantity</th>
        <th class="col-sm-1">MRP</th>
        <th class="col-sm-1">Seeling Price</th>
        <th class="col-sm-1">Buying Price</th>
        <th class="col-sm-2">Edit</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
@endsection