<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ClearController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices-create', [InvoiceController::class, 'create']);
//
Route::get('/artikel', [ArtikelController::class, 'create']);
Route::get('/stock', [StockController::class, 'index']);
//
Route::get('/price', [PriceController::class, 'create']);
Route::get('/pricelist', [PriceListController::class, 'index']);
//
Route::get('/cleareall', [ClearController::class, 'delete']);
