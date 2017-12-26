<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;

    protected $fillable = ['author','text','img','place','href_place'];

    protected $primaryKey = 'review_id';

}
