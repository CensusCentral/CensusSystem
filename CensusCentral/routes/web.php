<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsfController;

Route::get('/', function () {
    return view('FormA');
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

Route::post('/isfhead', [IsfController::class, 'store'])->name('isfhead.store');

Route::get('/barangay', [IsfController::class, 'index']);

// routes/web.php

