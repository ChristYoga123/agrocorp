<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view("pages.pelakuAgro.form.index")->with([
            "mitras" => Cooperate::whereHas("Mitra", function ($query) {
                $query->whereRoleId(2);
            })->get()
        ]);
    }

    public function show($mitra_id)
    {
        return view("pages.pelakuAgro.form.show")->with([
            "user" => Cooperate::findOrFail($mitra_id)
        ]);
    }
}
