<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return view("pages.admin.forum.index")->with([
            "forums" => Forum::all()
        ]);
    }
}
