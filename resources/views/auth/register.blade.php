<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gelasio:wght@700&family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap');
    </style>
    <title>Document</title>
</head>

<body>
    <section class="bg-white dark:bg-[#434240]">
        <div class="flex justify-center min-h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/5"
                style="background-image: url('https://images.unsplash.com/photo-1597072689227-8882273e8f6a?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
            </div>

            <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <img class="w-auto md:h-12 mb-8 h-8" src="{{ asset('images/logo-maulana.png') }}" alt="">

                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Terima Kasih Telah Bekerja Sama Dengan <span class="text-[#ddbd7e]">Maulana Furniture
                            Indoensia</span>.
                    </h1>

                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        Silahkan buat akun terlebih dahulu untuk melancarkan project ini dari awal hingga akhir.
                    </p>

                    {{-- <div class="mt-6">
                        <h1 class="text-gray-500 dark:text-gray-300">Select type of account</h1>

                        <div class="mt-3 md:flex md:items-center md:-mx-2">
                            <button
                                class="flex justify-center w-full px-6 py-3 text-white bg-blue-500 rounded-lg md:w-auto md:mx-2 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>

                                <span class="mx-2">
                                    client
                                </span>
                            </button>

                            <button
                                class="flex justify-center w-full px-6 py-3 mt-4 text-blue-500 border border-blue-500 rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-blue-400 dark:text-blue-400 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>

                                <span class="mx-2">
                                    worker
                                </span>
                            </button>
                        </div>
                    </div> --}}

                    <form method="POST" action="{{ route('register') }}"
                        class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                        @csrf
                        <div class="md:col-span-2">
                            <label for="project_name"
                                class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Project Name</label>
                            <input type="text" name="project_name" placeholder="Project Name"
                                class=" @error('project_name') is-invalid @enderror block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-[#b5a27d] dark:bg-[#434240] dark:text-gray-300 dark:border-[#DDBD7E] focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            @error('project_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full
                                Name</label>
                            <input id="name" type="text"
                                class=" @error('name') is-invalid @enderror block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-[#b5a27d] dark:bg-[#434240] dark:text-gray-300 dark:border-[#DDBD7E] focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email
                                address</label>

                            <input id="email" type="email"
                                class="@error('email') is-invalid @enderror block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-[#b5a27d] dark:bg-[#434240] dark:text-gray-300 dark:border-[#DDBD7E] focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <input id="password" type="password"
                                class="@error('password') is-invalid @enderror block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-[#b5a27d] dark:bg-[#434240] dark:text-gray-300 dark:border-[#DDBD7E] focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label for="password-confirm"
                                class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                            <input id="password-confirm" type="password"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-[#b5a27d] dark:bg-[#434240] dark:text-gray-300 dark:border-[#DDBD7E] focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <button type="submit"
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition duration-300 transform bg-[#ddbd7e] rounded-lg hover:opacity-50 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up </span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        @if (Route::has('password.request'))
                            <a class="flex md:justify-end block mt-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
