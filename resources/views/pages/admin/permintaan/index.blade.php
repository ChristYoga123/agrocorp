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
                    <th>Permintaan</th>
                    <th>Jumlah</th>
                    <th>Tawaran Harga</th>
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
                        <td>{{ $premium_cooperate->product_name }}</td>
                        <td>{{ $premium_cooperate->quantity }}</td>
                        <td>{{ $premium_cooperate->price_request }}</td>
                    </tr>
                @endforeach
                <!-- row 2 -->
                </tbody>
            </table>
        </div>
    </div>
@endsection