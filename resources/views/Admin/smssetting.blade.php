@extends('layouts.admin')
@section('title', 'New Order')
@section('content')

<div class="ml-3 mr-3">

<div class="row">
    <div class="col-sm-6 card p-0 m-2">
        <h4 class="card-header bg-success">SMS Setting</h4>

        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Gateway <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Gateway" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Title <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Title" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Host <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Host Name" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">Username <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="Username" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">User ID<i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="23698425" required>
            </div>
        </div>
        <div class="form-group row m-2">
            <label for="title" class="col-xs-3 col-sm-3 col-form-label">API Key <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input name="title" type="text" class="form-control" placeholder="2639874521268421" required>
            </div>
        </div>
        <div class="text-center mt-3">
            <input type="submit" value="Save" class="btn btn-success mr-2 mb-3">
        </div>
    </div>
    <div class="col-sm-5 card p-0 m-2">
        <h4 class="card-header bg-success">Test Your SMS</h4> 
        <div class="form-group row m-2">   
            <label for="mobile_num" class="col-xs-3 col-sm-3 col-form-label">Mobile No. <i class="text-danger">*</i></label>
            <div class="col-xs-9 col-sm-9">
                <input type="text" class="form-control" name="mobile_num" id="mobile_num" placeholder="e. 88xxxxxxxx">
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