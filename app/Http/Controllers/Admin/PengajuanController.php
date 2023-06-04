<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view("pages.admin.pengajuan.index")->with([
            "pengajuans" => Cooperate::all()
        ]);
    }
}
