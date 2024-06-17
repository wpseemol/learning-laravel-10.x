<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DynamicRoutController;
use Illuminate\Support\Facades\Route;

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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( "/test", [DemoController::class, "DemoAction"] );

Route::get( "/test/{id1}/{id2}", [DynamicRoutController::class, "DynamicRoute"] );
