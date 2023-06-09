<?php

namespace App\Http\Controllers\Mitra;

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
            return view("pages.mitra.permintaan.index");
        } else {
            return view("pages.mitra.permintaan.index_premium")->with([
                "premium_cooperates" => PremiumCooperate::whereMitraId(Auth::user()->id)->get()
            ]);
        }
    }

    public function index_bayar()
    {
        return view('pages.mitra.permintaan.bayar')->with([
            "admin" => User::whereRoleId(1)->first()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "premium_transaction_proof" => "required"
        ]);
        $transaction_proof = $request->file("premium_transaction_proof")->store("bukti-pembayaran-premium", "public");
        PremiumTransaction::create([
            "user_id" => Auth::user()->id,
            "transaction_proof" => $transaction_proof
        ]);

        return redirect()->back()->with('success', "Pembayaran berhasil dikirim");
    }

    public function create()
    {
        return view("pages.mitra.permintaan.create_premium");
    }

    public function store_premium(Request $request)
    {
        $request->validate([
            "product_name" => "required",
            "quantity" => "required",
            "price_request" => "required"
        ]);
        PremiumCooperate::create([
            "mitra_id" => Auth::user()->id,
            "product_name" => $request->product_name,
            "quantity" => $request->quantity,
            "price_request" => $request->price_request
        ]);

        return redirect()->route("mitra.premium.permintaan.index")->with("success", "Data berhasil disimpan");
    }

    public function destroy(PremiumCooperate $premiumCooperate)
    {
        $premiumCooperate->delete();
        return redirect()->back()->with("success", "Data berhasil dihapus");
    }
}
