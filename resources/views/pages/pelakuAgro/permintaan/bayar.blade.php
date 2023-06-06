@extends("layouts.user.app")

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <form action="{{ route("mitra.premium.permintaan.bayar.store") }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex-col">
            <div class="flex gap-5">
                <input type="file" name="premium_transaction_proof" class="file-input">
        
                <div class="flex flex-col gap-5">
                    <p class="text-lg font-semibold">Harga: Rp30.000</p>
                    <p class="text-lg font-semibold">Nomor Telepon: {{ $admin->phone }}</p>
                    <p class="text-lg font-semibold">Nomor Rekening: {{ $admin->rekening_number }}</p>
                </div>
            </div>
            <button class="btn btn-success">Bayar</button>
        </div>
    </form>
</div>
@endsection