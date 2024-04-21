<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

use App\Models\v1\ProductDetail;

use App\Http\Requests\v1\StoreProductDetailRequest;
use App\Http\Requests\v1\UpdateProductDetailRequest;
use App\Http\Resources\v1\ProductDetailResource;
use App\Http\Resources\v1\ProductDetailCollection;

class ProductDetailController extends Controller
{
    public function index()
    {
        return new ProductDetailCollection(ProductDetail::all());
    }

    public function store(StoreProductDetailRequest $request)
    {
        ProductDetail::create($request->all());
        return (new ProductDetailResource($request))->response()->setStatusCode(201);
    }

    public function show(ProductDetail $detail)
    {
        return new ProductDetailResource($detail);
    }

    public function update(UpdateProductDetailRequest $request, ProductDetail $detail)
    {
        $detail->update($request->all());
        return (new ProductDetailResource($detail))->response()->setStatusCode(200);
    }

    public function destroy(ProductDetail $detail)
    {
        $detail->delete();
        return response("Success Deleted!", 200);
    }
}
