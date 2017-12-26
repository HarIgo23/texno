<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;

    protected $fillable = ['cat_id','brand_name'];

    protected $primaryKey = 'brand_id';

    public function category() {

        return $this->hasOne('App\Models\Category','cat_id','cat_id');

    }
}
