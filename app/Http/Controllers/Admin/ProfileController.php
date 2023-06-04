<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view("pages.admin.profile.index")->with([
            "user" => Auth::user()
        ]);
    }

    public function update(Request $request, User $user)
    {
        if ($request->hasFile("avatar")) {
            $avatar = $request->file("avatar")->store("avatar", "public");
            $user->update([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "avatar" => $avatar,
                "rekening_number" => $request->rekening_number,
            ]);
        } else {
            $user->update([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "rekening_number" => $request->rekening_number,
            ]);
        }

        return redirect()->back()->with("success", "Data berhasil disimpan");
    }
}
