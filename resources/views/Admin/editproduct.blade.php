@extends('layouts.admin')
@section('title', 'Add Products')
@section('content')

<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<div class="ml-sm-4 mr-sm-4">
  <div class="row">
    <h1 class="ml-2">Add Product</h1>
  </div>
  <form method="POST" enctype="multipart/form-data" action="{{route('editproduct', ['id'=>$product->id])}}" class="content mb-1">
    @csrf
    <div class="row">
      <div class="col-md-8">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Add Product Details</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Product Title</label>
              <input type="text" id="inputName" value="{{$product->p_name}}" require name="p_name" placeholder="Product Title"  class="form-control">
            </div>
            <div class="form-group">
              <label for="inputDescription">Product Description</label>
                <textarea id="summernote" value="{{$product->long_description}}" require name="long_description" class="summerheight">
                  Product Description
                </textarea>
            </div>
            <div class="form-group">
              <label for="inputDescription">Product Short Description</label>
              <textarea id="summernote2" value="{{$product->short_description}}" require name="short_description" class="summerheight">
                Product Short Description
              </textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Product Image</h3>
            </div>
              <div class="card-body">
                <!-- Gallery -->
                <div class="row">
                  <div class="col-sm-6 imgUp">
                    <div class="imagePreview"></div>
                      <label class="btn btn-primary1 btn-success">
                        Upload<input type="file" name="image" require class="uploadFile img" value="Upload Photo">
                      </label>
                    </div>
                    <i class="fa fa-plus imgAdd"></i>
                  </div>
              </div>
              <div class="card pt-3 pb-3">
                <div class="col-12 pr-sm-3 pl-sm-4 pb-3">
                    <label for="inputName">Quantity</label>
                    <input type="number" value="{{$product->quantity}}" id="inputName" require name="quantity" class="form-control" placeholder="00.0">
                </div>
                <div class="col-12 pr-sm-3 pl-sm-4 pb-3">
                    <label for="inputName">MRP</label>
                    <input type="number" value="{{$product->mrp_price}}" id="inputName" require name="mrp_price" class="form-control" placeholder="00.0">
                </div>
                <div class="col-12 pr-sm-3 pl-sm-4 pb-3">
                    <label for="inputName">Selling Price</label>
                    <input type="number" value="{{$product->s_price}}" id="inputName" require name="s_price" class="form-control" placeholder="00.0">
                </div>
                <div class="col-12 pr-sm-3 pl-sm-4 pb-3">
                  <label for="inputName">Buying Price</label>
                  <input type="number" value="{{$product->b_price}}" id="inputName" require name="b_price" placeholder="00.0"  class="form-control">             
                </div>
              <div class="form-group pl-sm-4 pr-sm-4 col-12">
              <label for="category">Category</label>
                <select id="inputStatus" name="p_category" require class="form-control custom-select">
                <option value="{{$product->c_id}}">{{$product->c_name}}</option>
                  @foreach ($category as $value)
                    <option value="{{ $value->id }}">{{ $value->c_name }}</option>
                  @endforeach
                </select>
              </div>  
          </div>
          </div>
      </div>  
    </div>
    <div class="text-right">
        <input type="submit" value="Submit" class="btn btn-success mr-2 mb-3">
        <!-- <input type="submit" value="Make As Dirft" class="btn btn-success mr-2">
        <input type="submit" value="Preview" class="btn btn-success"> -->
        <a href="#" class="btn btn-danger mr-3 mb-3">Cancel</a>
      </div>
  </form>
</div>

<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>>
@endsection