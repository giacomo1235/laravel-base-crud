@extends('templates.base')

@section('title', $title)

@section('main')

    <div class="card m-auto" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text"><small class="text-muted">Price: {{ $comic->price }} £</small></p>
              </div>
            </div>
          </div>
    </div>

@endsection

{{-- <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-8">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div> --}}