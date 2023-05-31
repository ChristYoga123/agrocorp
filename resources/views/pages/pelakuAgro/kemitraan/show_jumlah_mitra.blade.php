@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="flex gap-20">
        <div class="image">
            <img src="/{{ $user->Mitra->avatar }}" alt="" width="300px">
        </div>
        <div class="profile1 flex flex-col gap-8">
            <div class="flex flex-col gap-3">
                <strong>Nama Pelaku Agro</strong>
                <strong>{{ $user->Mitra->name }}</strong>
            </div>
            
            <div class="flex flex-col gap-3 mt-5">
                <strong>Nomor Telepon</strong>
                <strong>{{ $user->Mitra->phone }}</strong>
            </div>

            <div class="flex flex-col gap-3 mt-5">
                <strong>Usaha</strong>
                <strong>{{ $user->Mitra->business_name }}</strong>
            </div>
        </div>

        <div class="profile2 flex flex-col gap-8">
            <div class="flex flex-col gap-3 ">
                <strong>Alamat</strong>
                <strong>{{ $user->Mitra->address }}</strong>
            </div>
            
            <div class="flex flex-col gap-3 mt-5">
                <strong>NIK</strong>
                <strong>{{ $user->Mitra->nik }} / Kg</strong>
            </div>

            <div class="flex flex-col gap-3 mt-5">
                <strong>Kode Pos</strong>
                <strong>{{ $user->Mitra->post_code }}</strong>
            </div>
        </div>
    </div>
</div>

<div class="w-full bg-[#159895] p-10 text-center text-white -mt-[100px]">
    <h1 class="font-bold text-xl">{{ $user->cooperate_needs }}</h1>
</div>
@endsection