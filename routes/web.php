<?php

use App\Http\Controllers\Portal\PortalController;
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

Route::prefix("/")->group(function () {
    Route::get('/', [PortalController::class, "index"])->name("index.home");
    Route::get('/premios', [PortalController::class, "index"])->name("index.sweepstakes");
    Route::get('/premios/{id}', [PortalController::class, "index"])->name("index.sweepstakes.id");
    Route::get('/ganhadores', [PortalController::class, "index"])->name("index.awarded");
    Route::get('/pedidos', [PortalController::class, "index"])->name("index.requests");
    Route::get('/ajuda', [PortalController::class, "index"])->name("index.helper");
});
