<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller; 

use App\Models\v1\Supplier;

use App\Http\Requests\v1\StoreSupplierRequest;
use App\Http\Requests\v1\UpdateSupplierRequest;
use App\Http\Resources\v1\SupplierResource;
use App\Http\Resources\v1\SupplierCollection;

class SupplierController extends Controller
{
    public function index()
    {
        return new SupplierCollection(Supplier::all());
    }

    public function store(StoreSupplierRequest $request)
    {
        Supplier::create($request->all());
        return (new SupplierResource($request))->response()->setStatusCode(201);
    }

    public function show(Supplier $supplier)
    {
        return new SupplierResource($supplier);
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return (new SupplierResource($supplier))->response()->setStatusCode(200);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return response("Success Deleted!", 200);
    }
}
