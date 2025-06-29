<?php

use App\Http\Controllers\Api\V1\BaseController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'base', 'as' => 'base.'], function () {
    // Route::get('toggle/{base}', [BaseController::class, 'toggle'])->name('toggle');
    // Route::get('data', [BaseController::class, 'extraData'])->name('data');
});
Route::apiResource('base', BaseController::class);

