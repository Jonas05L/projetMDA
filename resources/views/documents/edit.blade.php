@extends('layouts.default')

@section('content')
<h1 class="update-title">{{$title}}</h1>

<form action="{{route('documents.update', $document->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex flex-col">
        <div class="form-element">
            <label for="customer_id" class="label-style">Client</label>
            <select name="customer_id" id="customer_id" class="input-style">
                @if($document->customer)
                    <option value="{{$document->customer->id}}">{{$document->customer->name}}</option>
                @else 
                    <option value=""></option>
                @endif
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
                @if($document->documenttype)
                    <option value="{{$document->documenttype->id}}">{{$document->documenttype->name}}</option>
                @else 
                    <option value=""></option>
                @endif
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
            <input type="text" name="reference" id="reference" class="input-style" value="{{$document->reference}}">
            @error('reference')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="totalhvat" class="label-style">Total hors TVA</label>
            <input type="text" name="totalhvat" id="totalhvat" class="input-style" value="{{$document->totalhvat}}">
            @error('totalhvat')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="vat" class="label-style">TVA</label>
            <input type="text" name="vat" id="vat" class="input-style" value="{{$document->vat}}">
            @error('vat')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="totalttc" class="label-style">Total toute charges comprises</label>
            <input type="number" name="totalttc" id="totalttc" class="input-style" value="{{$document->totalttc}}">
            @error('totalttc')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="comment" class="label-style">Commentaire</label>
            <input type="text" name="comment" id="comment" class="input-style" value="{{$document->comment}}">
            @error('comment')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="status" class="label-style">Status</label>
            <input type="text" name="status" id="status" class="input-style" value="{{$document->status}}">
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
                    <option value="{{ $product->id }}"
                        @if(in_array($product->id, $document->products->pluck('id')->toArray()))
                            selected
                        @endif
                    >{{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        

        <button type="submit" class="submit-button">Mettre à jour</button>
    </div>
</form>

{{-- @stop --}}

@endsection
