@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create product</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
            
                <label for="name">title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old("title") }}">
                @error("title")
                <div class="invalid-feedback">Il titolo deve essere di almeno cinque lettere e massimo di 50 e non puo esseere lasciato vuoto</div>
                @enderror


                <label for="name">description</label>
                <textarea name="description" class="form-control  @error('description') is-invalid @enderror" cols="30" rows="5">{{ old("description") }}</textarea>
                @error("description")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{old("thumb")}}">
                @error("thumb")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">price</label>
                <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" value="{{old("price")}}">
                @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">series</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{old("series")}}">
                @error("series")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">sale_date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" value="{{old("sale_date")}}">
                @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">type</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{old("type")}}">
                @error("type")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">artists</label>
                <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" value="{{old("artists")}}">
                @error("artists")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">writers</label>
                <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{old("writers")}}">
                @error("writers")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection