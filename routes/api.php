<?php

use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('v1')->group(function () {
    Route::get('/wallets', [ WalletController::class, 'walletsList' ]);
    Route::post('/wallets', [ WalletController::class, 'createWallet' ]);
    Route::post('/transactions', [ WalletController::class, 'transaction' ]);
});
