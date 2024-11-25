<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\QueryString;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); // default middleware
//!
#region Route 

// Route::get('transactions', [TransactionController::class, 'index'])->middleware(QueryString::class);
// Route::post('transactions', [TransactionController::class, 'store']);
// Route::get('transactions/{transaction}', [TransactionController::class, 'show']);
// Route::put('transactions/{transaction}', [TransactionController::class, 'update']);
// Route::delete('transactions/{transaction}', [TransactionController::class, 'destroy']);

route::apiResource('transactions', TransactionController::class)->middleware('auth:sanctum'); // one route that calls all
route::post('login', [AuthController::class, 'login']);
route::post('register', [AuthController::class, 'register']);
