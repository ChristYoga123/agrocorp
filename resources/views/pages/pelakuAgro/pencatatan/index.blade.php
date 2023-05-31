@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center items-center gap-5">
        <a href="{{ route("pelaku-agro.pelaporan.index") }}">
            <div class="flex flex-col gap-4 w-[200px] h-[200px] bg-[#159895] rounded-xl justify-center items-center">
                <img src="{{ asset("assets/img/buku.png") }}" width="100px">
                <h1 class="font-bold text-xl text-white">Pelaporan</h1>
            </div>
        </a>
        <a href="{{ route("pelaku-agro.perhitungan.index") }}">
            <div class="flex flex-col gap-4 w-[200px] h-[200px] bg-[#159895] rounded-xl justify-center items-center">
                <img src="{{ asset("assets/img/uang.png") }}" width="100px">
                <h1 class="font-bold text-xl text-white">Perhitungan</h1>
            </div>
        </a>
    </div>
@endsection