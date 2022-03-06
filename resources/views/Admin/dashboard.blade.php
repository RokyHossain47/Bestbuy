@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">

<div class="content">
  <div class="container-fluid">
	  
  <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title"><b>Total Customer</b></h3>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg">820</span>
                <span>Customer Over Time</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> 12.5%
                </span>
                <span class="text-muted">Since last week</span>
              </p>
            </div>
            <div class="position-relative mb-4">
              <canvas id="visitors-chart" height="200"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-success"></i> This Month
              </span>
            </div>
          </div>
        </div>   
      </div>          
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title"><b>Total Sales</b></h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span class="text-bold text-lg">$18,230.00</span>
                  <span>Sales Over Time</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
                  <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 33.1%
                  </span>
                  <span class="text-muted">Since last month</span>
                </p>
              </div>
              <div class="position-relative mb-4">
                <canvas id="sales-chart" height="200"></canvas>
              </div>
              <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                  <i class="fas fa-square text-success"></i> This Month
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card m-sm-3">
    <div class="card-header">
      <h3 class="card-title">Recently Add Products</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example2" cellspacing="0" class="table table-hover table-bordered table-striped">
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
        <td><img src="{{asset('storage/product-image/'. $value->image)}}" alt="Product image" height="70px" width="80px"></td>
        <td>{{ $value->p_name }}</td>
        <td>{{ $value->c_name }}</td>
        <td>{{ $value->quantity }}</td>
        <td> &#36; {{ $value->mrp_price }}</td>
        <td> &#36; {{ $value->s_price }}</td>
        <td> &#36; {{ $value->b_price }}</td>
        <td>
          <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>                    
      </tr>

      @endforeach

      </tbody>
    </table>
    <div class="mt-sm-3">
      <a href="{{route('manageproducts')}}">View All Products >>>></a>
    </div>
  </div>
</div>

</div>

@endsection

