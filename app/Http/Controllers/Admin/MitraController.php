<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        return view("pages.admin.mitra.index")->with([
            "mitras" => User::whereRoleId(2)->get()
        ]);
    }

    public function show(User $user)
    {
        return view("pages.admin.mitra.show")->with([
            "mitra" => $user
        ]);
    }
}
