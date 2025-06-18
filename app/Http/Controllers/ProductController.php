<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('type', 'products')->get();
        return view('admin.products.index', compact('products'));
    }


    public function create(){
        $categories = ProductCategory::all();
        return view('admin.products.create', compact('categories'));
    }


    public function store(Request $request){
        $validate = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:enable,disable',
            'product_category_id' => 'required|exists:product_categories,id'
        ]);

        $validate['type'] = 'products';
        $validate['status'] = $request->status === 'enable';

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('images', 'public');
        }

        Product::create($validate);

        return redirect()->route('product.index')->with('success', 'Product successfully added.');
    }


    public function edit($id){
        $product = Product::where('type', 'products')->findOrFail($id);
        $categories = ProductCategory::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }


    public function update(Request $request, $id){
        $product = Product::where('type', 'products')->findOrFail($id);

        $validate = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:enable,disable',
            'product_category_id' => 'required|exists:product_categories,id'
        ]);

        $validate['type'] = 'products';
        $validate['status'] = $request->status === 'enable';

        if ($request->hasFile('image')) {
            if ($product->image && Storage::exists('public/' . $product->image)) {
                Storage::delete('public/' . $product->image);
            }

            $validate['image'] = $request->file('image')->store('images', 'public');
        }

        $product->update($validate);

        return redirect()->route('product.edit', $product->id)->with('success', 'Product successfully updated.');
    }


    public function read($id){
        $product = Product::where('type', 'products')->findOrFail($id);
        return view('admin.products.read', compact('product'));
    }


    public function destroy($id){
        $product = Product::where('type', 'products')->findOrFail($id);

        if ($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'The product has been successfully deleted');
    }
}
