<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Jumlah' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:0',
        ]);

        Product::create([
            'nama' => $request->Nama,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
    $request->validate([
        'Nama' => 'required|string|max:255',
        'Jumlah' => 'required|integer',
        'Harga' => 'required|integer',
    ]);

    $product->update([
        'nama' => $request->Nama,
        'Jumlah' => $request->Jumlah,
        'Harga' => $request->Harga,
    ]);

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
 }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}