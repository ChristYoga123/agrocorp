@extends('layouts.user.app')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex gap-5">
            <div class="flex flex-col gap-10 my-auto">
                <h1 class="text-4xl font-semibold text-[#159895]">Selamat Datang <br> Di Agrocorp</h1>
                <p class="text-lg font-medium text-justify">
                    Temukan mitra agroindustrimu bersama kami dimana kami terhubung dengan seluruh pelaku agroindustri yang berada diseluruh indonesia
                </p>    
            </div>
            <img src="{{ asset("assets/img/rumah.png") }}" alt="">
        </div>
    </div>
@endsection