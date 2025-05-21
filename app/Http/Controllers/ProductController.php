<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        $types = ProductType::all();
        return view('product.create', compact('types'));
    }
    public function store(ProductRequest $request)
    {
        Product::query()->create($request->validated());
        return redirect()->route('partner.index');
    }
    public function update(Product $product)
    {
        $types = ProductType::all();
        return view('product.update', compact('product', 'types'));
    }
    public function edit(Product $product, ProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('product.index');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
