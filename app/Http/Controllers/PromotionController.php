<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    public function index(){
        $promotions = Promotion::orderBy('id', 'DESC') -> paginate(5);
        return view('promotion.promotion', ['promotions' => $promotions]);
    }

    public function create(){
        return view('promotion.create');
    }

    public function edit(Promotion $promotion){
        return view('promotion.edit',compact('promotion'));
    }

    public function store(Request $request){
        $request->validate([
            'promotion_name' => 'required',
            'promotion_start' => 'required',
            'promotion_end' => 'required',
            'percent_discount' => 'required',
        ]);
        Promotion::create($request->post());

        return redirect()->route('promotion.index')->with('success','Promotion has been added');
    }

    public function show(Promotion $promotion){
        return view('promotion',compact('promotion'));
    }

    public function update(Request $request,Promotion $promotion){
        $request->validate([
            'promotion_name' => 'required',
            'promotion_start' => 'required',
            'promotion_end' => 'required',
            'percent_discount' => 'required',
        ]);
        $promotion->fill($request->post())->save();

        return redirect()->route('promotion.index')->with('success','Promotion has been updated');
    }

    public function destroy(Promotion $promotion){
        $promotion->delete();
        return redirect()->route('promotion.index')->with('success','Promotion has been deleted');
    }
}
