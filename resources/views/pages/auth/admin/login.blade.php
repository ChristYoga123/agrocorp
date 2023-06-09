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
            overflow: hidden;
        }
    </style>
    <script src="{{ asset("assets/sweetalert2/dist/sweetalert2.all.min.js") }}"></script>
    @vite("resources/css/app.css")
</head>
<body class="font-poppins">
    <div class="flex">
        <img src="{{ asset("assets/img/auth/auth.png") }}" width="1000px">
        <div class="welcome-content w-full h-[100vh] flex justify-center items-center">
            <div class="flex flex-col gap-12">
                <img src="{{ asset("assets/img/Logo.png") }}" width="200px" class="mx-auto">
                <p class="text-center font-medium">Aplikasi untuk mencari mitra <br> dalam dunia agroindustri di Indonesia</p>
                <form action="{{ route("admin.login") }}" method="POST">
                    @csrf
                    <div>
                        <label class="mb-3 font-medium">Email</label>
                        <input type="email"
                               class="input w-full"
                               name="email">
                    </div>
    
                    <div class="mt-3">
                        <label class="mb-3 font-medium">Password</label>
                        <input type="password"
                               class="input w-full"
                               name="password">
                    </div>
                    <button class="mt-6 btn bg-[#159895] w-full border-0">Login</button>
                </form>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <script>
            Swal.fire("Gagal", `Data tidak boleh kosong`, "error");
        </script>
    @elseif(session("error"))
        <script>
            Swal.fire("Gagal", `Email salah atau password salah`, "error");
        </script>
    @endif
</body>
</html>