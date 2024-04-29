<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\Api\v1\MesureUnitController;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\ProductDetailController;
use App\Http\Controllers\Api\v1\ProductTypeController;
use App\Http\Controllers\Api\v1\SpedCodeController;
use App\Http\Controllers\Api\v1\SupplierController;
use App\Http\Controllers\Api\v1\CustomerController;
use App\Http\Controllers\Api\v1\MovementTypeController;
use App\Http\Controllers\Api\v1\MovementController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
});

Route::prefix('v1')->group(function() {
    Route::apiResource('/units',    MesureUnitController::class);
    Route::apiResource('/products', ProductController::class);
    Route::apiResource('/details',  ProductDetailController::class);
    Route::apiResource('/types',    ProductTypeController::class);
    Route::apiResource('/speds',    SpedCodeController::class);
    Route::apiResource('/suppliers', SupplierController::class);
    Route::apiResource('/customers', CustomerController::class);
    Route::apiResource('/move_types', MovementTypeController::class);
    Route::apiResource('/moves', MovementController::class);
});
