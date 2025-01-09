<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();  // Eloquent Collection

        // Manipulating the collection
        //$productNames = $products->pluck('name');  // Get all product names

        //return response()->json($productNames);
        return ProductResource::collection($products);
    }
}
