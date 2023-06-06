@extends('layouts.user.app')

@section('content')
<img src="{{ asset("assets/img/Petani.png") }}" class="w-full">

<div class="pelaku-agro-list flex justify-center gap-3 mt-5">
    @foreach ($pelaku_agros as $pelaku_agro)
        <div class="card lg:card-side bg-base-100 shadow-xl">
            <img src="{{ $pelaku_agro->avatar }}" alt="Album" width="300px"/>
            <div class="card-body">
                <h2 class="card-title">{{ $pelaku_agro->business_name }}</h2>
                <div class="mt-10 mb-5 flex flex-col gap-5">
                    <div class="name flex gap-3">
                        <img src="{{ asset("assets/img/User.png") }}" width="20px"> 
                        <p>: {{ $pelaku_agro->name }}</p>
                    </div>

                    <div class="location flex gap-3">
                        <img src="{{ asset("assets/img/location.png") }}" width="20px"> 
                        <p>: {{ $pelaku_agro->address }}</p>
                    </div>
                </div>
                <div class="card-actions justify-start">
                    <a href="{{ route("mitra.kemitraan.show", $pelaku_agro->id) }}"><button class="btn bg-[#159895] border-0">Lihat Detail</button></a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection