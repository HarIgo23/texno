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
        $sort=$request->only('sort');
        $sort=(int)$sort['sort'];
        $category = Category::where('path', $categories)->first();
        $brands = Brand::where('cat_id',$category->cat_id)->get();
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
        switch($sort){
            case 1:
                array_multisort($priceList,SORT_ASC,$products);
                break;
            case 2:
                array_multisort($priceList,SORT_DESC,$products);
                break;
            case 3:
                array_multisort($nameList,SORT_ASC,$products);
                break;
            case 4:
                array_multisort($nameList,SORT_DESC,$products);
                break;
            case 5:
                array_multisort($popularList,SORT_ASC,$products);
                break;
            default:
                break;

        }

        return view('categoriesSort', [
            'category' => $category,
            'brands' => $brands,
            'inCat' => 1,
            'sort'=>$sort,
            'selectedBrands'=>$selectBrands,
            'products' => $products]);

    }
    /*public function sortDefault(Request $request,$categories,$brand){

        switch ($brand){
            case 'Xiaomi':
                break;
            case 'Philips':
                break;
            case 'Huawei':
                break;
            case 'Meizu':
                break;
            default:
        }
        $products=[];
        $priceList=[];
        $nameList=[];
        $popularList=[];
        $sort=$request->only('sort');
        $sort=(int)$sort['sort'];
        $category = Category::where('path', $categories)->first();
        $brands = Brand::where('cat_id',$category->cat_id)->get();
        //$price=$request->only('price');
        //$sortName=$request->only('sortName');
        //$sortPop=$request->only('sortPop');
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
        switch($sort){
            case 1:
                array_multisort($priceList,SORT_ASC,$products);
                break;
            case 2:
                array_multisort($priceList,SORT_DESC,$products);
                break;
            case 3:
                array_multisort($nameList,SORT_ASC,$products);
                break;
            case 4:
                array_multisort($nameList,SORT_DESC,$products);
                break;
            case 5:
                array_multisort($popularList,SORT_ASC,$products);
                break;
            default:
                break;

        }
        return view('categoriesSort', [
            'category' => $category,
            'brands' => $brands,
            'inCat' => 1,
            'sort'=>$sort,
            'selectedBrands'=>$selectBrands,
            'products' => $products]);
    }*/
}

