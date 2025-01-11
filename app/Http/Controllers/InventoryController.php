<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory; // Replace with your Inventory model

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all(); // Assuming you have an Inventory model
        return view('inventory.index', compact('inventory')); // Passing inventory to the view
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
    ]);

    Inventory::create($validatedData);

    return redirect()->route('inventory.index')->with('success', 'Product added successfully!');
}

    public function show($id)
{
    // Retrieve the product from the database using the ID
    $inventory = Inventory::find($id);

    // Check if the inventory item exists
    if (!$inventory) {
        return redirect()->route('inventory.index')->with('error', 'Product not found.');
    }

    // Pass the product data to the view
    return view('inventory.show', compact('inventory'));
}


public function edit($id)
{
    // Retrieve the inventory item
    $inventory = Inventory::find($id);

    // Check if the inventory item exists
    if (!$inventory) {
        return redirect()->route('inventory.index')->with('error', 'Product not found.');
    }

    // Pass the inventory item to the view
    return view('inventory.edit', compact('inventory'));
}


public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    $inventory = Inventory::findOrFail($id);
    $inventory->update($validatedData);

    return redirect()->route('inventory.index')->with('success', 'Product updated successfully!');
}

    public function destroy($id)
    {
        $item = Inventory::findOrFail($id);
        $item->delete(); // Delete inventory item
        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully.');
    }
}
