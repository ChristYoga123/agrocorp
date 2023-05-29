@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center items-center gap-10">
        <img src="/storage/{{ $riwayat->transaction_proof }}" alt="" width="300px">
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-1">
                <strong>Nama</strong>
                <p class="font-medium">{{ $riwayat->Mitra->name }}</p>
            </div>
            <div class="flex flex-col gap-1">
                <strong>Tanggal</strong>
                <p class="font-medium">{{ date_format($riwayat->created_at, "d/M/Y") }}</p>
            </div>
        </div>
    </div>
@endsection