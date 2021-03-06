<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ShoeshopController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'vehicles' => VehicleController::class,
    'propertys'=> PropertyController::class,
    'shoeshops'=> ShoeshopController::class,
    'pets'=> PetController::class,
    'products'=> ProductController::class,
]);