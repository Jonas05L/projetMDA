@extends('layouts.default')

@section('content')
<h1 class="tenavigation-title">{{$title}}</h1>

<form action="{{route('documents.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col">
        <div class="form-element">
            <label for="customer_id" class="label-style">Client</label>
            <select name="customer_id" id="customer_id" class="input-style">
                <option value="">Sélectionner le client</option>
                @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{ $customer->name }}</option>
                @endforeach
            </select>
            @error('customer_id')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-element">
            <label for="documenttype_id" class="label-style">Type de document</label>
            <select name="documenttype_id" id="documenttype_id" class="input-style">
                <option value="">Sélectionner le type de document</option>
                @foreach ($documenttypes as $documenttype)
                    <option value="{{$documenttype->id}}">{{ $documenttype->name }}</option>
                @endforeach
            </select>
            @error('documenttype_id')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-element">
            <label for="reference" class="label-style">reference</label>
            <input type="text" name="reference" id="reference" class="input-style" value="{{old('reference')}}">
            @error('reference')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="totalhvat" class="label-style">Total hors TVA</label>
            <input type="text" name="totalhvat" id="totalhvat" class="input-style" value="{{old('totalhvat')}}">
            @error('totalhvat')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="vat" class="label-style">TVA</label>
            <input type="text" name="vat" id="vat" class="input-style" value="{{old('vat')}}">
            @error('vat')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="totalttc" class="label-style">Total toute charges comprises</label>
            <input type="number" name="totalttc" id="totalttc" class="input-style" value="{{old('totalttc')}}">
            @error('totalttc')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="comment" class="label-style">comment</label>
            <input type="text" name="comment" id="comment" class="input-style" value="{{old('comment')}}">
            @error('comment')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="status" class="label-style">Status</label>
            <input type="text" name="status" id="status" class="input-style" value="{{old('status')}}">
            @error('status')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-element">
            <label for="product_id" class="label-style">Produit</label>
            <select name="product_id[]" id="product_id" class="input-style" multiple>
                <option value="">Sélectionner les produits</option>
                @foreach ($products as $product)
                    <option value="{{$product->id}}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="submit-button">Créer</button>
    </div>
</form>

{{-- @stop --}}

@endsection
