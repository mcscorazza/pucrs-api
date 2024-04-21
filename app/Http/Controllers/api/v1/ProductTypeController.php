<?php

namespace App\Http\Controllers\api\v1;

use App\Models\v1\ProductType;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreProductTypeRequest;
use App\Http\Requests\v1\UpdateProductTypeRequest;
use App\Http\Resources\v1\ProductTypeResource;
use App\Http\Resources\v1\ProductTypeCollection;

class ProductTypeController extends Controller
{
    public function index()
    {
        return new ProductTypeCollection(ProductType::all());
    }

    public function store(StoreProductTypeRequest $request)
    {
        ProductType::create($request->all());
        return (new ProductTypeResource($request->all()))->response()->setStatusCode(201);
    }

    public function show(ProductType $type)
    {
        return new ProductTypeResource($type);
    }

    public function update(UpdateProductTypeRequest $request, ProductType $type)
    {
        $type->update($request->all());
        return (new ProductTypeResource($type))->response()->setStatusCode(200);
    }

    public function destroy(ProductType $type)
    {
        $type->delete();
        return response("Success Deleted!", 200);
    }
}
