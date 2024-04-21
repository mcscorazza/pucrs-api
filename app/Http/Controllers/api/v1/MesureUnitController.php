<?php

namespace App\Http\Controllers\api\v1;

use App\Models\v1\MesureUnit;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreMesureUnitRequest;
use App\Http\Requests\v1\UpdateMesureUnitRequest;
use App\Http\Resources\v1\MesureUnitResource;
use App\Http\Resources\v1\MesureUnitCollection;

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
