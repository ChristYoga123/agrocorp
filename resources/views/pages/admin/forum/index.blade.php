@extends('layouts.user.app')

@section('content')
    <div class="=ml-96 pt-10">
        <div class="ml-96 pt-10">
            <p class="text-4xl font-medium">Forum</p>
            @foreach ($forums as $forum)
            <div class="card card-side bg-base-100 shadow-xl mt-5">
                <img src="/storage/{{ $forum->forum_image }}" alt="Movie" width="200px"/>
                <div class="card-body">
                    <h2 class="card-title">{{ $forum->title }}</h2>
                    <p>{{ substr($forum->forum_text, 0, 20) }}</p>
                    <div class="card-actions justify-end">
                        <button>
                            <img src="{{ asset("assets/img/comment.png") }}" alt="" width="30px">
                            <p>{{ count($forum->ForumComments) }}</p>
                        </button>
                        <a href="{{ route("admin.forum.show", $forum->id) }}">
                            <button class="btn btn-primary">Lihat</button>
                        </a>
                        <form action="{{ route("admin.forum.destroy", $forum->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-error" id="hapus-forum">Detail</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.getElementById("hapus-forum").addEventListener("click", function () {
            Swal.fire({
                icon: 'info',
                title: 'Yakin untuk menghapus forum?',
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