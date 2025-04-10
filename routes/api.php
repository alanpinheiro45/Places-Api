<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando!']);
});

Route::apiResource('places', PlaceController::class);
