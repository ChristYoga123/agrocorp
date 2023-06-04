<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PelakuAgroController extends Controller
{
    public function index()
    {
        return view("pages.admin.pelakuAgro.index")->with([
            "pelaku_agros" => User::whereRoleId(3)->get()
        ]);
    }
}
