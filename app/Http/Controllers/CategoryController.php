<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

use App\Models\Product;

use App\Models\Category;

class CategoryController extends Controller
{

    public function index($categories)
    {

        Category::where('cat_avaible', 1)
            ->where('path', $categories)
            ->firstOrFail();//проверяет сущесвует ли данная категория
        $category = Category::where('path', $categories)->first();
        $products = Product::where('cat_id',$category->cat_id)
            ->where('avaible',1)
            ->inRandomOrder()//рандомный вывод продуктов
            ->paginate(6);
        $brands = Brand::where('cat_id',$category->cat_id)->get();
        //firstOrFail
        //синтаксис работы с отношениями
        //$brand = $products[2]->category->cat_name;
        return view('categories', [
            'category' => $category,
            'brands' => $brands,
            'inCat' => 1,
            'products' => $products]);

    }
    public function sort(Request $request,$categories){
        $products=[];
        $priceList=[];
        $nameList=[];
        $popularList=[];
        $category = Category::where('path', $categories)->first();
        $brands = Brand::where('cat_id',$category->cat_id)->get();
        $price=$request->only('price');
        $sortName=$request->only('sortName');
        $sortPop=$request->only('sortPop');
        $selectBrands=$request->except('price','sort-name','popular','_token');
        foreach ($selectBrands as $brand=>$value) {

            $temp=Product::select('price','name','img','popular')
                ->where([
                ['cat_id','=',$category->cat_id],
                ['avaible','=',1],
                ['brand_id','=',$brand]])
                ->inRandomOrder()
                ->get();
            foreach ($temp as $product){
                $products[]= ['price'=>$product->price,
                    'name'=>$product->name,
                    'img'=>$product->img,
                    'popular'=>$product->popular];
            }
        }
        foreach ($products as $key=>$row){
            $priceList[$key]=$row['price'];
            $nameList[$key]=$row['name'];
            $popularList[$key]=$row['popular'];
        }
        if($price['price']!=null){
            if($price['price']=='asc'){
                array_multisort($priceList,SORT_ASC,$products);
            }
            else
                array_multisort($priceList,SORT_DESC,$products);
        }
        if($sortName['sortName']!=null){
            if($sortName['sortName']=='asc'){
                array_multisort($nameList,SORT_ASC,$products);
            }
            else
                array_multisort($nameList,SORT_DESC,$products);
        }
        if($sortPop['sortPop']!=null){
            if($sortPop['sortPop']=='asc'){
                array_multisort($popularList,SORT_ASC,$products);
            }
            else
                array_multisort($popularList,SORT_DESC,$products);
        }
        /*array_multisort($priceList,$price,
            $nameList,$sortName,
            $popularList,$sortPop,
            $products);*/
        //переделать если что
        /*if($price['price']!=null){
            if($price['price']=='asc'){
                sort($products);
            }
            else
                rsort($products);
        }*/
        dd($products);
        return view('categoriesSort', [
            'category' => $category,
            'brands' => $brands,
            'inCat' => 1,
            'sort'=>$price['price'],
            'selectedBrands'=>$selectBrands,
            'products' => $products]);

    }

}
