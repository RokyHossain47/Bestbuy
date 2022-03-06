@extends('layouts.admin')
@section('title', 'Manage Products')
@section('content')


<div class="card mr-sm-3 ml-sm-3">
  <div class="card-header bg-success">
    <h3 class="card-title">Massage Box</h3>
  </div>
  <!-- /.card-header -->
  <form method="POST" action="{{route('contact')}}" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <table id="example1" cellspacing="0" class="table table-hover table-bordered table-striped">
      <thead>
      <tr class="">
        <th class="col-sm-1">ID</th>  
        <th class="col-sm-7">Massage</th>
        <th class="col-sm-2">Email</th>
        <th class="col-sm-2">Date</th>
      </tr>
      </thead>
      <tbody>
      @foreach($massage as $value)
      <tr>

        
        <td>1</td>  
        <td>
            <strong><span class="d-block">{{$value->subject}}</span></strong>
            <span class="d-block">{{$value->massage}}</span>
        </td>
        <td>{{$value->email}}</td>
        <td>{{$value->created_at}}</td> 
                         
      </tr>
      @endforeach

      </tbody>
      <tfoot>
      <tr class="">
        <th class="col-sm-1">ID</th>  
        <th class="col-sm-7">Massage</th>
        <th class="col-sm-2">Email</th>
        <th class="col-sm-2">Date</th>
      </tr>
      </tfoot>
    </table>
  </div>
  </form>
</div>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
@endsection