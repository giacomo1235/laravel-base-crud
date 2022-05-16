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
                        <button class="btn btn-danger btn-delete" data-id="{{$comic->id}}">Delete</button>
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>

    {{ $comics->links() }}

    <section id="confirmation-overlay" class="overlay" style="display:none; ">
        <div class="popup">
            <h1>ne sei proprio sicuro?</h1>
           <div class="btn-container m-5">
                <button id="btn-no" class="btn btn-primary">No</button>
                <form  method="POST" data-base="{{ route('comics.index') }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger ">Yes</button>
                </form>
           </div>
        </div>
    </section>
</div>
@endsection