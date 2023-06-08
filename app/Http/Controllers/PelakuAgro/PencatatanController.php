<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PencatatanController extends Controller
{
    public function index()
    {
        return view('pages.pelakuAgro.pencatatan.index');
    }

    public function index_pelaporan()
    {
        return view("pages.pelakuAgro.pencatatan.index_pelaporan")->with([
            "pelaporans" => Pelaporan::whereUserId(Auth::user()->id)->get()
        ]);
    }

    public function create_pelaporan(Request $request)
    {
        return view("pages.pelakuAgro.pencatatan.create_pelaporan");
    }

    public function store_pelaporan(Request $request)
    {
        $data = $request->all();
        $data["user_id"] = Auth::user()->id;
        Pelaporan::create($data);

        return redirect()->route('pelaku-agro.pelaporan.index')->with('success', "Data berhasil ditambahkan");
    }

    public function show_pelaporan(Pelaporan $pelaporan)
    {
        return view("pages.pelakuAgro.pencatatan.show_pelaporan")->with([
            "pelaporan" => $pelaporan
        ]);
    }

    public function update_pelaporan(Request $request, Pelaporan $pelaporan)
    {
        $pelaporan->update([
            "end_production" => $request->end_production
        ]);
        return redirect()->route('pelaku-agro.pelaporan.index')->with('success', "Data berhasil ditambahkan");
    }

    public function index_perhitungan(Request $request)
    {
        return view("pages.pelakuAgro.pencatatan.index_perhitungan")->with([
            "pelaporans" => Pelaporan::whereUserId(Auth::user()->id)->get(),
            "start_production" => Pelaporan::whereUserId(Auth::user()->id)->whereStartProduction($request->start_production)->get(),
            "end_production" => Pelaporan::whereUserId(Auth::user()->id)->whereStartProduction($request->end_production)->get(),
        ]);
    }

    public function selisih(Request $request)
    {
        $pelaporan_1 = Pelaporan::whereProductionDate($request->production_date_1)->whereUserId(Auth::user()->id)->first();
        $pelaporan_2 = Pelaporan::whereProductionDate($request->production_date_2)->whereUserId(Auth::user()->id)->first();
        $result = $pelaporan_1->end_production - $pelaporan_2->end_production;
        return redirect()->back()->with("result", $result);
    }
}
