<?php

use App\Http\Controllers\Mitra\AuthController as MitraAuthController;
use App\Http\Controllers\PelakuAgro\AuthController as PelakuAgroAuthController;
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

Route::get('/', function () {
    return view('welcome');
});

// pelakuAgro
Route::prefix("pelaku-agro")->name("pelaku-agro.")->group(function () {
    Route::get("register", [PelakuAgroAuthController::class, "register_index"])->name("register.index");
    Route::post("register", [PelakuAgroAuthController::class, "register"])->name("register");
    Route::get("login", [PelakuAgroAuthController::class, "login_index"])->name("login.index");
    Route::post("login", [PelakuAgroAuthController::class, "login"])->name("login");
});

// Mitra
Route::prefix("mitra")->name("mitra.")->group(function () {
    Route::get("register", [MitraAuthController::class, "register_index"])->name("register.index");
    Route::post("register", [MitraAuthController::class, "register"])->name("register");
    Route::get("login", [MitraAuthController::class, "login_index"])->name("login.index");
    Route::post("login", [MitraAuthController::class, "login"])->name("login");
});
