@extends('layouts.default')

@section('content')
    <h1 class="navigation-title">{{ $title }}
    </h1>

    <ul class="show-container">
        <li class="show-element">
            <p>Référence : {{ $documenttype->reference }}</p>
        </li>
        <li class="show-element">
            <p>Nom : {{ $documenttype->name }}</p>
        </li>
        <li class="show-element">
            <p>Description : {{ $documenttype->description }}</p>
        </li>
        <li class="show-element">
            <p>Status : {{ $documenttype->status }}</p>
        </li>
    </ul>


    <br>
    <br>
    
    <a href="{{route('documenttypes.index')}}">Retour</a>

@endsection