<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{

    public function autocomplete(Request $request)
    {
        $data = Product::select("name as name")->where("name","LIKE","%{$request->input('query')}%")->get();

        return response()->json($data);
    }

    public function productSearch(Request $request){

        $product=$request->input('search');
        Product::where('avaible',1)
            ->where('name',$product)
            ->firstOrFail();//проверяет сущесвует ли данная модель
        $product=Product::where('name',$product)->first();

        return redirect()->route('productPage',['categories'=>$product->category->path,'product'=>$product->name]);
    }
}
