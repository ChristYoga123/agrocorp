@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center gap-5">
        <div class="forum mr-[300px] -ml-28 mt-5">
            <div class="w-[600px] h-[300px]">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                        <tr>
                            <th></th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Detail</th>
                        </tr>   
                        </thead>
                        <tbody>
                        <!-- row 1 -->
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($premium_cooperates as $premium_cooperate)
                            <tr>
                                <th>{{ $i++ }}</th>
                                <td>{{ $premium_cooperate->product_name }}</td>
                                <td>{{ $premium_cooperate->quantity }} Kg</td>
                                <td>{{ $premium_cooperate->price_request }}</td>
                                <td>
                                    <form action="{{ route("pelaku-agro.premium.permintaan.bayar.update", $premium_cooperate->id) }}" method="post">
                                        @csrf
                                        <button class="btn" value="Diterima" name="cooperate_status">Diterima</button>
                                    </form>
                                <td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-2 h-full bg-slate-400 -ml-28"></div>

        <div class="button flex flex-col mt-10">
            <a href="{{ route("pelaku-agro.premium.permintaaan.diterima") }}"><button class="btn">Diterima</button></a>
        </div>
    </div>
@endsection

@push('script')
<script>
    $("button").on("click", function () { 
        $("form").submit();
    });
</script>
@endpush