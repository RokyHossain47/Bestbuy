@extends('layouts.admin')
@section('title', 'Contact Us')
@section('content')
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/custome.css')}}">

<div class="row m-2">
    <div class="col-md-12">
        <div class="mb-4 card">
        <h4 class="card-header bg-success">Contact Us</h4>           
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="border_preview">
                <form action="#" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8">
                <input type="hidden" name="csrf_test_name" value="da7471bcf8ee8069b17c7ef90e88e395" />                
                <input type="hidden" name="article_id" value="44" style="display:none;" />
 
                    <div class="form-group row">
                        <label for="headline_en" class="col-sm-2 col-form-label">Headline English<i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input name="headline_en" value="Contact" class="form-control" placeholder="Headline English" type="text" id="headline_en">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="headline_fr" class="col-sm-2 col-form-label">Headline Français</label>
                        <div class="col-sm-10">
                            <input name="headline_fr" value="Contact Français" class="form-control" placeholder="Headline French" type="text" id="headline_fr">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1_en" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="article1_en" class="form-control editor" placeholder="Address" type="text" id="article1_en">1355 Market Street, Suite 900 San Francisco, CA 94103</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article1_fr" class="col-sm-2 col-form-label">Massage</label>
                        <div class="col-sm-10">
                            <textarea id="summernote" name="article1_fr" class="form-control editor" placeholder="Write Your Massage" type="text" id="article1_fr">Write Your Massage</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="article2_en" class="col-sm-2 col-form-label">Office Time</label>
                        <div class="col-sm-10">
                            <textarea id="summernote2" name="article2_en" class="form-control editor" placeholder="Office Time" type="text" id="article2_en">Write Yout Time</textarea>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-12 col-sm-offset-3" align="center">
                            <a href="#" class="btn btn-danger  w-md m-b-5">Cancel</a>
                            <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                        </div>
                    </div>
                </form>                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>

@endsection