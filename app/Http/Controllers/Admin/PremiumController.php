<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PremiumTransaction;
use App\Models\User;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function index()
    {
        return view("pages.admin.premium.index")->with([
            "transactions" => PremiumTransaction::all()
        ]);
    }

    public function show(PremiumTransaction $premiumTransaction)
    {
        return view("pages.admin.premium.show")->with([
            "transaction" => $premiumTransaction
        ]);
    }

    public function update(User $user)
    {
        $user->update([
            "is_premium" => 1
        ]);
        return redirect()->route("admin.premium.index")->with("success", "Data berhasil disimpan");
    }
}
