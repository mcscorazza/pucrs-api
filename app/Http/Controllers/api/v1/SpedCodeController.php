<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\V1\SpedCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreSpedCodeRequest;
use App\Http\Requests\V1\UpdateSpedCodeRequest;
use App\Http\Resources\V1\SpedCodeResource;
use App\Http\Resources\V1\SpedCodeCollection;

class SpedCodeController extends Controller
{
    public function index()
    {
        return new SpedCodeCollection(SpedCode::all());
    }
    public function store(StoreSpedCodeRequest $request)
    {
        SpedCode::create($request->all());
        return (new SpedCodeResource($request->all()))->response()->setStatusCode(201);
    }

    public function show(SpedCode $spedCode)
    {
        //
    }

    public function update(UpdateSpedCodeRequest $request, SpedCode $spedCode)
    {
        //
    }

    public function destroy(SpedCode $spedCode)
    {
        //
    }
}
