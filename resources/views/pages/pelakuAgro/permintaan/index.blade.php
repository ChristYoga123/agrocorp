@extends("layouts.user.app")

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="w-[700px] h-[500px] flex-col shadow-lg flex justify-center items-center">
        <div class="flex flex-col gap-5">
            <img src="{{ asset("assets/img/cash.png") }}" alt="">
            <p class="text-xl font-semibold text-[#159895]">Fitur ini merupakan fitur berbayar</p>
            <a href="{{ route("pelaku-agro.premium.permintaan.bayar.index") }}" class="btn bg-[#159895] mt-5">Bayar</a>
        </div>
    </div>
</div>
@endsection