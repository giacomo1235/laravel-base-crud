@extends('templates.base')

@section('title', 'Comics Listing')

@section('main')
   <form class="m-5" method="POST" action="{{route('comics.store')}}">
       @csrf
       <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div> 
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>   
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection