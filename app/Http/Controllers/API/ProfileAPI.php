<?php

namespace App\Http\Controllers\API;

Use App\Http\Helpers\Uploader;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileAPI extends Controller
{
    public function showProfile()
    {
        $data=Profile::select('id','name','picture')->get();

        return($data);
    }

    public function addProfile(Request $request)
    {
        $profile = Profile::create([
            'name' => $request->name,
            'picture' => (new Uploader)->uploadImage($request->picture, 'profiles')
        ]);

        return($profile);
    }

    public function updateProfile()
    {
        # code...
    }
    public function deleteProfile()
    {
        # code...
    }
}
