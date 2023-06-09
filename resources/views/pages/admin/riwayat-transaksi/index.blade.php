@extends('layouts.user.app')

@section('content')
    <div class="ml-96 pt-10">
        <p class="text-4xl font-medium">Riwayat Transaksi</p>
        <div class="overflow-x-auto mt-32">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Tanggal</th>
                    <th>Bukti</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($riwayats as $riwayat)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $riwayat->Mitra->name }}</td>
                        <td>{{ date_format($riwayat->created_at, "d/M/Y") }}</td>
                        <td>
                            <a href="{{ route("admin.riwayat.show", $riwayat->id) }}">
                                <button class="btn bg-[#159895]">Detail</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <!-- row 2 -->
                </tbody>
            </table>
        </div>
    </div>
@endsection