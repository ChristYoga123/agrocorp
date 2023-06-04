@extends('layouts.user.app')

@section('content')
    <div class="ml-96 pt-10"> 
        <p class="text-4xl font-medium">PROFILE</p>
        <div class="mt-10">
            <form action="{{ route("admin.profile.update", $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-field flex gap-20 pt-5 pl-10">
                    <div class="edit-avatar mt-9">
                        @if ($user->avatar)
                            <img src="/{{ $user->avatar }}" width="200px">
                        @endif
                        <input type="file" class="file-input border-[#159895]" name="avatar">
                    </div>
        
                    <div class="field-1">
                        <div class="flex flex-col gap-3">
                            <label class="font-medium text-[#159895]">Username</label>
                            <input type="text" name="name" class="input w-full border-[#159895]" value="{{ $user->name }}">
                        </div>
        
                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Nomor Telepon</label>
                            <input type="number" name="phone" class="input w-full border-[#159895]" value="{{ $user->phone }}">
                        </div>
        
                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Nomor rekening</label>
                            <input type="number" name="rekening_number" class="input w-full border-[#159895]" value="{{ $user->rekening_number }}">
                        </div>
                    </div>
        
                    <div class="field-2">
                        <div class="flex flex-col gap-3">
                            <label class="font-medium text-[#159895]">Email</label>
                            <input type="text" name="email" class="input w-full border-[#159895]" value="{{ $user->email }}">
                        </div>
        
                        <div class="flex flex-col gap-3 mt-5">
                            <label class="font-medium text-[#159895]">Alamat</label>
                            <input type="text" name="address" class="input w-full border-[#159895]" value="{{ $user->address }}">
                        </div>
                    </div>
                </div>
    
                <div class="mt-28 flex justify-center">
                    <button class="btn bg-[#159895]">Simpan</button>
                </div>
            </form>
        </div>

    </div>
@endsection