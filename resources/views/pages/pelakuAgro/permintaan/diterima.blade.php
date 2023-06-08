@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center items-center">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($premium_cooperates as $premium_cooperate)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $premium_cooperate->Mitra->name }}</td>
                        <td>
                            <div class="badge border-0 {{ $premium_cooperate->transaction_status == "Belum Lunas" ? "bg-red-500" : ($premium_cooperate->transaction_status == "Ditolak" ? "bg-red-500" : ($premium_cooperate->transaction_status == "Disetujui" ? "bg-green-500" : "")) }}">
                                <p>{{ $premium_cooperate->transaction_status == "Disetujui" ? "Lunas" : $premium_cooperate->transaction_status }}</p>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route("pelaku-agro.premium.permintaaan.bayar.diterima", $premium_cooperate->Mitra->id) }}">
                                <button class="btn bg-[#159895]">Lihat</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection