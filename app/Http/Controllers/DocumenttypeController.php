<?php

namespace App\Http\Controllers;

use App\Models\Documenttype;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumenttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$documenttypes = Documenttype::all();
        $documenttypes = Documenttype::with('documents')->get();
        $title = 'Tous les types de documents';
        return view('documenttypes.index', compact('title', 'documenttypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Créer un document";
        return view('documenttypes.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|min:3|max:20',
            'name' => 'required|min:3|max:255',
            'description' => 'min:3|max:255',
            'status' => 'min:1|max:1'
        ]);

        $input = $request->all();

        $documenttype = Documenttype::create($input);

        return redirect()->route('documenttypes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documenttype $documenttype)
    {
        $title = "Le type de document : ";
        return view('documenttypes.show', compact('title', 'documenttype'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documenttype $documenttype)
    {
        $title = "Modifier le type de document";
        return view('documenttypes.edit', compact('title', 'documenttype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documenttype $documenttype)
    {
        $request->validate([
            'reference' => 'required|min:3|max:20',
            'name' => 'required|min:3|max:255',
            'description' => 'min:3|max:255',
            'status' => 'min:1|max:1'
        ]);

        $documenttype->update($request->all());

        return redirect()->route('documenttypes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documenttype $documenttype)
    {
        $documenttype->delete();
        return redirect()->route('documenttypes.index')->with('success', 'Le type de document a bien été supprimé');
    }
}
