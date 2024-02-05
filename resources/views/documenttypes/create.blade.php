@extends('layouts.default')

@section('content')
<h1 class="navigation-title">{{$title}}</h1>

<form action="{{route('documenttypes.store')}}" method="POST" enctype="multipart/form-data">
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
            <label for="description" class="label-style">Description</label>
            <input type="text" name="description" id="description" class="input-style" value="{{old('description')}}">
            @error('description')
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

        <button type="submit" class="submit-button">Créer</button>
    </div>
</form>

{{-- @stop --}}

@endsection