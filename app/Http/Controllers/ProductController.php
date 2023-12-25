<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductType;

class ProductController extends Controller
{
    public function index(){
        $Products = Product::with('product_type','brand') -> get();
        $Products = Product::paginate(5);
        return view('product.product', ['Products' => $Products]);
    }

    public function create(){
        $product_types = ProductType::pluck('product_type_name','id');
        $brands = Brand::pluck('brand_name','id');
        return view('product.create',compact('product_types','brands'));
    }

    public function store(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_type_id' => 'required',
            'product_img_url' => 'required',
            'brand_id' => 'required',          
        ]);
        Product::create($request->post());

        return redirect()->route('product.index')->with('success','Product has been added');
    }

    public function show(Products $product){
        return view('product.show',compact('product'));
    }

    public function edit(Product $product){
        $product_types = ProductType::pluck('product_type_name','id');
        $brands = Brand::pluck('brand_name','id');
        return view('product.edit',compact('product','product_types','brands'));
    }

    public function update(Request $request,Product $product){
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_type_id' => 'required',
            'product_img_url' => 'required',
            'brand_id' => 'required',
        ]);
        $product->fill($request->post())->save();

        return redirect()->route('product.index')->with('success','Product has been updated');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success','Product has been deleted');
    }
}
