<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'picture'
    ];

    // public function setPictureAttribute($val)
    // {
    //     if ($val){
    //         $photo_path = $val->store('photos/profile', 'public');
    //         $this->attributes['picture'] = $photo_path;
    //     }
    //     // $this->attributes['picture'] = \Storage::disk('public')->put('photos/vehicle/detail', $val);
    // }

    public function getPictureAttribute($val)
    {
        return \Storage::disk('public')->url($val);
    }
}
