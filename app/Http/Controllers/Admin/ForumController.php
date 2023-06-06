<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\ForumComment;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        return view("pages.admin.forum.index")->with([
            "forums" => Forum::all()
        ]);
    }

    public function show(Forum $forum)
    {
        return view("pages.admin.forum.show")->with([
            "forum" => $forum
        ]);
    }

    public function destroy(ForumComment $forumComment)
    {
        $forumComment->delete();
        return redirect()->back()->with("success", "Komentar berhasil dihapus");
    }
}
