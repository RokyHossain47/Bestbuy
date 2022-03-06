@extends('layouts.admin')
@section('title', 'CMS')
@section('content')

<div class="mr-sm-4 ml-sm-4">
    <div class="row card">
        <form method="POST" action="{{route('siteidenty')}}" enctype="multipart/form-data">
        @csrf 
            <h4 class="card-header bg-success">Top Header</h4>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group row ml-sm-4 mt-sm-5">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" value="{{@$siteidenty->email}}" class="form-control" placeholder="Example@gmail.com" type="text">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-4">
                        <label class="col-sm-2 col-form-label">Top Text</label>
                        <div class="col-sm-10">
                            <input name="text" value="{{@$siteidenty->text}}" class="form-control" placeholder="50% off on your first purches" type="text">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-4">
                        <label class="col-xs-3 col-sm-3 col-form-label">Image</label>
                        <div class="col-xs-9 col-sm-9">
                            <input type="file" name="image" value="">
                            <input type="hidden" name="old_image" value="">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-4">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input name="phone" value="{{$siteidenty->phone}}" class="form-control" placeholder="+88012548632" type="number">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-4">
                        <label class="col-sm-2 col-form-label">Support Time</label>
                        <div class="col-sm-10">
                            <input name="time" value="{{$siteidenty->time}}" class="form-control" placeholder="24/7 Support" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group row ml-sm-2 mt-sm-5">
                        <label class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                            <input name="facebook" value="{{@$siteidenty->facebook}}" class="form-control" placeholder="https://www.facebook.com" type="text">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-2">
                        <label class="col-sm-2 col-form-label">twitter</label>
                        <div class="col-sm-10">
                            <input name="twitter" value="{{@$siteidenty->twitter}}"  class="form-control" placeholder="https://www.twitter.com" type="text">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-2">
                        <label class="col-sm-2 col-form-label">Linkedin</label>
                        <div class="col-sm-10">
                            <input name="linkedin" value="{{@$siteidenty->linkedin}}" class="form-control" placeholder="https://www.Linkedin.com" type="text">
                        </div>
                    </div>
                    <div class="form-group row ml-sm-2">
                        <label class="col-sm-2 col-form-label">Pinterest</label>
                        <div class="col-sm-10">
                            <input name="pinterest" value="{{@$siteidenty->pinterest}}" class="form-control" placeholder="https://www.Pinterest.com" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-sm-12 col-sm-offset-3" align="center">
                    <a href="#" class="btn btn-danger m-b-5">Cancel</a>
                    <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection