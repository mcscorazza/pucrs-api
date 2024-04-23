<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

use App\Models\v1\MesureUnit;

use App\Http\Requests\v1\StoreMesureUnitRequest;
use App\Http\Requests\v1\UpdateMesureUnitRequest;
use App\Http\Resources\v1\MesureUnitResource;
use App\Http\Resources\v1\MesureUnitCollection;

class MesureUnitController extends Controller
{
    public function index()
    {
        return new MesureUnitCollection(MesureUnit::paginate(15));
    }

    public function store(StoreMesureUnitRequest $request)
    {
        MesureUnit::create($request->all());
        return response("Success Created!", 201);
    }

    public function show(MesureUnit $unit)
    {
        return new MesureUnitResource($unit);
    }

    public function update(UpdateMesureUnitRequest $request, MesureUnit $unit)
    {
        $unit->update($request->all());
        return response("Success Updated!", 200);
    }

    public function destroy(MesureUnit $unit)
    {
        $unit->delete();
        return response("Success Deleted!", 200);
    }
}
