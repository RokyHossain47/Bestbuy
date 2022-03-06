@extends('layouts.admin')
@section('title', 'Email Gatway')
@section('content')

<div class="ml-3 mr-3">

<div class="row">
    <div class="col-sm-6 card p-0 m-2">
        <h4 class="card-header bg-success">Email Gatway</h4>

        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Title<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Title" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Protocol<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Protocol" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Host<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Host" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Post<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Post" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">User Name<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="User Name" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Password<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="Password" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Mail Type <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Mail type" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Charset<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="utf-8" required>
            </div>
        </div>
        
        <div class="text-center mt-3">
            <input type="submit" value="Save" class="btn btn-success mr-2 mb-3">
        </div>
    </div>
    <div class="col-sm-5 card p-0 m-2">
        <h4 class="card-header bg-success">Test Your SMTP Email Server</h4> 
        <div class="form-group row m-2">   
            <label for="mobile_num" class="col-xs-3 col-sm-3 col-form-label">To<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input type="text" class="form-control" name="mobile_num" placeholder="example@gmail.com">
            </div>
        </div>
        <div class="form-group row m-2">   
            <label for="mobile_num" class="col-xs-3 col-sm-3 col-form-label">Subject<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input type="text" class="form-control" name="mobile_num" placeholder="Email Topic">
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="test_message" class="col-xs-3 col-sm-3 col-form-label">Message <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <textarea rows="5" class="form-control" name="test_message" id="test_message" placeholder="Test Message"></textarea>
            </div>
        </div>
        <div class="text-center mt-3">
            <input type="submit" value="Save" class="btn btn-success mr-2 mb-3">
        </div>
    </div>
</div>

</div>

@endsection