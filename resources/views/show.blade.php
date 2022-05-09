@extends('templates.base')

@section('title', $title)

@section('main')
    <div class="container">
        <div class="row g-4">
            <div class="col-8">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection