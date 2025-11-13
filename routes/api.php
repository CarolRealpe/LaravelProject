<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VendedorController;

Route::apiResource('productos', ProductoController::class);
Route::apiResource('vendedores', VendedorController::class);
