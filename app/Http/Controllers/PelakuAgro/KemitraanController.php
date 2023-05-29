<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KemitraanController extends Controller
{
    public function index_jumlah_mitra()
    {
        return view("pages.pelakuAgro.kemitraan.jumlah_mitra")->with([
            "kerja_samas" => Cooperate::wherePelakuAgroId(Auth::user()->id)->get()
        ]);
    }

    public function show_jumlah_mitra(User $user)
    {
        return view("pages.pelakuAgro.kemitraan.show_jumlah_mitra")->with([
            "user" => Cooperate::with("Mitra")->wherePelakuAgroId(Auth::user()->id)->whereMitraId($user->id)->first()
        ]);
    }

    public function index_surat_bermitra()
    {
        return view("pages.pelakuAgro.kemitraan.surat_bermitra")->with([
            "kerja_samas" => Cooperate::wherePelakuAgroId(Auth::user()->id)->get()
        ]);
    }

    public function show_surat_bermitra(User $user)
    {
        return view("pages.pelakuAgro.kemitraan.show_surat_bermitra")->with([
            "user" => Cooperate::with("Mitra")->wherePelakuAgroId(Auth::user()->id)->whereMitraId($user->id)->first()
        ]);
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            "cooperate_accepted" => "in:Menunggu,Ditolak,Disetujui",
            "pelaku_agro_mou" => "file"
        ]);

        DB::beginTransaction();
        try {
            $cooperate = Cooperate::with("Mitra")->wherePelakuAgroId(Auth::user()->id)->whereMitraId($user->id)->first();
            if ($request->cooperate_accepted) {
                $cooperate->update([
                    "status_cooperate" => $request->cooperate_accepted
                ]);
            } elseif ($request->pelaku_agro_mou) {
                $pelaku_agro_mou = $request->file("pelaku_agro_mou")->store("kerja-sama", "public");
                $cooperate->update([
                    "pelaku_agro_mou" => $pelaku_agro_mou
                ]);
            }

            DB::commit();
            return redirect()->back()->with("success", "Data berhasil diubah");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
