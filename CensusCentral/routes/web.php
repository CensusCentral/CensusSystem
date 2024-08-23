<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsfController;
Route::get('/', function () {
    return view('FormNumber');
});

Route::get('/FormA', function () {
    return view('FormA');
});

Route::get('/FormNumber', function () {
    return view('FormNumber');
});

Route::post('/isfheads', [IsfController::class, 'store']);
