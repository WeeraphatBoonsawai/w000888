<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;


class ProductTypeController extends Controller
{
    public function index(){
        $product_types = ProductType::all();
        return view('product_type.product_type', ['product_types' => $product_types]);
    }

    public function create(){
        return view('product_type.create');
    }

    public function edit(ProductType $product_type){
        return view('product_type.edit',compact('product_type'));
    }

    public function store(Request $request){
        $request->validate([
            'product_type_name' => 'required',
        ]);
        ProductType::create($request->post());

        return redirect()->route('product_type.index')->with('success','Product Type has been added');
    }

    public function show(ProductType $product_type){
        return view('product_type',compact('product_type'));
    }

    public function update(Request $request,ProductType $product_type){
        $request->validate([
            'product_type_name' => 'required',
        ]);
        $product_type->fill($request->post())->save();

        return redirect()->route('product_type.index')->with('success','Product Type has been updated');
    }

    public function destroy(product_type $product_type){
        $product_type->delete();
        return redirect()->route('product_type.index')->with('success','Product Type has been deleted');
    }
}
