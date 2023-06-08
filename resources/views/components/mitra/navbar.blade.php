<nav class="flex justify-between py-5 px-10 shadow-md shadow-indigo-50 w-full">
    <div class="nav-logo">
        <img src="{{ asset("assets/img/Logo-Navbar.png") }}">
    </div>

    <div class="nav-menu py-2">
        <ul class="flex gap-[3rem] text-[#159895] font-medium">
            <li>
                <a href="{{ route("mitra.index") }}">Home</a>
            </li>
            <li>
                <a href="{{ route("mitra.premium.permintaan.index") }}">Permintaan</a>
            </li>
            <li>
                <a href="{{ route("mitra.forum.index") }}">Forum</a>
            </li>
            <li>
                <a href="{{ route("mitra.kemitraan.index") }}">Kemitraan</a>
            </li>
        </ul>
    </div>
    
    <div class="nav-profile">
        <img src="{{ asset("assets/img/User.png") }}" class="hover:cursor-pointer">
    </div>

    {{-- Dropdown --}}
    <div class="absolute right-0 top-20 hidden shadow-md bg-white">
        <div class="w-[350px] py-5 px-10 flex flex-col">
            <div class="flex gap-10">
                @if (Auth::user()->avatar)
                    <img src="/{{ Auth::user()->avatar }}" class="rounded-full" width="100px">
                @else
                    <img src="{{ asset("assets/img/User.png") }}" class="rounded-full" width="100px">
                @endif  
                <p class="font-semibold text-2xl">{{ Auth::user()->name }}</p>
            </div>
            <hr class="border-t-8 border-[#626262] my-4" >
            <ul class="flex flex-col gap-5">
                <li>
                    <a href="{{ route("mitra.profile.index") }}" class="flex gap-5">
                        <img src="{{ asset("assets/img/User.png") }}" alt="">
                        <p class="text-xl font-semibold my-auto">Profile</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route("mitra.status_pengajuan.index") }}" class="flex gap-5">
                        <img src="{{ asset("assets/img/question.png") }}" alt="" width="40px">
                        <p class="text-xl font-semibold my-auto">Status Pengajuan</p>
                    </a>
                </li>

                <li>
                    <a href="" class="flex gap-5">
                        <img src="{{ asset("assets/img/shop.png") }}" alt="" width="40px">
                        <p class="text-xl font-semibold my-auto">Mitra</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route("mitra.pembayaran.index") }}" class="flex gap-5">
                        <img src="{{ asset("assets/img/dollar.png") }}" alt="">
                        <p class="text-xl font-semibold my-auto">Pembayaran</p>
                    </a>
                </li>

                <li>
                    <a href="" class="flex gap-5">
                        <img src="{{ asset("assets/img/User.png") }}" alt="">
                        <p class="text-xl font-semibold my-auto">Riwayat Transaksi</p>
                    </a>
                </li>
            </ul>
            <hr class="mt-4 mb-5 border-t-8 border-[#626262]" >
            <form action="{{ route("mitra.logout") }}" method="POST" class="hover:cursor-pointer">
                @csrf
                <div class="flex gap-10">
                    <img src="{{ asset("assets/img/logout.png") }}">
                    <p class="font-semibold text-2xl text-[#005B45]">Logout</p>
                </div>
            </form>
        </div>
    </div>
</nav>

@push('script')
<script>
    $(".nav-profile").on("click", function()
    {
        const dropdown = $(".absolute");
        dropdown.toggleClass("hidden");
    })

    $(".absolute form").on("click", function()
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
                $(".absolute form").submit()
            } 
        });
    });
</script>
@endpush