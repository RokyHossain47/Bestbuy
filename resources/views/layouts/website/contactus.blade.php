@extends('layouts.website.main')
@section('title', 'Contact Page')
@section('content')

<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/custome.css')}}">

<section class="breadcrumb-section set-bg" data-setbg="{{asset('dist/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                    <div class="breadcrumb__option">
                        <a href="#">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<form method="POST" action="{{route('contact')}}" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-sm-3"></div>
      <div class="col-md-6">
        <div class="card card-outline mt-4">
          <div class="card-header bg-success">
            <h3 class="card-title">Compose New Message</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <input class="form-control" name="email" placeholder="To:">
            </div>
            <div class="form-group">
              <input class="form-control" name="subject" placeholder="Subject:">
            </div>
            <div class="form-group">
            <label for="inputDescription">Product Short Description</label>
                <textarea id="summernote" require name="massage" class="summerheight">
                    Product Short Description
                </textarea>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="float-right">
              <button type="button" class="btn btn-danger">Cancel</button>
              <button type="submit" class="btn btn-success"> Send</button>
            </div>
          </div> 
        </div>
      </div>
    </div>
    <div class="col-sm-3"></div>
  </div>
</form>

@endsection