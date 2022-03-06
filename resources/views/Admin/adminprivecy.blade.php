@extends('layouts.admin')
@section('title', 'Add Products')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/custome.css')}}">


<form action="{{route('adminprivecy')}}" method="POST">
    @csrf
    <div class=" ml-sm-5 mr-sm-5 form card">
    <div class="card-header bg-success">
        <h4>Update Privecy Policy</h4>
    </div>

    <div class="form-group row m-3">
        <label class="col-sm-2 col-form-label">Title<i class="text-danger">*</i></label>
        <div class="col-sm-10">
            <input name="title" value="{{$adminprivecy->title}}" class="form-control" placeholder="Title">
        </div>
    </div>

    <div class="form-group m-3">
        <label for="inputDescription" class="d-block">Privecy Policy</label>
        <textarea id="summernote" require name="description" class="summerheight">
        {{$adminprivecy->description}}
        </textarea>
    </div>
    <div class="row" >
        <div class="col-sm-12 col-sm-offset-3" align="center">
            <a href="#" class="btn btn-danger  w-md mb-5">Cancel</a>
            <button type="submit" class="btn btn-success  w-md mb-5">Update</button>
        </div>
    </div>
    </div>
</form>


@endsection