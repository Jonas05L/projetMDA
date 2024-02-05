@extends('layouts.default')

@section('content')
<h1 class="update-title">{{$title}}</h1>

<form action="{{route('customers.update', $customer->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex flex-col">
        <div class="form-element">
            <label for="reference" class="label-style">Référecne</label>
            <input type="text" name="reference" id="reference" class="input-style" value="{{$customer->reference}}">
            @error('reference')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="name" class="label-style">Nom</label>
            <input type="text" name="name" id="name" class="input-style" value="{{$customer->name}}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="email" class="label-style">Email</label>
            <input type="text" name="email" id="email" class="input-style" value="{{$customer->email}}">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="phone" class="label-style">Numéro de téléphone</label>
            <input type="number" name="phone" id="phone" class="input-style" value="{{$customer->phone}}">
            @error('phone')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="website" class="label-style">Site</label>
            <input type="text" name="website" id="website" class="input-style" value="{{$customer->website}}">
            @error('website')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="vat_number" class="label-style">Numéro de TVA</label>
            <input type="text" name="vat_number" id="vat_number" class="input-style" value="{{$customer->vat_number}}">
            @error('vat_number')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="description" class="label-style">Description</label>
            <input type="text" name="description" id="description" class="input-style" value="{{$customer->description}}">
            @error('description')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="comment" class="label-style">Commentaire</label>
            <input type="text" name="comment" id="comment" class="input-style" value="{{$customer->comment}}">
            @error('comment')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        {{-- <div class="form-element">
            <label for="is_active" class="label-style">Est actif</label>
            <input type="checkbox" name="is_active" id="is_active" class="input-style" value="{{$customer->is_active}}">
            @error('is_active')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div> --}}
        <div class="form-element">
            <label for="is_active" class="label-style">Est actif</label>
            <input type="checkbox" name="is_active" id="is_active" class="input-style" {{ $customer->is_active ? 'checked' : '' }}>
            @error('is_active')
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