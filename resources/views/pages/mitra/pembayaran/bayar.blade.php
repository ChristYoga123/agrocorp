@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <form action="{{ route("mitra.pembayaran.bayar.store", $user->PelakuAgro->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col">
            <input type="file" name="transaction_proof" class="file-input">
            <button type="submit" class="btn border-0 bg-success mt-5 mx-auto">Upload</button>
        </div>
    </form>
</div>
@endsection