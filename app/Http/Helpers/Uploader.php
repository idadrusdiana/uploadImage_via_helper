<?php

namespace App\Http\Helpers;  //untuk mengenalkan ke sistem (posisi file ada di alamat ini)

use Image;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Uploader
{

    protected $path = 'public/';

    public function uploadImage($data, $folderName, $type = 1000)
    {
        $imageName = NULL;
        $extension = $data->getClientOriginalExtension();
        $img       = Image::make($data->getRealPath());
        $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        $imageName = strtotime(date('Y-m-d H:i:s')).'_'.uniqid().'.'.$extension;

        $profilePath = 'photos/' . $folderName . '/' . $imageName;

        $saved     = Storage::put($this->path . '/' . $profilePath, $img->encode());

        return $profilePath;
    }

    public function deleteImage($data)
    {
        $delete = Storage::delete($this->path.'/'.$data);

        if ($delete) {
            return true;
        }else{
            return false;
        }
    }
}