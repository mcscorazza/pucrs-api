<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Http\Requests\StoreProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductDetailRequest $request, ProductDetail $productDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
