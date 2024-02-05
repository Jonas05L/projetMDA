@extends('layouts.default')

@section('content')
<h1 class="update-title">{{$title}}</h1>

<form action="{{route('documenttypes.update', $documenttype->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex flex-col">
        <div class="form-element">
            <label for="reference" class="label-style">Référence</label>
            <input type="text" name="reference" id="reference" class="input-style" value="{{$documenttype->reference}}">
            @error('reference')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="name" class="label-style">Nom</label>
            <input type="text" name="name" id="name" class="input-style" value="{{$documenttype->name}}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="description" class="label-style">Description</label>
            <input type="text" name="description" id="description" class="input-style" value="{{$documenttype->description}}">
            @error('description')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-element">
            <label for="status" class="label-style">Status</label>
            <input type="text" name="status" id="status" class="input-style" value="{{$documenttype->status}}">
            @error('status')
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