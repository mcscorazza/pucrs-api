<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

use App\Models\v1\Product;

use App\Http\Requests\v1\StoreProductRequest;
use App\Http\Requests\v1\UpdateProductRequest;
use App\Http\Resources\v1\ProductResource;
use App\Http\Resources\v1\ProductCollection;

class ProductController extends Controller
{
    public function index()
    {
        return new ProductCollection(Product::paginate(15));
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return (new ProductResource($request))->response()->setStatusCode(201);
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return (new ProductResource($product))->response()->setStatusCode(200);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response("Success Deleted!", 200);
    }
}
