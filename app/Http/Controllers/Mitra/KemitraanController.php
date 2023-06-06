<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    public function index()
    {
        return view("pages.mitra.kemitraan.index")->with([
            "pelaku_agros" => User::whereRoleId(3)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.mitra.kemitraan.show")->with([
            "pelaku_agro" => $user
        ]);
    }
}
