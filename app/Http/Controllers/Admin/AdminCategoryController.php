<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\categoryRequest;

class AdminCategoryController extends Controller
{

    public function listShow(){

        $categories= new Category;
        $categories=$categories->paginate(10);

        return view('Admin/Category/categoryList',['categories'=>$categories]);

    }

    public function create(){

        return view('Admin/Category/categoryCreate');

    }

    public function store(categoryRequest $request){
        //dump($request);
        //sleep(120);
        $data=$request->all();
        $category=new Category;
        $category->fill($data);
        $request->cat_avaible=='on'?$category->cat_avaible=1:$category->cat_avaible=0;
        $category->save();

        return redirect()->route('adminPage');
    }

    public function show($cat_id){

        $category=new Category;
        $category=$category->where('cat_id','=',$cat_id)->first();

        return view('Admin/Category/categoryShow',['category'=>$category]);
    }

    public function edit($cat_id){

        $category=new Category;
        $category=$category->where('cat_id','=',$cat_id)->first();

        return view('Admin/Category/categoryEdit',['category'=>$category]);
    }

    public function update(categoryRequest $request,$cat_id){

        $category = Category::where('cat_id',$cat_id)->first();
        $category->update($request->all());
        $request->cat_avaible=='on'?$category->cat_avaible=1:$category->cat_avaible=0;
        $category->save();

        return redirect()->route('category.list');

    }

    public function delete($cat_id){

        $category = Category::find($cat_id);
        $category->delete();

        return redirect()->route('category.list');
    }
}
