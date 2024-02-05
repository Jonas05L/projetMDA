@extends('layouts.default')

@section('content')
    <h1 class="navigation-title">{{ $title }}
    </h1>

    <ul class="show-container">
        <li class="show-element">
            <p>Référence : {{ $product->reference }}</p>
        </li>
        <li class="show-element">
            <p>Nom : {{ $product->name }}</p>
        </li>
        <li class="show-element">
            <p>Marque : {{ $product->brand }}</p>
        </li>
        <li class="show-element">
            <p>Code barre : {{ $product->ean_code }}</p>
        </li>
        <li class="show-element">
            <p>Stock : {{ $product->stock }}</p>
        </li>
        <li class="show-element">
            <p>Stock minimum : {{ $product->stock_min }}</p>
        </li>
        <li class="show-element">
            <p>Prix d'achat : {{ $product->buying_price }}</p>
        </li>
        <li class="show-element">
            <p>Prix de vente : {{ $product->selling_price }}</p>
        </li>
        <li class="show-element">
            <p>Description : {{ $product->description }}</p>
        </li>
        <li class="show-element">
            <p>Commentaire : {{ $product->comment }}</p>
        </li>
        <li class="show-element">
            <p>Status : {{ $product->status }}</p>
        </li>
    </ul>

    <br>
    <br>
    
    <a href="{{route('customers.index')}}">Retour</a>

@endsection