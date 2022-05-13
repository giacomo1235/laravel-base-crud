@extends('templates.base')

@section('title', 'Comics Listing')

@section('main')
<div class="container">
    
    <div class="row g-4 ">
        @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    <a class="nav-link" href="{{ route('comics.show', $comic->id) }}">
                        <img class="w-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </a>
                    <div class="card-body">
                        <h2 class="card-title"><a class="nav-link" href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                    <div class=" m-2 d-flex justify-content-around">
                        <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ">Delete</button>
                        </form>
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>

    {{ $comics->links() }}
</div>
@endsection