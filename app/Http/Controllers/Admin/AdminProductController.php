<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Specification;
use App\Http\Requests\productRequest;

class AdminProductController extends Controller
{

    public function listShow(){

        $products=product::paginate(6);

        return view('Admin/Product/productList',['products'=>$products]);

    }

    public function show($prod_id){

        $product=Product::find($prod_id);

        return view('Admin/Product/productShow',['product'=>$product]);
    }

    public function create(){

        $categories=Category::select('cat_id','cat_name')->get();
        $brands=Brand::select('brand_id','brand_name')->get();
        $specifications=Specification::select('specification_id','spec_name')->get();

        return view('Admin/product/productCreate',[
            'categories'=>$categories,
            'brands'=>$brands,
            'specifications'=>$specifications]);

    }

    public function store(productRequest $request){

        $product=new Product ;
        $product->fill($request->all());
        $request->avaible=='on'?$product->avaible=1:$product->avaible=0;
        $product->save();

        return redirect()->route('adminPage');
    }

    public function edit($prod_id){

        $categories=Category::select('cat_id','cat_name')->get();
        $brands=Brand::select('brand_id','brand_name')->get();
        $specifications=Specification::select('specification_id','spec_name')->get();
        $product=Product::find($prod_id);

        return view('Admin/Product/productEdit',[
            'product'=>$product,
            'categories'=>$categories,
            'brands'=>$brands,
            'specifications'=>$specifications]);
    }

    public function update(productRequest $request,$prod_id){

        $product=Product::find($prod_id);
        $product->update($request->all());
        $request->avaible=='on'?$product->avaible=1:$product->avaible=0;
        $product->save();

        return redirect()->route('product.list');
    }

    public function delete($prod_id){

        $product=Product::find($prod_id);
        $product->delete();

        return redirect()->route('product.list');
    }

}
