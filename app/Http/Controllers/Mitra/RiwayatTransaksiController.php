<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        return view("pages.mitra.riwayat-transaksi.index")->with([
            "kerja_samas" => Cooperate::whereMitraId(Auth::user()->id)->get()
        ]);
    }

    public function show(Cooperate $cooperate)
    {
        return view("pages.mitra.riwayat-transaksi.show")->with([
            "kerja_sama" => $cooperate
        ]);
    }
}
