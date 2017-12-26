<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    public $timestamps = false;

    protected $fillable = ['spec_name','description','spec_img1','spec_img2','spec_img3','spec_img4','spec_img5','spec_img6'];

    protected $primaryKey = 'specification_id';
}
