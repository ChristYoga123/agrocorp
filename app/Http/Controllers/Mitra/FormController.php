<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Cooperate;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(User $user)
    {
        return view("pages.mitra.form.index")->with([
            "user" => Auth::user()
        ]);
    }

    public function store(Request $request, User $pelakuAgro)
    {
        $request->validate([
            "name" => "required",
            "nik" => "required|numeric|unique:users,nik," . Auth::user()->id,
            "cooperate_reason" => "required",
            "business_name" => "required",
            "address" => "required",
            "business_description" => "required",
            "phone" => "required|numeric",
            "post_code" => "required|numeric|digits:5",
            "cooperate_needs" => "required"
        ]);

        DB::beginTransaction();
        try {
            $logged_user = User::findOrFail(Auth::user()->id);
            $logged_user->update([
                "nik" => $request->nik,
                "post_code" => $request->post_code
            ]);
            Cooperate::create([
                "mitra_id" => $logged_user->id,
                "pelaku_agro_id" => $pelakuAgro->id,
                "cooperate_reason" => $request->cooperate_reason,
                "cooperate_needs" => $request->cooperate_needs
            ]);

            DB::commit();
            return redirect()->back()->with("success", "Form berhasil dikumpulkan");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("success", $e->getMessage());
        }
    }
}
