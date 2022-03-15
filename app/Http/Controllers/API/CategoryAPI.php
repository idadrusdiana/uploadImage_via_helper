<?php

namespace App\Http\Controllers\API;

use App\Http\Helpers\Uploader;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryAPI extends Controller
{
    public function showCategory()
    {
        $data=Category::select('id','name','picture')->get();

        return($data);
    }

    public function addCategory(Request $request)
    {
        $Category = Category::create([
            'name' => $request->name,
            'picture' => (new Uploader)->uploadImage($request->picture, 'categories')
        ]);

        return($Category);
    }

    public function upadteCategory()
    {
        # code...
    }
    
    public function deleteCategory()
    {
        # code...
    }
}
