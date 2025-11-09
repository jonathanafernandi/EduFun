@extends('layout.master')
@section('title', $article->title)

@section('content')
    <div class="d-flex flex-column px-4 py-5 gap-1">
        <h4 class="fw-bold">{{ $article->title }}</h4>
        <div class="d-flex flex-column px-4 gap-1">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <img src="{{ $article->image_url }}" class="img-fluid" alt="" style="border-radius: 25px;">
                </div>
            </div>
            <div class="d-flex flex-column px-4 gap-3">
                <div class="row fw-light">
                    <div class="p-0">
                        {{ $article->posted_at->format('j F Y') }} | by: <a href="{{ route('writer.profile', $id=$article->writer->id) }}" class="text-dark text-decoration-none">{{ Str::words($article->writer->name, 1, '') }}</a>
                    </div>
                </div>
                <div class="row">
                    {!! nl2br($article->short_info) !!}
                </div>
            </div>
        </div>
    </div>
@endsection