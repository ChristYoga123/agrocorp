@extends('layouts.user.app')

@section('content')
<div class="input-field flex gap-40 pt-5 pl-10 justify-center">
    <div class="field-1">
        <div class="flex flex-col gap-3">
            <label class="font-medium text-[#159895]">Nama</label>
            <input type="text" name="name" class="input w-full border-[#159895]" value="{{ $user->Mitra->name }}" readonly>
        </div>

        <div class="flex flex-col gap-3 mt-5">
            <label class="font-medium text-[#159895]">NIK</label>
            <input type="number" name="nik" class="input w-full border-[#159895]" value="{{ $user->Mitra->nik }}" readonly>
        </div>

        <div class="flex flex-col gap-3 mt-5">
            <label class="font-medium text-[#159895]">Alasan Bermitra</label>
            <textarea name="cooperate_reason" class="textarea textarea-bordered border-[#159895]" readonly>{{ $user->cooperate_reason }}</textarea>
        </div>
    </div>

    <div class="field-2">
        <div class="flex flex-col gap-3">
            <label class="font-medium text-[#159895]">Nama Usaha</label>
            <input type="text" name="business_name" class="input w-full border-[#159895]" value="{{ $user->Mitra->business_name }}" readonly>
        </div>

        <div class="flex flex-col gap-3 mt-5">
            <label class="font-medium text-[#159895]">Alamat Usaha</label>
            <input type="text" name="address" class="input w-full border-[#159895]" value="{{ $user->Mitra->address }}" readonly>
        </div>

        <div class="flex flex-col gap-3 mt-5">
            <label class="font-medium text-[#159895]">Deskripsi Usaha</label>
            <textarea name="business_description" class="textarea textarea-bordered border-[#159895]" readonly>{{ $user->Mitra->business_description }}</textarea>
        </div>
    </div>

    <div class="field-2">
        <div class="flex flex-col gap-3">
            <label class="font-medium text-[#159895]">Nomor Telepon</label>
            <input type="number" name="phone" class="input w-full border-[#159895]" value="{{ $user->Mitra->phone }}" readonly>
        </div>

        <div class="flex flex-col gap-3 mt-5">
            <label class="font-medium text-[#159895]">Kode Pos</label>
            <input type="number" name="post_code" class="input w-full border-[#159895]" value="{{ $user->Mitra->post_code }}" readonly>
        </div>

        <div class="flex flex-col gap-3 mt-5">
            <label class="font-medium text-[#159895]">Permintaan Supply</label>
            <textarea name="cooperate_needs" class="textarea textarea-bordered border-[#159895]" readonly>{{ $user->cooperate_needs }}</textarea>
        </div>
    </div>
</div>
@endsection