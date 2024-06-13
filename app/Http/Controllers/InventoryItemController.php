<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryItem;

class InventoryItemController extends Controller
{
    public function index()
    {
        $inventoryItems = InventoryItem::all();
        return view('inventory_items.index', compact('inventoryItems'));
    }

    public function create()
    {
        return view('inventory_items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        InventoryItem::create($request->all());
        return redirect()->route('inventory_items.index')->with('success', 'Inventory item created successfully.');
    }

    // public function show(InventoryItem $inventoryItem)
    // {
    //     return view('inventory_items.show', compact('inventoryItem'));
    // }

    public function show($id)
    {
        $inventory_item = InventoryItem::findOrFail($id);
        return view('inventory_items.show', compact('inventory_item'));
    }

    public function edit(InventoryItem $inventoryItem)
    {
        return view('inventory_items.edit', compact('inventoryItem'));
    }

    public function update(Request $request, InventoryItem $inventoryItem)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $inventoryItem->update($request->all());
        return redirect()->route('inventory_items.index')->with('success', 'Inventory item updated successfully.');
    }

    public function destroy(InventoryItem $inventoryItem)
    {
        $inventoryItem->delete();
        return redirect()->route('inventory_items.index')->with('success', 'Inventory item deleted successfully.');
    }
}
