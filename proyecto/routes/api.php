<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\Json2Controller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/periodos', [Json2Controller::class, 'periodos']); 
Route::get('/semestres', [Json2Controller::class, 'semestres']);
Route::get('/carreras', [Json2Controller::class, 'carreras']);