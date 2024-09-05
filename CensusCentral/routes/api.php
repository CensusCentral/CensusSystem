<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsfController;
use App\Http\Controllers\MemberController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/Isfhead', [IsfController::class, 'store'])->name('Isfhead.store');
Route::put('/update/{id}', [IsfController::class, 'update']);
Route::delete('/delete/{id}', [IsfController::class, 'delete']);
Route::get('/Isfhead/index', [IsfController::class, 'index'])->name('Isfhead.index');

Route::get('/barangay', [IsfController::class, 'index']);



// Route::post('/isfmember/addMember', [MemberController::class, 'addMember'])->name('isfmember.addMember');

Route::post('/isfmember/addMember', [MemberController::class, 'addMember'])->name('isfmember.addMember');