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
        return (new MesureUnitResource($request->all()))->response()->setStatusCode(201);
    }

    public function show(MesureUnit $mesureUnit)
    {
        //
    }

    public function update(UpdateMesureUnitRequest $request, MesureUnit $mesureUnit)
    {
        //
    }

    public function destroy(MesureUnit $mesureUnit)
    {
        //
    }
}
