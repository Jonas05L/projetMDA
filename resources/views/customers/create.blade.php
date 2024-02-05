@extends('layouts.default')

@section('content')
<h1 class="navigation-title">{{$title}}</h1>

<form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-col">
        <div class="form-element">
            <label for="reference" class="label-style">Référence</label>
            <input type="text" name="reference" id="reference" class="input-style" value="{{old('reference')}}">
            @error('reference')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="name" class="label-style">Nom</label>
            <input type="text" name="name" id="name" class="input-style" value="{{old('name')}}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="email" class="label-style">Email</label>
            <input type="text" name="email" id="email" class="input-style" value="{{old('email')}}">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="phone" class="label-style">Numéro de téléphone</label>
            <input type="number" name="phone" id="phone" class="input-style" value="{{old('phone')}}">
            @error('phone')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="website" class="label-style">Site</label>
            <input type="text" name="website" id="website" class="input-style" value="{{old('website')}}">
            @error('website')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="vat_number" class="label-style">Numéro TVA</label>
            <input type="text" name="vat_number" id="vat_number" class="input-style" value="{{old('vat_number')}}">
            @error('vat_number')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="description" class="label-style">Description</label>
            <input type="text" name="description" id="description" class="input-style" value="{{old('description')}}">
            @error('description')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="comment" class="label-style">Commentaire</label>
            <input type="text" name="comment" id="comment" class="input-style" value="{{old('comment')}}">
            @error('comment')
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