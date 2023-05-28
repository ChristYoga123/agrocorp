<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view("pages.pelakuAgro.profil.index")->with([
            "user" => Auth::user()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email," . $user->id,
            "phone" => "required|numeric",
            "address" => "required",
            "business_name" => "required",
            "business_description" => "required",
            "avatar" => "mimes:png,jpeg,jpg|image",
            "rekening_number" => "required|numeric",
            "product_price" => "required|integer"
        ]);
        DB::beginTransaction();
        try {
            if ($request->hasFile("avatar")) {
                $avatar = $request->file("avatar")->store("avatar", "public");
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "address" => $request->address,
                    "business_name" => $request->business_name,
                    "business_description" => $request->business_description,
                    "avatar" => $avatar,
                    "rekening_number" => $request->rekening_number,
                    "product_price" => $request->product_price
                ]);
            } else {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "address" => $request->address,
                    "business_name" => $request->business_name,
                    "business_description" => $request->business_description,
                    "rekening_number" => $request->rekening_number,
                    "product_price" => $request->product_price
                ]);
            }
            DB::commit();
            return redirect()->back()->with("success", "Data berhasil diubah");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
