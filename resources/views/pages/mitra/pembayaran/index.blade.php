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
                    <th>Detail</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($mitras as $mitra)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $mitra->Mitra->name }}</td>
                        <td>{{ $mitra->cooperate_needs }}</td>
                        <td>
                            <a href="{{ route("pelaku-agro.form.show", $mitra->id) }}">
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