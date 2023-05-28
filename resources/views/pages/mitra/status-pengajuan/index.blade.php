@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center items-center">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelaku Agro</th>
                    <th>Kebutuhan</th>
                    <th>Detail</th>
                    <th>Status</th>
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
                        <td>{{ $kerja_sama->PelakuAgro->name }}</td>
                        <td>{{ $kerja_sama->cooperate_needs }}</td>
                        <td>
                            <a href="{{ route("mitra.status_pengajuan.show", $kerja_sama->PelakuAgro->id) }}">
                                <button class="btn bg-[#159895]">Lihat</button>
                            </a>
                        </td>
                        <td>
                            <div class="badge border-0 {{ $kerja_sama->status_cooperate == "Belum Disetujui" ? "bg-red-500" : ($kerja_sama->status_cooperate == "Ditolak" ? "bg-red-500" : ($kerja_sama->status_cooperate == "Disetujui" ? "bg-green-500" : "")) }}">
                                <p>{{ $kerja_sama->status_cooperate }}</p>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <!-- row 2 -->
                </tbody>
            </table>
        </div>
    </div>
@endsection