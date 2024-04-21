<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\V1\MovementType;
use App\Http\Requests\V1\StoreMovementTypeRequest;
use App\Http\Requests\V1\UpdateMovementTypeRequest;
use App\Http\Resources\V1\MovementTypeResource;
use App\Http\Resources\V1\MovementTypeCollection;


class MovementTypeController extends Controller
{

    public function index()
    {
        return new MovementTypeCollection(MovementType::all());
    }

    public function store(StoreMovementTypeRequest $request)
    {
        MovementType::create($request->all());
        return(new MovementTypeResource($request))->response()->setStatusCode(201);
    }

    public function show(MovementType $move_type)
    {
        return new MovementTypeResource($move_type);
    }

    public function update(UpdateMovementTypeRequest $request, MovementType $move_type)
    {
        $move_type->update($request->all());
        return(new MovementTypeResource($request))->response()->setStatusCode(200);
    }

    public function destroy(MovementType $move_type)
    {
        $move_type->delete();
        return response("Success Deleted!", 200);
    }
}
