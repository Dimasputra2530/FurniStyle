<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furniture;

class FurnitureController extends Controller
{
    public function index()
    {
        $furnitures = Furniture::all();
        return view('furniture.index', compact('furnitures'));
    }

    public function create()
    {
        return view('furniture.create');
    }

    public function store(Request $request)
    {
        Furniture::create($request->all());
        return redirect()->route('furniture.index')->with('success', 'Furniture berhasil ditambahkan!');
    }

    public function edit(Furniture $furniture)
    {
        return view('furniture.edit', compact('furniture'));
    }

    public function update(Request $request, Furniture $furniture)
    {
        $furniture->update($request->all());
        return redirect()->route('furniture.index')->with('success', 'Furniture berhasil diperbarui!');
    }

    public function destroy(Furniture $furniture)
    {
        $furniture->delete();
        return redirect()->route('furniture.index')->with('success', 'Furniture berhasil dihapus!');
    }
    public function show($id)
    {
    $furniture = Furniture::findOrFail($id);
    return view('furniture.show', compact('furniture'));
    }    
}