<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(10);
        // dd('$products');
        return view('backend.products.index',compact('products'));
    }
    public function create()
    {
        return view('backend.products.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'desc' => $request->input('desc'),
            'photo' => $request->input('photo'),
        ];

        // Data store 
        Product::create($data);
        return redirect()->route('admin.product');

    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.products.edit',compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $data = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'desc' => $request->input('desc'),
            'photo' => $request->input('photo'),
        ];

        $product->update($data);
        return redirect()->route('admin.product');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product');
    }
}
