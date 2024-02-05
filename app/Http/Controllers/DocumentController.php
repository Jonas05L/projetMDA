<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Documenttype;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::with('documenttype', 'customer', 'products')->get();
        $title = 'Tous les documents';
        return view('documents.index', compact('title', 'documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Créer un document";
        $documenttypes = Documenttype::all();
        $customers = Customer::all();
        $products = Product::all();
        return view('documents.create', compact('title', 'documenttypes', 'customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|numeric',
            'documenttype_id' => 'required|numeric',
            'reference' => 'required|min:3|max:255',
            'totalhvat' => 'numeric',
            'vat' => 'numeric',
            'totalttc' => 'numeric',
            'comment' => 'max:255',
            'status' => 'min:1|max:1',
            'product_id' => 'required'
        ]);

        $input = $request->all();
        $document = Document::create($input);

        $product_id = $request->input('product_id', []);
        $document->products()->sync($product_id);

        return redirect()->route('documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        $title = "Le document : ";
        return view('documents.show', compact('title', 'document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $title = "Modifier le document";
        $documenttypes = Documenttype::all();
        $customers = Customer::all();
        $products = Product::all();

        return view('documents.edit', compact('title', 'document', 'documenttypes', 'customers', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'customer_id' => 'required|numeric',
            'documenttype_id' => 'required|numeric',
            'reference' => 'required|min:3|max:255',
            'totalhvat' => 'numeric',
            'vat' => 'numeric',
            'totalttc' => 'numeric',
            'comment' => 'max:255',
            'status' => 'min:1|max:1',
            'product_id' => 'required'
        ]);
        $document->update($request->all());
        //$document->update($request->only(['customer_id', 'documenttype_id', 'reference', 'totalhvat', 'vat', 'totalttc', 'comment', 'status']));

        // Sync the associated products
        $product_id = $request->input('product_id', []);
        $document->products()->sync($product_id);

        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->products()->detach();
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'Le document a bien été supprimé');
    }
}
