<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\PremiumCooperate;
use App\Models\PremiumTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PremiumController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_premium == 0) {
            return view("pages.pelakuAgro.permintaan.index");
        } else {
            return view("pages.pelakuAgro.permintaan.index_premium")->with([
                "premium_cooperates" => PremiumCooperate::whereCooperateStatus("Belum Disetujui")->get()
            ]);
        }
    }

    public function index_bayar()
    {
        return view('pages.pelakuAgro.permintaan.bayar')->with([
            "admin" => User::whereRoleId(1)->first()
        ]);
    }

    public function update_premium(Request $request, PremiumCooperate $premiumCooperate)
    {
        $premiumCooperate->update([
            "cooperate_status" => "Disetujui"
        ]);
        return redirect()->back();
    }
}
