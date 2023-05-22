<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperate extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function Mitra()
    {
        return $this->belongsTo(User::class, "mitra_id");
    }

    public function PelakuAgro()
    {
        return $this->belongsTo(PelakuAgro::class, "pelaku_agro_id");
    }
}
