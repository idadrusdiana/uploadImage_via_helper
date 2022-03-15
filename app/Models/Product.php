<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'picture'
    ];

    public function getPictureAttribute($val)
    {
        return \Storage::disk('public')->url($val);
    }
}
