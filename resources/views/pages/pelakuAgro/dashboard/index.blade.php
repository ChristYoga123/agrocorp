@extends('layouts.user.app')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex gap-5 -z-[99999]">
            <img src="{{ asset("assets/img/pelaku-agro-hero.png") }}" alt="">
            <div class="flex flex-col gap-10 my-auto">
                <h1 class="text-4xl font-semibold">Selamat Datang</h1>
                <p class="text-lg font-medium">
                    Bersama kami, mari kita majukan usaha <br>
                    Agroindustri di Indonesia
                </p>    
            </div>
        </div>
    </div>
@endsection