@extends('layouts.user.app')

@section('content')
<form action="" method="POST">
    @csrf
    <div class="input-field flex gap-40 pt-5 pl-10 justify-center">
        <div class="field-1">
            <div class="flex flex-col gap-3">
                <label class="font-medium text-[#159895]">Nama</label>
                <input type="text" name="name" class="input w-full border-[#159895]" value="{{ $user->name }}">
            </div>
    
            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">NIK</label>
                <input type="number" name="nik" class="input w-full border-[#159895]" value="{{ $user->nik }}">
            </div>
    
            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">Alasan Bermitra</label>
                <textarea name="cooperate_reason" class="textarea textarea-bordered border-[#159895]"></textarea>
            </div>
        </div>
    
        <div class="field-2">
            <div class="flex flex-col gap-3">
                <label class="font-medium text-[#159895]">Nama Usaha</label>
                <input type="text" name="business_name" class="input w-full border-[#159895]" value="{{ $user->business_name }}">
            </div>
    
            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">Alamat Usaha</label>
                <input type="text" name="address" class="input w-full border-[#159895]" value="{{ $user->address }}">
            </div>
    
            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">Deskripsi Usaha</label>
                <textarea name="business_description" class="textarea textarea-bordered border-[#159895]">{{ $user->business_description }}</textarea>
            </div>
        </div>
    
        <div class="field-2">
            <div class="flex flex-col gap-3">
                <label class="font-medium text-[#159895]">Nomor Telepon</label>
                <input type="number" name="phone" class="input w-full border-[#159895]" value="{{ $user->phone }}">
            </div>
    
            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">Kode Pos</label>
                <input type="number" name="post_code" class="input w-full border-[#159895]" value="{{ $user->post_code }}">
            </div>
    
            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">Kebutuhan</label>
                <textarea name="cooperate_needs" class="textarea textarea-bordered border-[#159895]"></textarea>
            </div>
        </div>
    </div>
    <div class="mt-28 flex justify-center">
        <button class="btn bg-[#159895]">Kirim</button>
    </div>
</form>
@endsection