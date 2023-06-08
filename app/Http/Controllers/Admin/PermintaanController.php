<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PremiumCooperate;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index()
    {
        return view("pages.admin.permintaan.index")->with([
            "premium_cooperates" => PremiumCooperate::all()
        ]);
    }
}
