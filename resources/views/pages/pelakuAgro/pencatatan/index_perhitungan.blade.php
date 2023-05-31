@extends('layouts.user.app')

@section('content')
<div class="mt-10 flex w-full h-[100vh] justify-center items-center">
    <div class="input-field flex gap-40 pt-5 pl-10">
        <div class="field-1">
            <div class="flex flex-col gap-3">
                <label class="font-medium text-[#159895]">Bulan Produksi Awal</label>
                <select name="production_date" class="border">
                    @foreach ($pelaporans as $pelaporan)
                        <option value="{{ $pelaporan->production_date }}">{{ date_format(date_create($pelaporan->production_date), "M" ) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-3 mt-5">
                <label class="font-medium text-[#159895]">Produksi Awal</label>
                <select name="production_date" class="border">
                    @foreach ($pelaporans as $pelaporan)
                        <option value="{{ $pelaporan->production_date }}">{{ date_format(date_create($pelaporan->production_date), "M" ) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field-2">
            <div class="w-[500px] h-[300px] bg-[#159895]"></div>
        </div>
    </div>
</div>
@endsection