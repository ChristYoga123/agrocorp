@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center gap-5">
        <div class="forum mr-[300px] -ml-28 mt-5">
            <div class="w-[600px] h-[300px]">
                @foreach ($forums as $forum)
                    <div class="card card-side bg-base-100 shadow-xl mt-5">
                        <img src="/storage/{{ $forum->forum_image }}" alt="Movie" width="200px"/>
                        <div class="card-body">
                            <h2 class="card-title">{{ $forum->title }}</h2>
                            <p>{{ substr($forum->forum_text, 0, 20) }}</p>
                            <div class="card-actions justify-end">
                                <button>
                                    <img src="{{ asset("assets/img/comment.png") }}" alt="" width="30px">
                                    <p>{{ count($forum->ForumComments) }}</p>
                                </button>
                                <a href="{{ route("pelaku-agro.forum.show", $forum->id) }}">
                                    <button class="btn btn-primary">Lihat</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="w-2 h-full bg-slate-400 -ml-28"></div>

        <div class="button flex flex-col mt-10">
            <a href="{{ route("pelaku-agro.forum.create") }}"><button class="btn">Buat Topik</button></a>
            <a href="{{ route("pelaku-agro.forum.my-forum.index") }}"><button class="btn mt-5">Postingan Saya</button></a>
        </div>
    </div>
@endsection