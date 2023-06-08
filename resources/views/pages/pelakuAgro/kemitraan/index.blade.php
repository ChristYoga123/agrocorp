@extends('layouts.user.app')

@section('content')
    <div class="flex flex-col w-full h-[100vh] justify-center items-center gap-5">
        <a href="{{ route("pelaku-agro.jumlah_mitra.index") }}">
            <div class="flex flex-col gap-4 w-[400px] h-[200px] bg-[#159895] rounded-xl justify-center items-center">
                <img src="{{ asset("assets/img/mdi_user-multiple.png") }}">
                <h1 class="font-bold text-xl text-white">Jumlah Mitra</h1>
            </div>
        </a>
        <a href="{{ route("pelaku-agro.surat_bermitra.index") }}">
            <div class="flex flex-col gap-4 w-[400px] h-[200px] bg-[#159895] rounded-xl justify-center items-center">
                <img src="{{ asset("assets/img/surat.png") }}">
                <h1 class="font-bold text-xl text-white">Formulir Kemitraan</h1>
            </div>
        </a>
    </div>
@endsection