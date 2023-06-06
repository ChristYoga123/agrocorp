@extends('layouts.user.app')
@section('content')
<div class="=ml-96 pt-10">
    <div class="ml-96 pt-10">
        <div class="flex flex-col gap-10">
            <div class="flex justify-center">
                <img src="/storage/{{ $forum->forum_image }}" width="300px">
            </div>
            <div class="content text-center">
                <p class="text-xl font-semibold">{{ $forum->title }}</p>
                <p class="mt-5">{{ $forum->forum_text }}</p>
            </div>
        </div>

        <div class="comment flex flex-col gap-3 px-20 mt-20">
            @foreach ($forum->ForumComments as $item)
                <div class="w-full shadow-md">
                    <div class="p-5">
                        <div class="flex gap-3">
                            <img src="/{{ $item->User->avatar }}" alt="" width="20px" class="rounded-full">
                            <p>{{ $item->User->name }}</p>
                        </div>
                        <p class="mt-12">{{ $item->comment }}</p>
                    </div>
                    <div class="flex justify-end mb-3 mr-3">
                        <form action="{{ route("admin.forum.destroy", $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button id="hapus-komentar" class="btn btn-error">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        document.getElementById("hapus-komentar").addEventListener("click", function () {
            Swal.fire({
                icon: 'info',
                title: 'Yakin untuk menghapus komentar?',
                showDenyButton: true,
                confirmButtonText: 'Ya',
                denyButtonText: `Tidak`,
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $("form").submit()
                } 
            }); 
        });
    </script>
@endpush