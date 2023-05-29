@extends('layouts.user.app')

@section('content')
    <div class="flex w-full h-[100vh] justify-center items-center">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Detail</th>
                    <th>Status</th>
                    <th>MOU</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                @php
                    $i= 1;
                @endphp
                @foreach ($kerja_samas as $kerja_sama)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{ $kerja_sama->Mitra->name }}</td>
                        <td>
                            <a href="{{ route("pelaku-agro.surat_bermitra.show", $kerja_sama->Mitra->id) }}">
                                <button class="btn bg-[#159895]">Lihat</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route("pelaku-agro.surat_bermitra.store", $kerja_sama->Mitra->id) }}" method="POST" id="form1">
                                @csrf
                                <select name="cooperate_accepted" id="cooperate_accepted">
                                    <option value="Menunggu" {{ $kerja_sama->status_cooperate == "Menunggu" ? "selected" : "" }}>Proses</option>
                                    <option value="Disetujui" {{ $kerja_sama->status_cooperate == "Disetujui" ? "selected" : "" }}>Disetujui</option>
                                    <option value="Ditolak" {{ $kerja_sama->status_cooperate == "Ditolak" ? "selected" : "" }}>Ditolak</option>
                                </select>
                            </form>
                        </td>
                        @if (!$kerja_sama->pelaku_agro_mou)
                            <td>
                                <form action="{{ route("pelaku-agro.surat_bermitra.store", $kerja_sama->Mitra->id) }}" method="POST" enctype="multipart/form-data" id="form2">
                                    @csrf
                                    <input type="file" class="file-input" name="pelaku_agro_mou" id="pelaku_agro_mou">
                                </form>
                            </td>
                        @else
                            <td>
                                <a href="/storage/{{ $kerja_sama->pelaku_agro_mou }}">
                                    <button class="btn bg-[#159895]">Download MOU</button>
                                </a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                <!-- row 2 -->
                </tbody>
            </table>
        </div>
    </div>

    @push('script')
    <script>
        const select = document.getElementById("cooperate_accepted");
        select.addEventListener("change", function()
        {
            const form1 = document.getElementById("form1");
            form1.submit();
        });

        const upload = document.getElementById("pelaku_agro_mou");
        upload.addEventListener("change", function()
        {
            const form2 = document.getElementById("form2");
            form2.submit();
        });
    </script>
    @endpush
@endsection