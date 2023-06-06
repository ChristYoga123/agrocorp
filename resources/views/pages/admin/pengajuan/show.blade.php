@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex flex-col justify-center items-center gap-5">
    <div class="flex gap-10">
        <div class="flex gap-10">
            <div class="image">
                <img src="/{{ $pengajuan->Mitra->avatar }}" alt="" width="300px">
            </div>
            <div class="profile1 flex flex-col gap-5">
                <div class="flex flex-col gap-3">
                    <strong>Nama Mitra</strong>
                    <strong>{{ $pengajuan->Mitra->name }}</strong>
                </div>
                
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Nomor Telepon</strong>
                    <strong>{{ $pengajuan->Mitra->phone }}</strong>
                </div>
    
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Alamat</strong>
                    <strong>{{ $pengajuan->Mitra->address }}</strong>
                </div>
            </div>
            <div class="profile1 flex flex-col gap-5">
                <div class="flex flex-col gap-3">
                    <strong>NIK</strong>
                    <strong>{{ $pengajuan->Mitra->nik }}</strong>
                </div>
                
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Kode POS</strong>
                    <strong>{{ $pengajuan->Mitra->post_code }}</strong>
                </div>
    
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Usaha</strong>
                    <strong>{{ $pengajuan->Mitra->business_name }}</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="flex gap-10">
        <div class="flex gap-10">
            <div class="image">
                <img src="/{{ $pengajuan->PelakuAgro->avatar }}" alt="" width="300px">
            </div>
            <div class="profile1 flex flex-col gap-5">
                <div class="flex flex-col gap-3">
                    <strong>Nama Pelaku Agro</strong>
                    <strong>{{ $pengajuan->PelakuAgro->name }}</strong>
                </div>
                
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Nomor Telepon</strong>
                    <strong>{{ $pengajuan->PelakuAgro->phone }}</strong>
                </div>
    
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Alamat</strong>
                    <strong>{{ $pengajuan->PelakuAgro->address }}</strong>
                </div>
            </div>
            <div class="profile1 flex flex-col gap-5">
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Usaha</strong>
                    <strong>{{ $pengajuan->PelakuAgro->business_name }}</strong>
                </div>

                <div class="flex flex-col gap-3">
                    <strong>Harga</strong>
                    <strong>{{ $pengajuan->PelakuAgro->product_price }}/Kg</strong>
                </div>
                
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Nomor Rekening</strong>
                    <strong>{{ $pengajuan->PelakuAgro->rekening_number }}</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center ml-20 p-10 bg-[#159895] text-4xl font-bold text-white">
        {{ $pengajuan->cooperate_needs }}
    </div>
</div>

@endsection