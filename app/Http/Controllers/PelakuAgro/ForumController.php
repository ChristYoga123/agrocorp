<?php

namespace App\Http\Controllers\PelakuAgro;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\ForumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.pelakuAgro.forum.index")->with([
            'forums' => Forum::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.pelakuAgro.forum.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data["forum_image"] = $request->file("forum_image")->store("forum", "public");
        $data["user_id"] = Auth::user()->id;

        Forum::create($data);

        return redirect()->route("pelaku-agro.forum.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        return view("pages.pelakuAgro.forum.show")->with([
            "forum" => Forum::find($forum->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        //
    }

    public function store_comment(Request $request, Forum $forum)
    {
        $data = $request->all();
        $data["user_id"] = Auth::user()->id;
        $data["forum_id"] = $forum->id;

        ForumComment::create($data);

        return redirect()->back();
    }
}
