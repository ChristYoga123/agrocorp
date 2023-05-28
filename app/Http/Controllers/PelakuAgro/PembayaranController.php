<?php

namespace App\Http\Controllers\PelakuAgro;

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
        return view("pages.pelakuAgro.pembayaran.index")->with([
            "kerja_samas" => Cooperate::wherePelakuAgroId(Auth::user()->id)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.pelakuAgro.pembayaran.show")->with([
            "user" => Cooperate::wherePelakuAgroId(Auth::user()->id)->whereMitraId($user->id)->first()
        ]);
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            "transaction_status" => "required|in:Disetujui"
        ]);
        DB::beginTransaction();
        try {
            $cooperate = Cooperate::wherePelakuAgroId(Auth::user()->id)->whereMitraId($user->id)->first();
            $cooperate->update([
                "transaction_status" => $request->transaction_status
            ]);
            DB::commit();
            return redirect()->route("pelaku-agro.pembayaran.index");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
