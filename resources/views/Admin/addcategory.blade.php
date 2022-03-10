@extends('layouts.admin')
@section('title', 'Add category')
@section('content')
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> 
<section class="card m-sm-1">
<h4 class="card-header">Category</h4>
<div class="m-1 row">

  <form action="addcategory" class="col-3 m-1 card" method="post">
  @csrf                    
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="c_name" type="text" class="form-control form-control-md" id="exampleInputEmail1"
            placeholder="category Name" required>
    </div>
    <div class="form-group ">
        <label for="parentcategory">category Type</label>
        <select name="category" id="parentcategory" class="form-control form-control-md" required>
            <option value="0">Parent Category</option>
            @if($category)
              @foreach ($category as $value)
                <option value="{{ $value->id }}">{{ $value->c_name }}</option>
              @endforeach
            @endif
        </select>
    </div>
    <div class="form-group ">
      <label for="categoryStatus">Status</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="1" name="status" checked="">
        <label class="form-check-label">Active</label>
      </div>
      <div class="form-check">
            <input class="form-check-input" type="radio" value="0" name="status">
            <label class="form-check-label">In Active</label>
      </div>
    </div>
                  
    <button type="submit" class="btn m-sm-2 btn-success">Add New category</button>
  </form>


  <div class="card-body card m-1 col-8 w-100">
    <table class="table">
      <thead class="bg-success">
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Parent Category</th>
          <th>Status</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($m_category as $value)
        <tr>
            <td>#{{ $value->id }}</td>
            <td>{{ $value->c_name }}</td>
            <td>
            @if ($value->category)
                @foreach ($m_category as $category_name)
                  @if ($category_name->id==$value->category)
                    {{ $category_name->c_name}}
                      @endif
                @endforeach
                @else
                  <b>Parent Category</b>
            @endif
            </td>
            <td>
              @if($value->status==1)
                Active
              @else
                Inactive
              @endif
            </td>
            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal"><i class=" fas fa-pen-alt"></i>
              </button>
              <form class="float-right m-0" method="post" action="{{route('delete', ['id'=>$value->id])}}">
                @method('delete')
                @csrf
                <div class="form-row border-0">
                    <input type="hidden" name="btndelete" value="{{ $value->id }}">
                    <button> <i class="btn btn-danger fa fa-trash-alt"></i></button>
                </div>
              </form>
            </td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>

  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

      <form action="addcategory" class="p-sm-2 card" method="post">
  @csrf                    
    <div class="form-group">
        <label for="InputEmail1">Name</label>
        <input name="c_name" type="text" value="" class="form-control form-control-md" id="InputEmail1"
            placeholder="category Name" required>
    </div>
    <div class="form-group ">
        <label for="parentcategory">category Type</label>
        <select name="category" id="parentcategory" class="form-control form-control-md" required>
            <option value="0">Parent Category</option>
            @if($category)
            @foreach ($category as $value)
              <option value="{{ $value->id }}">{{ $value->c_name }}</option>
            @endforeach
            @endif
        </select>
    </div>
    <div class="form-group ">
      <label for="categoryStatus">Status</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" checked="">
        <label class="form-check-label">Active</label>
      </div>
      <div class="form-check">
            <input class="form-check-input" type="radio" value="0" name="status">
            <label class="form-check-label">In Active</label>
      </div>
    </div>
                  
    <button type="submit" class="btn m-sm-2 btn-success">Add New category</button>
  </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</section>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection