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
    Route::get('/', [PortalController::class, "index"]);
    Route::get('/sorteios', [PortalController::class, "index"]);
    Route::get('/sorteios/{id}', [PortalController::class, "index"]);
    Route::get('/premiados', [PortalController::class, "index"]);
    Route::get('/pedidos', [PortalController::class, "index"]);
    Route::get('/ajuda', [PortalController::class, "index"]);
});

Route::prefix("/manager")->group(function () {
    Route::get('/', [PortalController::class, "index"]);
    Route::get('/sorteios', [PortalController::class, "index"]);
    Route::get('/sorteios/{id}', [PortalController::class, "index"]);
    Route::get('/premiados', [PortalController::class, "index"]);
    Route::get('/pedidos', [PortalController::class, "index"]);
    Route::get('/ajuda', [PortalController::class, "index"]);
});
