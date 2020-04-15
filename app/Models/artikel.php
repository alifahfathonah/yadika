<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $guard;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

