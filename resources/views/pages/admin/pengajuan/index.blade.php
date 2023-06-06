@extends('layouts.user.app')

@section('content')
    <div class="ml-96 pt-10">
        <p class="text-4xl font-medium">AKUN PELAKU AGRO</p>
        <div class="overflow-x-auto mt-32">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Kebutuhan</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($pengajuans as $pengajuan)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $pengajuan->Mitra->name }}</td>
                        <td>{{ $pengajuan->cooperate_needs }}</td>
                        <td>
                            <a href="{{ route("admin.pengajuan.show", $pengajuan->id) }}">
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