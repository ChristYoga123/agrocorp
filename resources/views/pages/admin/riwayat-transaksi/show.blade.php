@extends('layouts.user.app')

@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex flex-col gap-10">
            <h1 class="text-xl">Transaksi Kepada</h1>
            <div class="flex gap-5">
                <img src="/storage/{{ $riwayat->transaction_proof }}" alt="" width="350px">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-3">
                        <p class="text-lg font-bold">Nama</p>
                        <p class="text-lg font-bold">{{ $riwayat->PelakuAgro->name }}</p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <p class="text-lg font-bold">Tanggal</p>
                        <p class="text-lg font-bold">{{ date_format($riwayat->created_at, "d/M/Y") }}</p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <p class="text-lg font-bold">Nominal</p>
                        <p class="text-lg font-bold">{{ $riwayat->PelakuAgro->rekening_number }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection