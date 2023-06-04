<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_index()
    {
        return view("pages.auth.admin.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $credential = $request->only(["email", "password"]);
        if (Auth::attempt($credential)) {
            if (Auth::user()->role_id != 1) {
                return redirect()->back()->with("error", "Maaf akun ini bukan merupakan akun admin");
            }
            $request->session()->regenerate();
            return redirect()->route("admin.index")->with("success", "Login berhasil");
        }
        return redirect()->back()->with("error", "Akun atau password belum terdaftar");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
