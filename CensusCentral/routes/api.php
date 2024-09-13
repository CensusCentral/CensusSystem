<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsfController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GraphController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/Isfhead', [IsfController::class, 'store'])->name('Isfhead.store');
Route::get('/Isfhead/index', [IsfController::class, 'index'])->name('Isfhead.index');

Route::get('/barangay/headIndex/{id}', [IsfController::class, 'headIndex']);

Route::get('/barangay', [IsfController::class, 'index']);
Route::get('/dashboard/population', [GraphController::class, 'totalPopulationByAllBarangays']);

Route::put('barangay/update/{id}', [IsfController::class, 'update'])->name('barangay.update');










