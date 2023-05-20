<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register_index()
    {
        return view("pages.auth.pelakuAgro.register");
    }

    public function login_index()
    {
        return view("pages.auth.pelakuAgro.login");
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8"
        ]);

        DB::beginTransaction();
        try {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "role_id" => 3,
            ]);
            DB::commit();
            return redirect()->route("pelaku-agro.login.index")->with("success", "Registrasi anda berhasil");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $credential = $request->only(["email", "password"]);
        if (Auth::attempt($credential)) {
            if (Auth::user()->role_id != 3) {
                return redirect()->back()->with("error", "Maaf akun ini bukan merupakan akun pelaku agro");
            }
            $request->session()->regenerate();
            return "Sudah Login";
        }
        return redirect()->back()->with("error", "Akun atau password belum terdaftar");
    }
}
