<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\brandRequest;

class AdminBrandController extends Controller
{
    public function listShow(){

        $brands=Brand::paginate(10);

        return view('Admin/Brand/brandList',['brands'=>$brands]);

    }

    public function show($brand_id){

        $brand=Brand::find($brand_id);

        return view('Admin/Brand/brandShow',['brand'=>$brand]);

    }

    public function create(){

        $categories=Category::select('cat_id','cat_name')->get();

        return view('Admin/Brand/brandCreate',['categories'=>$categories]);

    }

    public function store(brandRequest $request){

        $brand=new Brand ;
        $brand->fill($request->all());
        $brand->save();

        return redirect()->route('adminPage');
    }

    public function edit($brand_id){

        $brand=Brand::find($brand_id);
        $categories=Category::select('cat_id','cat_name')->get();

        return view('Admin/Brand/brandEdit',['brand'=>$brand,'categories'=>$categories]);
    }

    public function update(brandRequest $request,$brand_id){

        $brand=brand::find($brand_id);
        $brand->update($request->all());

        return redirect()->route('brand.list');
    }

    public function delete($brand_id){

        $brand=Brand::find($brand_id);
        $brand->delete();

        return redirect()->route('brand.list');
    }
}
