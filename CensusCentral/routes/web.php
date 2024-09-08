<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsfController;
use App\Http\Controllers\GraphController;
Route::get('/', function () {
    return view('login/login');
});

Route::get('/login', function () {
    return view('login/login');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/barangay', function () {
    return view('barangay/barangay');
});

Route::get('/analysis', function () {
    return view('analysis/analysis');
});

Route::get('/reports', function () {
    return view('reports/reports');
});

Route::get('/penalties', function () {
    return view('penalties/penalties');
});

Route::get('/accounts', function () {
    return view('accounts/accounts');
});


Route::get('/FormA', function () {
    return view('FormA');
});

Route::get('/FormNumber', function () {
    return view('FormNumber');
});


// FROM ISFCONTROLLER CRUD FUNCTIONS
Route::get('/barangay', [IsfController::class, 'index'])->name('barangay.index');
Route::get('barangay/headIndex/{id}', [IsfController::class, 'headIndex'])->name('barangay.headIndex');
Route::post('/Isfhead', [IsfController::class, 'store'])->name('isfhead.store');


Route::get('/dashboard', [GraphController::class, 'totalPopulationByAllBarangays']);

// routes/web.php

