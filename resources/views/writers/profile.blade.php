@extends('layout.master')
@section('title', $writer->name)
@section('nav-link-writers', 'active')

@section('content')
    <div class="d-flex flex-column px-4 py-5 gap-1">
        <a href="{{ route('writer.profile', $id=$writer->id) }}" class="text-decoration-none text-dark">
            <div class="row align-items-center">
                <div class="col-md-1">
                    <img src="{{ $writer->image_url }}" alt="" class="align-self-center img-fluid" style="border-radius: 50%;">
                </div>
                <div class="col-md-11">
                    <div class="fw-bold">
                        {{ $writer->name }}
                    </div>
                    {{ $writer->specialization }}
                </div>
            </div>
        </a>
        <div class="py-3">
            <div class="d-flex flex-column gap-4 px-4">
                @foreach ($writer->articles as $article)
                    <div class="row g-4">
                        <div class="col-md-3">
                            <img src="{{ $article->image_url }}" class="img-fluid" alt="" style="border-radius: 25px;">
                        </div>
                        <div class="col-md-9 d-flex flex-column">
                            <div class="row fw-bold">
                                {{ $article->title }}
                            </div>
                            <div class="row fw-light">
                                <div class="p-0">
                                    {{ $article->posted_at->format('j F Y') }} | by: <a href="{{ route('writer.profile', $id=$article->writer->id) }}" class="text-dark text-decoration-none">{{ Str::words($article->writer->name, 1, '') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                {{ Str::words($article->short_info, 15) }}
                            </div>
                            <a href="{{ route('article.details', $id=$article->id) }}" class="btn btn-dark fw-bold mt-auto align-self-end" style="width: 12rem; max-width: 100%; border-radius: 20px;">read more...</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection