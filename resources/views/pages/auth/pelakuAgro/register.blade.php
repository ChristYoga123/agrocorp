<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrocorp</title>
    <script src="{{ asset("assets/sweetalert2/dist/sweetalert2.all.min.js") }}"></script>
    @vite("resources/css/app.css")
</head>
<body>
    <section class="relative py-10 bg-gray-900 sm:py-16 lg:py-24">
        <div class="absolute inset-0">
            <img class="object-cover w-full h-[100vh]" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.iruhl.com%2Fwp-content%2Fuploads%2F2017%2F08%2Fwhat-is-crop-insurance-field-of-corn.jpg&f=1&nofb=1&ipt=aeefd646669942eec255da139464d88bef278a5481ded7d406364a76c10a8efa&ipo=images" alt="" />
        </div>
        <div class="absolute inset-0 bg-gray-900/20"></div>
    
        <div class="relative max-w-lg px-4 mx-auto sm:px-0">
            <div class="overflow-hidden bg-white bg-opacity-75 rounded-md shadow-md">
                <div class="px-4 py-6 sm:px-8 sm:py-7">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold text-gray-900">Sign Up</h2>
                    </div>
    
                    <form action="{{ route("pelaku-agro.register") }}" method="POST" class="mt-8">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="username" class="text-base font-medium text-gray-900"> Username </label>
                                <div class="mt-2.5">
                                    <input type="text" name="name" id="username" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>

                            <div>
                                <label for="email" class="text-base font-medium text-gray-900"> Email </label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
    
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="text-base font-medium text-gray-900"> Password </label>
                                </div>
                                <div class="mt-2.5">
                                    <input type="password" name="password" id="password" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
    
                            <div>
                                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-gradient-to-r from-[#002B5B] to-[#159895] border border-transparent rounded-md focus:outline-none">Register</button>
                                <div class="flex gap-2 justify-center mt-3">
                                    <p class="text-white font-semibold">Sudah mempunyai akun? </p>
                                    <a href="">
                                        <p class="text-[#005B45] font-semibold">Login</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>    
    @if (session("error"))
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
</body>
</html>