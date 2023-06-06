@extends('layouts.user.app')

@section('content')
    <div class="container pt-5 pl-10 ">
        <p class="text-4xl font-medium">Buat Permintaan</p>
    </div>

    <div class="w-full h-screen flex justify-center items-center">
        <div class="flex flex-col gap-5">
            <form action="{{ route("mitra.premium.permintaan.store") }}" method="post">
                @csrf
                <div class="flex flex-col gap-3">
                    <label class="text-xl text-[#159895]">Nama Produk</label>
                    <input type="text" name="product_name" class="input w-full border-[#159895] max-w-md">
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-xl text-[#159895]">Jumlah Produk</label>
                    <input type="number" name="quantity" class="input w-full border-[#159895] max-w-md">
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-xl text-[#159895]">Harga</label>
                    <input type="number" name="price_request" class="input w-full border-[#159895] max-w-md">
                </div>
                <div class="flex flex-col gap-3 justify-center">
                    <button class="btn bg-[#159895]">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection