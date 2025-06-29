<?php

declare(strict_types=1);


use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'base', 'as' => 'base.'], function () {

});
Route::resource('base',BaseController::class);
