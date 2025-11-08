@extends('layout.master')
@section('title', 'Home')
@section('nav-link-home', 'active')

@section('content')
<div class="row">
    <div class="col-12">
        <img src="{{ asset('img/home/HomeCoverImage.jpg') }}" alt="" class="img-fluid">
    </div>
</div>
@endsection