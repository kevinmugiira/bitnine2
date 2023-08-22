<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/products', [\App\Http\Controllers\BitnineController::class, 'index']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('products', [\App\Http\Controllers\BitnineController::class,'index']);
    Route::get('usecases', [\App\Http\Controllers\BitnineController::class,'usecases']);
    Route::get('services', [\App\Http\Controllers\BitnineController::class,'services']);
    Route::get('about', [\App\Http\Controllers\BitnineController::class,'about']);
    Route::get('contact', [\App\Http\Controllers\BitnineController::class,'contact']);
    Route::get('document', [\App\Http\Controllers\BitnineController::class, 'documentation']);


});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [\App\Http\Controllers\BitnineController::class,'logout'])->name('logout');
});

Route::get('master', function () {
    return view('bitnine.master');
});
Route::get('index', function () {
    return view('bitnine.index');
});

