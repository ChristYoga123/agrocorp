@extends('layouts.user.app')

@section('content')
<div class="flex justify-center mt-5">
    <div class="flex flex-col gap-10">
        <img src="/storage/{{ $forum->forum_image }}" width="300px">
        <div class="content text-center">
            <p class="text-xl font-semibold">{{ $forum->title }}</p>
            <p class="mt-5">{{ $forum->forum_text }}</p>
        </div>

    </div>
    
    
</div>
<div class="comment px-20 mt-24">
    <form action="{{ route("mitra.comment.store", $forum->id) }}" class="w-full flex gap-5" method="POST">
        @csrf
        <input type="text" name="comment" class="input border-[#159895] w-full" placeholder="Masukkan komentar">
        <button type="submit">
            <img src="{{ asset("assets/img/letter.png") }}" alt="">
        </button>
    </form>
</div>

<div class="comment flex flex-col gap-3 px-20 mt-20">
    @foreach ($forum->ForumComments as $item)
        <div class="w-full shadow-md">
            <div class="p-5">
                <div class="flex gap-3">
                    <img src="/{{ $item->User->avatar }}" alt="" width="20px" class="rounded-full">
                    <p>{{ $item->User->name }}</p>
                </div>
                <p class="mt-12">{{ $item->comment }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection