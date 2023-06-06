@extends('layouts.user.app')
@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <img src="/{{ $pelaku_agro->avatar }}" alt="">
        <div class="mt-10">
            <div class="flex gap-10">
                <div class="input-field flex gap-20 pt-5 pl-10">
                    <div class="field-1">
                        <div class="flex flex-col gap-3">
                            <label class="font-medium text-[#159895]">Username</label>
                            <input type="text" name="name" class="input w-full border-[#159895]" value="{{ $pelaku_agro->name }}" readonly>
                        </div>
        
                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Nomor Telepon</label>
                            <input type="number" name="phone" class="input w-full border-[#159895]" value="{{ $pelaku_agro->phone }}" readonly>
                        </div>
        
                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Nama Usaha</label>
                            <input type="number" name="rekening_number" class="input w-full border-[#159895]" value="{{ $pelaku_agro->business_name }}" readonly>
                        </div>

                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Harga</label>
                            <input type="number" name="rekening_number" class="input w-full border-[#159895]" value="{{ $pelaku_agro->product_price }} / Kg" readonly>
                        </div>
                    </div>
        
                    <div class="field-2">
                        <div class="flex flex-col gap-3">
                            <label class="font-medium text-[#159895]">Email</label>
                            <input type="text" name="email" class="input w-full border-[#159895]" value="{{ $pelaku_agro->email }}" readonly>
                        </div>
        
                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Alamat</label>
                            <input type="text" name="address" class="input w-full border-[#159895]" value="{{ $pelaku_agro->address }}" readonly>
                        </div>

                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Nomor Rekening</label>
                            <input type="text" name="address" class="input w-full border-[#159895]" value="{{ $pelaku_agro->rekening_number }}" readonly>
                        </div>

                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Deskripsi Usaha</label>
                            <textarea name="" class="textarea textarea-bordered border-[#159895]">
                                {{ $pelaku_agro->business_description }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection