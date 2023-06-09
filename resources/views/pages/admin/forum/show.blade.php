@extends('layouts.user.app')
@section('content')
<div class="=ml-96 pt-10">
    <div class="ml-96 pt-10">
        <div class="flex flex-col gap-10">
            <div class="flex justify-center">
                <img src="/storage/{{ $forum->forum_image }}" width="300px">
            </div>
            <div class="content text-center">
                <p class="text-xl font-semibold">{{ $forum->title }}</p>
                <p class="mt-5">{{ $forum->forum_text }}</p>
            </div>
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
    </div>
</div>
@endsection