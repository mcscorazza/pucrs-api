<?php

namespace App\Http\Controllers\api\v1;

use App\Models\v1\SpedCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreSpedCodeRequest;
use App\Http\Requests\v1\UpdateSpedCodeRequest;
use App\Http\Resources\v1\SpedCodeResource;
use App\Http\Resources\v1\SpedCodeCollection;

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
