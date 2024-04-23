<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;

use App\Models\v1\SpedCode;

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
        return response("Success Created!", 201);
    }

    public function show(SpedCode $sped)
    {
        return new SpedCodeResource($sped);
    }

    public function update(UpdateSpedCodeRequest $request, SpedCode $sped)
    {
        $sped->update($request-all());
        return response("Success Updated!", 200);
    }

    public function destroy(SpedCode $sped)
    {
        $sped->delete();
        return response("Success Deleted!", 200);
    }
}
