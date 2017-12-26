<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cat_name','cat_img','path'];

    protected $table = 'categories';

    public $timestamps = false;

    protected $primaryKey = 'cat_id';
}
