<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

use App\Models\v1\Movement;

use App\Http\Requests\V1\StoreMovementRequest;
use App\Http\Requests\V1\UpdateMovementRequest;
use App\Http\Resources\V1\MovementResource;
use App\Http\Resources\V1\MovementCollection;

class MovementController extends Controller
{
    public function index()
    {
        return new MovementCollection(Movement::all());
    }

    public function store(StoreMovementRequest $request)
    {
        Movement::create($request->all());
        return(new MovementResource($request))->response()->setStatusCode(201);
    }

    public function show(Movement $move)
    {
        return new MovementResource($move);
    }

    public function update(UpdateMovementRequest $request, Movement $move)
    {
        $move->update($request->all());
        return(new MovementResource($request))->response()->setStatusCode(200);
    }

    public function destroy(Movement $move)
    {
        $move->delete();
        return response("Success Deleted!", 200);
    }
}
