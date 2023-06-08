@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="flex gap-52">
        <div class="flex">
            <div class="image">
                <img src="/{{ $premium_cooperate->Mitra->avatar }}" alt="" width="300px">
            </div>
            <div class="profile1 flex flex-col gap-8">
                <div class="flex flex-col gap-3">
                    <strong>Nama Pelaku Agro</strong>
                    <strong>{{ $premium_cooperate->Mitra->name }}</strong>
                </div>
                
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Nomor Telepon</strong>
                    <strong>{{ $premium_cooperate->Mitra->phone }}</strong>
                </div>
    
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Usaha</strong>
                    <strong>{{ $premium_cooperate->Mitra->business_name }}</strong>
                </div>
            </div>
        </div>

        <div class="transaction-proof flex flex-col gap-8">
            <img src="/storage/{{ $premium_cooperate->transaction_proof }}" alt="" width="300px">
        </div>
    </div>
</div>

<div class="w-full flex justify-center my-5">
    <form action="{{ route("pelaku-agro.pembayaran.store", $premium_cooperate->Mitra->id) }}" method="POST">
        @csrf
        <input type="hidden" value="Disetujui" name="transaction_status">
        <button class="btn btn-success w-[400px]">Lunas</button>
    </form>
</div>
@endsection