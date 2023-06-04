<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrocorp</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
    <script src="{{ asset("assets/sweetalert2/dist/sweetalert2.all.min.js") }}"></script>
    @vite("resources/css/app.css")
</head>
<body class="font-poppins">
    @if(Auth::user()->role_id == 1)
        @include('components.admin.navbar')
    @elseif (Auth::user()->role_id == 2)
        @include('components.mitra.navbar')
    @elseif(Auth::user()->role_id == 3)
        @include('components.pelakuAgro.navbar')
    @endif
    
    {{-- @include('components.mitra.navbar') --}}
    @yield('content')
    
    @if (session("success"))
        <script>
            Swal.fire("Sukses", `{{ session("success") }}`, "success");
        </script>
    @elseif(session("error"))
        <script>
            Swal.fire("Gagal", `{{ session("error") }}`, "error");
        </script>
    @elseif($errors->any())
        <script>
            Swal.fire(
                "Gagal",
                `@foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach`,
                "error"
            )
        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @stack('script')
</body>
</html>