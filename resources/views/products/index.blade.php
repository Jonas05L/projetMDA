@extends('layouts.default')

@section('content')
    <div class="main-content__top">
        <h1 class="main-content__title">
            {{ $title }}
        </h1>
        <a href="{{ route('products.create') }}" class="link create-link">
            <svg width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <title>plus-circle</title>
                <desc>Created with Sketch Beta.</desc>
                <defs>   
            </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-464.000000, -1087.000000)" fill="#000000">
                        <path d="M480,1117 C472.268,1117 466,1110.73 466,1103 C466,1095.27 472.268,1089 480,1089 C487.732,1089 494,1095.27 494,1103 C494,1110.73 487.732,1117 480,1117 L480,1117 Z M480,1087 C471.163,1087 464,1094.16 464,1103 C464,1111.84 471.163,1119 480,1119 C488.837,1119 496,1111.84 496,1103 C496,1094.16 488.837,1087 480,1087 L480,1087 Z M486,1102 L481,1102 L481,1097 C481,1096.45 480.553,1096 480,1096 C479.447,1096 479,1096.45 479,1097 L479,1102 L474,1102 C473.447,1102 473,1102.45 473,1103 C473,1103.55 473.447,1104 474,1104 L479,1104 L479,1109 C479,1109.55 479.447,1110 480,1110 C480.553,1110 481,1109.55 481,1109 L481,1104 L486,1104 C486.553,1104 487,1103.55 487,1103 C487,1102.45 486.553,1102 486,1102 L486,1102 Z" id="plus-circle" sketch:type="MSShapeGroup">
            </path>
                    </g>
                </g>
            </svg>
            Ajouter un produit
        </a>
    </div>
    
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Référence</th>
                <th class="px-4 py-2">Nom</th>
                <th class="px-4 py-2">Marque</th>
                <th class="px-4 py-2">Code barre</th>
                <th class="px-4 py-2">Stock</th>
                <th class="px-4 py-2">Stock minimum</th>
                <th class="px-4 py-2">Prix d'achat</th>
                <th class="px-4 py-2">Prix de vente</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Commentaire</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->reference }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->brand }}</td>
                    <td class="border px-4 py-2">{{ $product->ean_code }}</td>
                    <td class="border px-4 py-2">{{ $product->stock }}</td>
                    <td class="border px-4 py-2">{{ $product->stock_min }}</td>
                    <td class="border px-4 py-2">{{ $product->buying_price }} €</td>
                    <td class="border px-4 py-2">{{ $product->selling_price }} €</td>
                    <td class="border px-4 py-2">{{ $product->description }}</td>
                    <td class="border px-4 py-2">{{ $product->comment }}</td>
                    <td class="border px-4 py-2">{{ $product->status }}</td>
                    <td class="table-actions">
                        <a href="{{ route('products.show', $product->id) }}"
                            class="link see-link">Voir</a>
                        <a href="{{ route('products.edit', $product->id) }}"
                            class="link update-link">Modifier</a>
                        <form class="inline-block" action="{{ route('products.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="link delete-link">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop