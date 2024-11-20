<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ClearController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\StockController;
use GuzzleHttp\Psr7\Request;
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
//
Route::get('/another-select', function () {
    return view('another-select');
});
Route::get('/another-input', function () {
    return view('another-input');
});
Route::get('/new-table', function () {
    return view('another-table');
});
//
//
Route::get('dashboard', function () {
    return view('pages.dashboard');
});
//
Route::post('profile', function (Request $request) {
    dd($request);
});
//
Route::get('/price-create', [PriceController::class, 'createView']);
Route::post('/price-create', [PriceController::class, 'create']);
