<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

class ProductController extends Controller
{
    
    public function index($categories,$product) {
        
        Category::where('cat_avaible',1)
                ->where('path',$categories)
                ->firstOrFail();//проверяет сущесвует ли данная категория
        Product::where('avaible',1)
                ->where('name',$product)
                ->firstOrFail();//проверяет сущесвует ли данная модель
        $product = Product::where('name',$product)->first();
         $category = Category::where('path',$categories)->first();
    return view('product',['category'=>$category,'product'=>$product,'inProd'=>1,'inCat'=>1]);
    
    }
    
}
