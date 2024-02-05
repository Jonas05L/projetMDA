@extends('layouts.default')

@section('content')
    <h1 class="navigation-title">{{ $title }}
    </h1>

    <!-- Rajouter la liaison customer_id et documenttype_id -->

    <ul class="show-container">
        <li class="show-element">
            <p>Référence : {{ $document->reference }}</p>
        </li>
        <li class="show-element">
            <p>Total hors TVA : {{ $document->totalhvat }}</p>
        </li>
        <li class="show-element">
            <p>TVA : {{ $document->vat }}</p>
        </li>
        <li class="show-element">
            <p>Total toutes charges comprises : {{ $document->totalttc }}</p>
        </li>
        <li class="show-element">
            <p>Commentaire : {{ $document->comment }}</p>
        </li>
        <li class="show-element">
            <p>Status : {{ $document->status }}</p>
        </li>
    </ul>

    <br>
    <br>
    
    <a href="{{route('documents.index')}}">Retour</a>

@endsection