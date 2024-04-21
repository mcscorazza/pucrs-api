<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\UserController;
use App\Http\Controllers\api\v1\MesureUnitController;
use App\Http\Controllers\api\v1\ProductController;
use App\Http\Controllers\api\v1\ProductDetailController;
use App\Http\Controllers\api\v1\ProductTypeController;
use App\Http\Controllers\api\v1\SpedCodeController;

Route::prefix('v1')->group(function() {
    Route::apiResource('/users',    UserController::class);
    Route::apiResource('/units',    MesureUnitController::class);
    Route::apiResource('/products', ProductController::class);
    Route::apiResource('/details',  ProductDetailController::class);
    Route::apiResource('/types',    ProductTypeController::class);
    Route::apiResource('/speds',    SpedCodeController::class);
});