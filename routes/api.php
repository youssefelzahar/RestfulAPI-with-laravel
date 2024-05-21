<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\CustomerController;
use App\Http\Controllers\API\v1\InvoiceController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix'=> 'v1','namespace'=>'App\Http\Controllers\API\v1','middleware' => 'auth:sanctum'], function () {
    Route::apiResource('customers',CustomerController::class);
    Route::apiResource('invoice', InvoiceController::class);
    Route::post('invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);

});