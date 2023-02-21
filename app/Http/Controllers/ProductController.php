<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // List out all products
    public function index(Request $request)
    {
        $products = Product::all();
    
        return view('products.index', compact('products'));
    }

    // Show single product by id
    public function show($id)
    {
        $product = Product::find($id);
        
        return view('products.show', ['product' => $product]);
    }

    // Create product page
    public function create()
    {
        
        return view('products.create');
    }

    // Add new product
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details = $request->input('details');
        $product->publish = $request->input('publish');
        $product->save();
    
        return redirect()->route('products.show', $product->id);
    }

    // Edit product page
    public function edit($id)
    {
        $product = Product::findOrFail($id);
    
        return view('products.edit', compact('product'));
    }

    // Update product details
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->publish = $request->publish;

        $product->save();

        return redirect()->route('products.show', $product->id);
    }

    // delete product
    public function destroy()
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
