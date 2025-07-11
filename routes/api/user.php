<?php

use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    // Route::get('toggle/{user}', [UserController::class, 'toggle'])->name('toggle');
    // Route::get('data', [UserController::class, 'extraData'])->name('data');
});
Route::apiResource('user', UserController::class);

