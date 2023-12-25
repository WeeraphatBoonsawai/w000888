<?php


namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class CategoryChartController extends Controller
{
    public function index(){
        $product_type_count = DB::table('product_type')
         ->join('product','product_type.id','=','product.product_type_id')
         ->select(DB::raw('count(*) as product_type_count,product_type.product_type_name'))
         ->groupBy(DB::raw('product_type.product_type_name'))
         ->pluck('product_type_count','product_type_name');
         $labels = $product_type_count->keys();
         $data = $product_type_count->values();
 
         return view('category.category_chart',compact('labels','data'));
     }
 
}
