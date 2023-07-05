@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettagli: {{$comic->title}}</h1>
    <hr>
    <h2>{{$comic->description}}</h2>
    <h2>{{$comic->price}}</h2>
    <h2>{{$comic->type}}</h2>
    <h2>{{$comic->artists}}</h2>
    <div class="row g-4">
        <div class="col">
            <a class="btn btn-primary my-3" href="{{ route("comics.edit", $comic) }}">Modifica questo prodotto</a>
            <form action="{{ route('comics.destroy', $comic) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger my-3" type="submit" value="Cancella il prodotto">
            </form>
            <a href="{{ route("comics.index") }}">Torna alla lista prodotti</a>
        </div>
    </div>

</div>
@endsection