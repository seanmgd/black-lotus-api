<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource via API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexApi()
    {
        return response()->json(Product::all(), 200);
    }
    /**
     * Display the specified resource via API.
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function showApi(string $slug)
    {
        return response()->json(Product::where('slug', $slug)->firstOrFail(), 200);
    }

}
