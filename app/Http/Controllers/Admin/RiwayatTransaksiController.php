<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        return view("pages.admin.riwayat-transaksi.index")->with([
            "riwayats" => Cooperate::where("transaction_proof", "!=", null)->get()
        ]);
    }
}
