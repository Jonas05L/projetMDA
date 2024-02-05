<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Liste des clients';
        $customers = Customer::all();

        return view('customers.index', compact('title', 'customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Créer un client";
        return view('customers.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'email' => 'min:3|max:255',
            'phone' => 'numeric',
            'website' => 'max:255',
            'vat_number' => 'min:6|max:255',
            'description' => 'min:3|max:255',
            'comment' => 'max:255',
            'status' => 'min:1|max:1',
            //'is_active' => 'boolean'
        ]);

        $input = $request->all();
        $input['is_active'] = true;

        $customer = Customer::create($input);

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $title = "Le client : ";
        return view('customers.show', compact('title', 'customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $title = "Modifier le client";
        return view('customers.edit', compact('title', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'email' => 'min:3|max:255',
            'phone' => 'numeric',
            'website' => 'max:255',
            'vat_number' => 'min:6|max:255',
            'description' => 'min:3|max:255',
            'comment' => 'max:255',
            'status' => 'min:1|max:1',
            //'is_active' => 'boolean'
        ]);

        //$request['is_active'] = true;
        $customer->update($request->all());


        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Le client a bien été supprimé');
    }
}
