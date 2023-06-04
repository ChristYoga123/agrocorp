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
        return view("pages.pelakuAgro.pencatatan.show")->with([
            "pelaporan" => $pelaporan
        ]);
    }

    public function index_perhitungan(Request $request)
    {
        return view("pages.pelakuAgro.pencatatan.index_perhitungan")->with([
            "pelaporans" => Pelaporan::whereUserId(Auth::user()->id)->get(),
            "start_production" => Pelaporan::whereUserId(Auth::user()->id)->whereStartProduction($request->start_production)->first(),
            "end_production" => Pelaporan::whereUserId(Auth::user()->id)->whereStartProduction($request->end_production)->first(),
        ]);
    }
}
