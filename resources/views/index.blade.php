@extends('templates.base')

@section('title', 'Comics Listing')

@section('main')
<div class="container">
    
    <div class="row g-4">
        @foreach ($comics as $comic)
            <div class="col-4">
                <div class="card h-100">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h2 class="card-title"><a href="{{ route('show', $comic->id) }}">{{ $comic->title }}</a></h2>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $comics->links() }}
</div>
@endsection