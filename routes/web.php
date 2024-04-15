<?php

use App\Services\Product\ProductServiceInterface;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);

Route::prefix('shop')->group(function () {
    Route::get('product/{id}', [App\Http\Controllers\Front\ShopController::class, 'show']);
    Route::post('product/{id}', [App\Http\Controllers\Front\ShopController::class, 'postComment']);
    Route::get('', [App\Http\Controllers\Front\ShopController::class, 'index']);
});
