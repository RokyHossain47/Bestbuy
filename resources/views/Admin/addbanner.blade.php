@extends('layouts.admin')
@section('title', 'CMS')
@section('content')

<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/custome.css')}}">


<div>
    <form method="POST" action="{{route('addbanner')}}" enctype="multipart/form-data">
    @csrf
    <div class="ml-sm-4 mr-sm-4 form card">
        <label for="inputDescription" class="card-header bg-success d-block">Add Banner</label>
            
            <div class="form-group row m-2">
                <label for="title" class="col-xs-3 col-sm-3 col-form-label">Name<i class="text-danger">*</i></label>
                <div class="col-xs-9 col-sm-9">
                    <input name="name" type="text" class="form-control" value="{{$editbanner->name}}" required>
                </div>
            </div>
            <div class="form-group row m-2">
                <label for="title" class="col-xs-3 col-sm-3 col-form-label">Image<i class="text-danger">*</i></label>
                    <div class="col-xs-9 col-sm-9">
                    <input type="file" name="image" value="{{$editbanner->image}}">
                    <input type="hidden" name="old_image" value="{{$editbanner->image}}">
                </div>
            </div>
            

        <div class="form-group ml-3 mr-3">
            <label for="inputDescription" class="ml-2 d-block"></label><b>Description</b></label>
            <textarea id="summernote" require name="description" class="summerheight">
                {{$editbanner->description}}
            </textarea>
        </div>
        <div class="row" >
            <div class="col-sm-12 col-sm-offset-3" align="center">
                <a href="#" class="btn btn-danger  w-md mb-sm-5">Cancel</a>
                <button type="submit" class="btn btn-success  w-md mb-sm-5">Update</button>
            </div>
        </div>
    </form>

    </div>
</div>

@endsection