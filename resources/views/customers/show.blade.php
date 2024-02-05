@extends('layouts.default')

@section('content')
    <h1 class="navigation-title">{{ $title }}
    </h1>

    <ul class="show-container">
        <li class="show-element">
            <p>Référence : {{ $customer->reference }}</p>
        </li>
        <li class="show-element">
            <p>Nom : {{ $customer->name }}</p>
        </li>
        <li class="show-element">
            <p>Email : {{ $customer->email }}</p>
        </li>
        <li class="show-element">
            <p>Numéro de téléphone : {{ $customer->phone }}</p>
        </li>
        <li class="show-element">
            <p>Site : {{ $customer->website }}</p>
        </li>
        <li class="show-element">
            <p>Numéro de TVA : {{ $customer->vat_number }}</p>
        </li>
        <li class="show-element">
            <p>Description : {{ $customer->description }}</p>
        </li>
        <li class="show-element">
            <p>Commentaire : {{ $customer->comment }}</p>
        </li>
        <li class="show-element">
            <p>Status : {{ $customer->status }}</p>
        </li>
    </ul>

    <br>
    <br>
    
    <a href="{{route('customers.index')}}">Retour</a>

@endsection