@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Dettagli: {{$comic->description}}</h1>
    <hr>
    <h2>{{$comic->price}}</h2>
    <h2>{{$comic->type}}</h2>
    <h2>{{$comic->artists}}</h2>
    <div class="row g-4">
        <div class="col">
            <a href="{{ route("home") }}">Torna alla lista prodotti</a>
        </div>
    </div>

</div>
@endsection