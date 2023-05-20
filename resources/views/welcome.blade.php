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
    @vite("resources/css/app.css")
</head>
<body class="font-poppins">
    <div class="flex">
        <img src="{{ asset("assets/img/auth/auth.png") }}" width="1000px">
        <div class="welcome-content w-full h-[100vh] flex justify-center items-center">
            <div class="flex flex-col gap-12">
                <img src="{{ asset("assets/img/Logo.png") }}" width="200px" class="mx-auto">
                <p class="text-center font-medium">Aplikasi untuk mencari mitra <br> dalam dunia agroindustri di Indonesia</p>
                <p class="text-center font-medium">Login Sebagai</p>
                <div class="flex justify-center gap-[5rem]">
                    <a href="{{ route("pelaku-agro.login.index") }}"><button class="btn bg-[#159895] border-0">Pelaku Agro</button></a>
                    <a href="{{ route("mitra.login.index") }}"><button class="btn bg-[#159895] border-0 w-[120px]">Mitra</button></a>
                </div>
                <p class="text-center font-medium">Register Sebagai</p>
                <div class="flex justify-center gap-[5rem]">
                    <a href="{{ route("pelaku-agro.register.index") }}"><button class="btn bg-[#159895] border-0">Pelaku Agro</button></a>
                    <a href="{{ route("mitra.register.index") }}"><button class="btn bg-[#159895] border-0 w-[120px]">Mitra</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>