@extends('layouts.user.app')

@section('content')
    <div class="container pt-5 pl-10 ">
        <p class="text-4xl font-medium">Buat Topik</p>
    </div>

    <div class="mt-10">
        <form action="{{ route("pelaku-agro.forum.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-field flex gap-40 pt-5 pl-10">
                <div class="mt-9">
                    <input type="file" class="file-input border-[#159895]" name="forum_image">
                </div>
    
                <div class="field-1">
                    <div class="flex flex-col gap-3">
                        <label class="font-medium text-[#159895]">Judul</label>
                        <input type="text" name="title" class="input w-full border-[#159895]">
                    </div>
    
                    <div class="flex flex-col gap-3 mt-5">
                        <label class="font-medium text-[#159895]">Isi Postingan</label>
                        <textarea name="forum_text" class="textarea textarea-bordered border-[#159895]"></textarea>
                    </div>
                </div>
            </div>

            <div class="mt-28 flex justify-center">
                <button class="btn bg-[#159895]">Simpan</button>
            </div>
        </form>
    </div>

    
@endsection