<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        return view("pages.pelakuAgro.riwayat-transaksi.index")->with([
            "kerja_samas" => Cooperate::wherePelakuAgroId(Auth::user()->id)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.pelakuAgro.riwayat-transaksi.show")->with([
            "riwayat" => Cooperate::wherePelakuAgroId(Auth::user()->id)->whereMitraId($user->id)->first()
        ]);
    }
}
