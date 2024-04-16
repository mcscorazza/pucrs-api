<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\V1\ProductDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreProductDetailRequest;
use App\Http\Requests\V1\UpdateProductDetailRequest;

class ProductDetailController extends Controller
{
    public function index()
    {
        return "PRODUCT DETAILS";
    }

    public function store(StoreProductDetailRequest $request)
    {
        //
    }

    public function show(ProductDetail $productDetail)
    {
        //
    }

    public function update(UpdateProductDetailRequest $request, ProductDetail $productDetail)
    {
        //
    }

    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
