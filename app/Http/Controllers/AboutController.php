<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Models\Product;

class AboutController extends Controller
{
    public function index(){
      
        return view('about',['message'=>'']);
        
    }

    public function buy($prod_id){
        Product::where('prod_id',$prod_id)->firstOrFail();
        $product=Product::where('prod_id',$prod_id)
            ->where('avaible',1)
            ->select('name')->first();
        $message='Здраствуйте, я хочу купить '.$product->name;
        return view('about',['message'=>$message]);
    }
}
