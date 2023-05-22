<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.mitra.dashboard.index")->with([
            "pelaku_agros" => User::whereRoleId(3)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.mitra.dashboard.show")->with([
            "pelaku_agro" => $user
        ]);
    }
}
