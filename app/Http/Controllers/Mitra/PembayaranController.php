<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
    {
        return view("pages.mitra.pembayaran.index")->with([
            "kerja_samas" => Cooperate::whereMitraId(Auth::user()->id)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.mitra.pembayaran.show")->with([
            "user" => Cooperate::whereMitraId(Auth::user()->id)->wherePelakuAgroId($user->id)->first()
        ]);
    }

    public function index_pembayaran(User $user)
    {
        return view("pages.mitra.pembayaran.bayar")->with([
            "user" => Cooperate::whereMitraId(Auth::user()->id)->wherePelakuAgroId($user->id)->first()
        ]);
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            "transaction_proof" => "required|image"
        ]);

        DB::beginTransaction();
        try {
            $proof = $request->file("transaction_proof")->store("bukti-pembayaran-kerja-sama", "public");
            $cooperate = Cooperate::whereMitraId(Auth::user()->id)->wherePelakuAgroId($user->id)->first();
            $cooperate->update([
                "transaction_proof" => $proof
            ]);

            DB::commit();
            return redirect()->route("mitra.pembayaran.show", $user->id);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
