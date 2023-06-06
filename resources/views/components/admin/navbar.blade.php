<nav class="w-[350px] h-[105vh] bg-[#159895] absolute z-[9999999]">
    <div class="p-5 text-white">
        <div class="profile flex gap-5">
            <img src="/{{ Auth::user()->avatar }}" class="rounded-full" width="100px">
            <p class="font-semibold text-2xl">{{ Auth::user()->name }}</p>
        </div>
        <hr class="border-t-8 border-white my-4">
        <ul class="flex flex-col gap-10">
            <li>
                <a href="{{ route("admin.profile.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/user-white.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Profile</p>
                </a>
            </li>
            <li>
                <a href="{{ route("admin.pelakuAgro.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/user-white.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Akun Pelaku Agro</p>
                </a>
            </li>
            <li>
                <a href="{{ route("admin.mitra.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/camp.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Akun Mitra</p>
                </a>
            </li>
            <li>
                <a href="{{ route("admin.pengajuan.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/formulir.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Formulir Pengajuan</p>
                </a>
            </li>
            <li>
                <a href="{{ route("admin.forum.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/forum.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Forum</p>
                </a>
            </li>
            <li>
                <a href="{{ route("mitra.profile.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/permintaan.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Permintaan Barang</p>
                </a>
            </li>
            <li>
                <a href="{{ route("admin.riwayat.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/clock.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Riwayat Transaksi</p>
                </a>
            </li>
            <li>
                <a href="{{ route("admin.premium.index") }}" class="flex gap-5">
                    <img src="{{ asset("assets/img/user-white.png") }}" alt="">
                    <p class="text-lg font-semibold my-auto">Premium</p>
                </a>
            </li>
        </ul>
        <form action="{{ route("admin.logout") }}" method="POST" class="hover:cursor-pointer mt-10">
            @csrf
            <div class="flex gap-10">
                <img src="{{ asset("assets/img/logout-white.png") }}">
                <p class="font-semibold text-2xl text-white">Logout</p>
            </div>
        </form>
    </div>
</nav>
@push('script')
<script>
    $("nav form").on("click", function()
    {
        Swal.fire({
            icon: 'info',
            title: 'Yakin untuk keluar?',
            showDenyButton: true,
            confirmButtonText: 'Ya',
            denyButtonText: `Tidak`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $("nav form").submit()
            } 
        });
    });
</script>
@endpush