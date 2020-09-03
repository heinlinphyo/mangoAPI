<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/categories', 'CategoryApiController');
Route::apiResource('/products', 'ProductApiController');
Route::apiResource('/tables', 'TableApiController');
Route::apiResource('/orders', 'OrderApiController');
Route::apiResource('/invoices', 'InvoiceApiController');
