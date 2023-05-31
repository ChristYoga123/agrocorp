@extends('layouts.user.app')

@section('content')
    <div class="flex flex-col w-full h-[100vh] justify-center items-center">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Produksi Awal</th>
                    <th>Produksi Akhir</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($pelaporans as $pelaporan)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $pelaporan->product_name }}</td>
                        <td>{{ $pelaporan->start_production }} Kg</td>
                        <td>{{ $pelaporan->end_production }} Kg</td>
                        <td class="flex gap-5">
                            <a href="{{ route("pelaku-agro.pelaporan.show", $pelaporan->id) }}">
                                <button class="btn bg-[#159895]">Lihat</button>
                            </a>
                            <a href="#">
                                <button class="btn bg-[#159895]">Hapus</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <!-- row 2 -->
                </tbody>
            </table>
        </div>

        <div class="tambah-laporan flex flex-col gap-5 text-center  mt-10">
            <a href="{{ route("pelaku-agro.pelaporan.create") }}">
                <button class="btn bg-[#159895] rounded-full border-0">+</button>
                <p class="text-lg font-medium text-[#159895] mt-5">Tambah Laporan</p>
            </a>
        </div>
    </div>
@endsection