<?php

namespace App\Http\Controllers\API;

use App\Http\Helpers\Uploader;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAPI extends Controller
{
    public function showProduct()
    {
        $data=Product::select('id','name','picture')->get();

        return($data);
    }

    public function addProduct(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'picture' => (new Uploader)->uploadImage($request->picture, 'products')
        ]);

        return($product);
    }

    public function upadteProduct()
    {
        # code...
    }
    
    public function deleteProduct()
    {
        # code...
    }
}
