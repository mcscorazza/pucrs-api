<?php

namespace App\Http\Controllers\api\v1;

use App\Models\v1\ProductDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreProductDetailRequest;
use App\Http\Requests\v1\UpdateProductDetailRequest;

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
