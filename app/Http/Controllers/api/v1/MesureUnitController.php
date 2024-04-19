<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\V1\MesureUnit;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreMesureUnitRequest;
use App\Http\Requests\V1\UpdateMesureUnitRequest;
use App\Http\Resources\V1\MesureUnitResource;
use App\Http\Resources\V1\MesureUnitCollection;

class MesureUnitController extends Controller
{
    public function index()
    {
        return new MesureUnitCollection(MesureUnit::all());
    }

    public function store(StoreMesureUnitRequest $request)
    {
        MesureUnit::create($request->all());
        return (new MesureUnitResource($request))->response()->setStatusCode(201);
    }

    public function show(MesureUnit $unit)
    {
        return new MesureUnitResource($unit);
    }

    public function update(UpdateMesureUnitRequest $request, MesureUnit $unit)
    {
        $unit->update($request->all());
        return (new MesureUnitResource($unit))->response()->setStatusCode(200);;
    }

    public function destroy(MesureUnit $unit)
    {
        $unit->delete();
        return response("Success Deleted!", 200);
    }
}
