<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = [
        'title','sub_title','status','gambar'
    ];
}
