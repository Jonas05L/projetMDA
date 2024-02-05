<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $title = 'Tous les produits';
        return view('products.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Créer un produit";
        return view('products.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'brand' => 'min:3|max:255',
            'ean_code' => 'min:3|max:255',
            'stock' => 'required|numeric',
            'stock_min' => 'required|numeric',
            'buying_price' => 'required|numeric',
            'selling_price' => 'required',
            'description' => 'min:3|max:255',
            'comment' => 'max:255',
            'status' => 'min:1|max:1',
        ]);

        $input = $request->all();
        $input['is_active'] = 1;

        $product = Product::create($input);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $title = "Le produit : ";
        return view('products.show', compact('title', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $title = "Modifier le produit";
        return view('products.edit', compact('title', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'brand' => 'min:3|max:255',
            'ean_code' => 'min:3|max:255',
            'stock' => 'required|numeric',
            'stock_min' => 'required|numeric',
            'buying_price' => 'required|numeric',
            'selling_price' => 'required',
            'description' => 'min:3|max:255',
            'comment' => 'max:255',
        ]);

        //$input['is_active'] = 1;

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Le client a bien été supprimé');
    }
}
