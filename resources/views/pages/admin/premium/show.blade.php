@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="flex gap-52">
        <div class="flex">
            <div class="image">
                <img src="/storage{{ $transaction->transaction_proof }}" alt="" width="300px">
            </div>
            <div class="profile1 flex flex-col gap-8">
                <div class="flex flex-col gap-3">
                    <strong>Nama Pengguna</strong>
                    <strong>{{ $transaction->User->name }}</strong>
                </div>
                
                <div class="flex flex-col gap-3 mt-5">
                    <strong>Tanggal</strong>
                    <strong>{{ date_format($transaction->created_at, "d/M/Y") }}</strong>
                </div>
            </div>
        </div>

        <div class="transaction-proof flex flex-col gap-8">
            <img src="/storage/{{ $transaction->transaction_proof }}" alt="" width="300px">
        </div>
    </div>
</div>

<div class="w-full flex justify-center my-5">
    <form action="{{ route("admin.premium.update", $transaction->user_id) }}" method="POST">
        @csrf
        <input type="hidden" value="Disetujui" name="transaction_status">
        <button class="btn btn-success w-[400px]">Lunas</button>
    </form>
</div>
@endsection