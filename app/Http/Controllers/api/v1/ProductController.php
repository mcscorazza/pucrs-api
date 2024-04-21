<?php

namespace App\Http\Controllers\api\v1;

use App\Models\v1\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreProductRequest;
use App\Http\Requests\v1\UpdateProductRequest;
use App\Http\Resources\v1\ProductResource;
use App\Http\Resources\v1\ProductCollection;


class ProductController extends Controller
{
    public function index()
    {
        return new ProductCollection(Product::all());
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return (new ProductResource($request->all()))->response()->setStatusCode(201);
    }

    public function show(Product $product)
    {
        //
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
