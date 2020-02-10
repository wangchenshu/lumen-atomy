<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function show()
    {
        $products = Products::all();

        return response()->json($products);
    }

    public function showById($id)
    {
        $product = Products::find($id);

        return response()->json($product);
    }
}
