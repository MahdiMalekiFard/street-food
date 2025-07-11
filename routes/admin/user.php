<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {});
Route::resource('user', UserController::class);
