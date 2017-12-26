<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public $timestamps = false;

    protected $fillable = ['cat_id','brand_id','specification_id','name','img','price'];

    protected $primaryKey = 'prod_id';

    public function brand() {

        return $this->hasOne('App\Models\Brand', 'brand_id', 'brand_id');
        
    }

    public function category() {
        
        return $this->hasOne('App\Models\Category','cat_id','cat_id');
        
    }
    
    public function specification() {
        
        return $this->hasOne('App\Models\Specification','specification_id','specification_id');
        
    }
}
