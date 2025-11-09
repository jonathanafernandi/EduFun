@extends('layout.master')
@section('title', 'Writers')
@section('nav-link-writers', 'active')

@section('content')
    <div class="d-flex flex-column px-4 py-5 gap-4">
        <h3 class="fw-bold">Our Writers</h3>
        <div class="row g-5">
            @foreach ($writers as $writer)
                <div class="col-12 col-md-4">
                    <a href="{{ route('writer.profile', $id=$writer->id) }}" class="text-decoration-none text-dark">
                        <div class="d-flex flex-column gap-3 text-center">
                            <img src="{{ $writer->image_url }}" alt="" class="align-self-center" style="width: 50%; border-radius: 50%;">
                            <div class="fw-bold">
                                {{ $writer->name }}
                            </div>
                            {{ $writer->specialization }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection