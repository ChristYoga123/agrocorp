<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.pelakuAgro.dashboard.index");
    }
}
