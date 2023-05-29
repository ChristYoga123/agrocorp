<?php

use App\Http\Controllers\Mitra\AuthController as MitraAuthController;
use App\Http\Controllers\Mitra\FormController as MitraFormController;
use App\Http\Controllers\Mitra\HomeController as MitraHomeController;
use App\Http\Controllers\Mitra\PembayaranController;
use App\Http\Controllers\Mitra\ProfileController as MitraProfileController;
use App\Http\Controllers\Mitra\StatusPengajuanController;
use App\Http\Controllers\PelakuAgro\HomeController as PelakuAgroHomeController;
use App\Http\Controllers\PelakuAgro\AuthController as PelakuAgroAuthController;
use App\Http\Controllers\PelakuAgro\FormController as PelakuAgroFormController;
use App\Http\Controllers\PelakuAgro\KemitraanController;
use App\Http\Controllers\PelakuAgro\PembayaranController as PelakuAgroPembayaranController;
use App\Http\Controllers\PelakuAgro\ProfileController as PelakuAgroProfileController;
use App\Http\Controllers\PelakuAgro\RiwayatTransaksiController;
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

    // Pembayaran
    Route::get("/pembayaran", [PelakuAgroPembayaranController::class, "index"])->name("pembayaran.index");
    Route::get("/pembayaran/{user}", [PelakuAgroPembayaranController::class, "show"])->name("pembayaran.show");
    Route::post("/pembayaran/{user}", [PelakuAgroPembayaranController::class, "store"])->name("pembayaran.store");

    // Kemitraan
    Route::get("kemitraan", function () {
        return view("pages.pelakuAgro.kemitraan.index");
    })->name("kemitraan.index");
    Route::get("kemitraan/jumlah-mitra", [KemitraanController::class, "index_jumlah_mitra"])->name("jumlah_mitra.index");
    Route::get("kemitraan/jumlah-mitra/{user}", [KemitraanController::class, "show_jumlah_mitra"])->name("jumlah_mitra.show");
    Route::get("kemitraan/surat-bermitra", [KemitraanController::class, "index_surat_bermitra"])->name("surat_bermitra.index");
    Route::post("kemitraan/surat-bermitra/{user}", [KemitraanController::class, "store"])->name("surat_bermitra.store");
    Route::get("kemitraan/surat_bermitra/{user}", [KemitraanController::class, "show_surat_bermitra"])->name("surat_bermitra.show");

    // Riwayat Transaksi
    Route::get("riwayat-transaksi", [RiwayatTransaksiController::class, "index"])->name("riwayat-transaksi.index");
    Route::get("riwayat-transaksi/{user}", [RiwayatTransaksiController::class, "show"])->name("riwayat-transaksi.show");
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

    // Status Pembayaran
    Route::get("status-pengajuan", [StatusPengajuanController::class, "index"])->name("status_pengajuan.index");
    Route::get("status-pengajuan/{user}", [StatusPengajuanController::class, "show"])->name("status_pengajuan.show");

    // Pembayaran
    Route::get("pembayaran", [PembayaranController::class, "index"])->name("pembayaran.index");
    Route::get("pembayaran/{user}", [PembayaranController::class, "show"])->name("pembayaran.show");
    Route::get("pembayaran/{user}/bukti", [PembayaranController::class, "index_pembayaran"])->name("pembayaran.bayar.index");
    Route::post("pembayaran/{user}/bukti", [PembayaranController::class, "store"])->name("pembayaran.bayar.store");
});
