@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Products List</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                {{-- <a class="btn btn-primary" href="{{ route("products.create") }}">Aggiungi un nuovo prodotto</a> --}}
            </div>
        </div>
        <div>
            <ul>
                @foreach ($comics as $comic)
                    <li><a href="">{{$comic->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
@endsection