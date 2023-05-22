@extends('layouts.user.app')

@section('content')
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="flex gap-5">
        <img src="{{ $pelaku_agro->avatar }}" alt="">
        <div class="detail flex flex-col gap-5">
            <h1 class="text-xl font-semibold">{{ $pelaku_agro->business_name }}</h1>
            <div class="detail-profile flex flex-col gap-3">
                <div class="name flex gap-3">
                    <img src="{{ asset("assets/img/User.png") }}" width="20px"> 
                    <p>: {{ $pelaku_agro->name }}</p>
                </div>

                <div class="location flex gap-3">
                    <img src="{{ asset("assets/img/location.png") }}" width="20px"> 
                    <p>: {{ $pelaku_agro->address }}</p>
                </div>
            </div>
            <p>{{ $pelaku_agro->business_description }}</p>
            <a href="{{ route("mitra.form.index", $pelaku_agro->id) }}"><button class="btn bg-[#159895] border-0 text-white">Ajukan Kerjasama</button></a>
        </div>
    </div>
</div>
@endsection