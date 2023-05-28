@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="flex gap-20">
        <div class="image">
            <img src="/{{ $user->PelakuAgro->avatar }}" alt="" width="300px">
        </div>
        <div class="profile1 flex flex-col gap-8">
            <div class="flex flex-col gap-3">
                <strong>Nama Pelaku Agro</strong>
                <strong>{{ $user->PelakuAgro->name }}</strong>
            </div>
            
            <div class="flex flex-col gap-3 mt-5">
                <strong>Nomor Telepon</strong>
                <strong>{{ $user->PelakuAgro->phone }}</strong>
            </div>

            <div class="flex flex-col gap-3 mt-5">
                <strong>Usaha</strong>
                <strong>{{ $user->PelakuAgro->business_name }}</strong>
            </div>
        </div>

        <div class="profile2 flex flex-col gap-8">
            <div class="flex flex-col gap-3 ">
                <strong>Lokasi</strong>
                <strong>{{ $user->PelakuAgro->address }}</strong>
            </div>
            
            <div class="flex flex-col gap-3 mt-5">
                <strong>Harga</strong>
                <strong>C{{ $user->PelakuAgro->product_price }} / Kg</strong>
            </div>

            <div class="flex flex-col gap-3 mt-5">
                <strong>No. Rekening</strong>
                <strong>{{ $user->PelakuAgro->rekening_number }}</strong>
            </div>
        </div>

        @if ($user->pelaku_agro_mou)
            <div class="mou">
                <a href=""><button class="btn border-0 bg-[#159895]">Lihat MOU</button></a>
            </div>
        @endif
    </div>
</div>

@if (!$user->transaction_proof)
    <div class="w-full bg-[#159895] p-10 text-center text-white -mt-[100px]">
        <h1 class="font-bold text-xl">Permintaan Anda {{ $user->cooperate_needs }} <br> Sedang Diproses</h1>
    </div>
@else
    <div class="w-full bg-red-500 p-10 text-center text-white -mt-[100px]">
        <h1 class="font-bold text-xl">Permintaan Anda {{ $user->cooperate_needs }} Sudah Diproses.<br>Silahkan menghubungi Pelaku Agro</h1>
    </div>
@endif

<div class="w-full flex justify-center my-5">
    <a href="{{ route("mitra.pembayaran.bayar.index", $user->PelakuAgro->id) }}">
        <button class="btn btn-success w-[400px]">Bayar</button>
    </a>
</div>
@endsection