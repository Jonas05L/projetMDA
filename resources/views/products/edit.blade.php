@extends('layouts.default')

@section('content')
<h1 class="update-title">{{$title}}</h1>

<form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex flex-col">
        <div class="form-element">
            <label for="reference" class="label-style">Référence</label>
            <input type="text" name="reference" id="reference" class="input-style" value="{{$product->reference}}">
            @error('reference')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="name" class="label-style">Nom</label>
            <input type="text" name="name" id="name" class="input-style" value="{{$product->name}}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="brand" class="label-style">Marque</label>
            <input type="text" name="brand" id="brand" class="input-style" value="{{$product->brand}}">
            @error('brand')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="ean_code" class="label-style">Code barre</label>
            <input type="number" name="ean_code" id="ean_code" class="input-style" value="{{$product->ean_code}}">
            @error('ean_code')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="stock" class="label-style">Stock</label>
            <input type="text" name="stock" id="stock" class="input-style" value="{{$product->stock}}">
            @error('stock')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="stock_min" class="label-style">Stock minimum</label>
            <input type="text" name="stock_min" id="stock_min" class="input-style" value="{{$product->stock_min}}">
            @error('stock_min')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="buying_price" class="label-style">Prix d'achat</label>
            <input type="text" name="buying_price" id="buying_price" class="input-style" value="{{$product->buying_price}}">
            @error('buying_price')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="selling_price" class="label-style">Prix de vente</label>
            <input type="text" name="selling_price" id="selling_price" class="input-style" value="{{$product->selling_price}}">
            @error('selling_price')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="description" class="label-style">description</label>
            <input type="text" name="description" id="description" class="input-style" value="{{$product->description}}">
            @error('description')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="comment" class="label-style">comment</label>
            <input type="text" name="comment" id="comment" class="input-style" value="{{$product->comment}}">
            @error('comment')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="submit-button">Mettre à jour</button>
    </div>
</form>

{{-- @stop --}}

@endsection