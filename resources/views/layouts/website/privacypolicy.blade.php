@extends('layouts.website.main')
@section('title', 'Contact Page')
@section('content')

<div class="card">
    
    <h2 style="text-align: center;"><b>{{$adminprivecy->title}}</b></h2>
    <div class="m-sm-4 p-sm-4">{!! $adminprivecy->description !!} </div>
</div>

@endsection