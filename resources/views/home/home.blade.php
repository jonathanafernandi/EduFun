@extends('layout.master')
@section('title', 'Home')
@section('nav-link-home', 'active')

@section('content')
<div class="row">
    <div class="col-12">
        <img src="{{ asset('img/home/HomeCoverImage.jpg') }}" alt="" class="img-fluid">
    </div>
</div>

<div class="px-4 py-5">
    <div class="d-flex flex-column gap-4 px-4">
        @foreach ($articles as $article)
            <div class="row">
                <div class="col-3">
                    <img src="{{ $article->image_url }}" class="img-fluid" alt="" style="border-radius: 25px;">
                </div>
                <div class="col-9 d-flex flex-column">
                    <div class="row fw-bold">
                        {{ $article->title }}
                    </div>
                    <div class="row fw-light">
                        {{ $article->posted_at }} | by: {{ Str::words($article->writer->name, 1, '') }}
                    </div>
                    <div class="row">
                        {{ Str::words($article->short_info, 15) }}
                    </div>
                    <button type="button" class="btn btn-dark fw-bold mt-auto align-self-end" style="width: 12rem; max-width: 100%; border-radius: 20px;">read more...</button>
                </div>
            </div>
        @endforeach
    </div>
    
</div>

@endsection