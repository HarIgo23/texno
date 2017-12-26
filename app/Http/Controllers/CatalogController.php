<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CatalogController extends Controller
{
    public function index(Category $categories ){
        
        $categories = $categories
                ->where('cat_avaible',1)
                ->get();
        
        return view('catalog',['categories'=>$categories]);
        
    }
    
    
}
