@extends('layouts.user.app')

@section('content')
    <div class="ml-96 pt-10">
        <p class="text-4xl font-medium">Premium</p>
        <div class="overflow-x-auto mt-32">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Nama Usaha</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($transactions as $transaction)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $transaction->User->name }}</td>
                        <td>{{ $transaction->User->business_name }}</td>
                        <td>
                            <a href="{{ route("admin.premium.show", $transaction->id) }}">
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