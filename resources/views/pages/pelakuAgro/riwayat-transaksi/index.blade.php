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
                    <th>Tanggal</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($kerja_samas as $kerja_sama)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $kerja_sama->Mitra->name }}</td>
                        <td>{{ date_format($kerja_sama->created_at, "d/M/Y") }}</td>
                        <td>
                            <a href="{{ route("pelaku-agro.riwayat-transaksi.show", $kerja_sama->Mitra->id) }}">
                                <button class="btn bg-[#159895]">Lihat</button>
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