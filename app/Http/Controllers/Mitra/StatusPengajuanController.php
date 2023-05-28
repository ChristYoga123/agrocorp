<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusPengajuanController extends Controller
{
    public function index()
    {
        return view("pages.mitra.status-pengajuan.index")->with([
            "kerja_samas" => Cooperate::whereMitraId(Auth::user()->id)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.mitra.status-pengajuan.show")->with([
            "user" => Cooperate::whereMitraId(Auth::user()->id)->wherePelakuAgroId($user->id)->first()
        ]);
    }
}
