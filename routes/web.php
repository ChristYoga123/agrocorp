<?php

use App\Http\Controllers\Mitra\AuthController as MitraAuthController;
use App\Http\Controllers\Mitra\FormController as MitraFormController;
use App\Http\Controllers\Mitra\HomeController as MitraHomeController;
use App\Http\Controllers\Mitra\ProfileController as MitraProfileController;
use App\Http\Controllers\PelakuAgro\HomeController as PelakuAgroHomeController;
use App\Http\Controllers\PelakuAgro\AuthController as PelakuAgroAuthController;
use App\Http\Controllers\PelakuAgro\FormController as PelakuAgroFormController;
use App\Http\Controllers\PelakuAgro\ProfileController as PelakuAgroProfileController;
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

    // Dashboard
    Route::get("/", [PelakuAgroHomeController::class, "index"])->name("index");

    // Profile
    Route::get("/profile", [PelakuAgroProfileController::class, "index"])->name("profile.index");
    Route::put("/profile/{user}", [PelakuAgroProfileController::class, "update"])->name("profile.update");

    // Form
    Route::get("/permintaan", [PelakuAgroFormController::class, "index"])->name("form.index");
    Route::get("/permintaan/{mitra_id}", [PelakuAgroFormController::class, "show"])->name("form.show");
});

// Mitra
Route::prefix("mitra")->name("mitra.")->group(function () {
    Route::get("register", [MitraAuthController::class, "register_index"])->name("register.index");
    Route::post("register", [MitraAuthController::class, "register"])->name("register");
    Route::get("login", [MitraAuthController::class, "login_index"])->name("login.index");
    Route::post("login", [MitraAuthController::class, "login"])->name("login");
    Route::post("logout", [MitraAuthController::class, "logout"])->name("logout");

    // Dashboard
    Route::get("/", [MitraHomeController::class, "index"])->name("index");
    Route::get("/detail/{user}", [MitraHomeController::class, "show"])->name("show");

    // Profile
    Route::get("/profile", [MitraProfileController::class, "index"])->name("profile.index");
    Route::put("/profile/{user}", [MitraProfileController::class, "update"])->name("profile.update");

    // Form
    Route::get("form/{user}", [MitraFormController::class, "index"])->name("form.index");
    Route::post("form/{pelakuAgro}", [MitraFormController::class, "store"])->name("form.store");
});
