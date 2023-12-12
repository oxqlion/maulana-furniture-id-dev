<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-\latihan.htmlscale=1.0" />
    <title>Maulana Furniture Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" --}}
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js"
        integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
        integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gelasio:wght@700&family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hamburger-active>span:nth-child(1) {
            transform: rotate(45deg);
        }

        .hamburger-active>span:nth-child(3) {
            transform: rotate(-45deg);
        }

        .hamburger-active>span:nth-child(2) {
            transform: scale(0);
        }

        .nav-blur {
            backdrop-filter: blur(5px);
            box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
        }

        @keyframes slide {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .slider {
            display: flex;
            animation: 5s slide infinite linear;
        }

        .slider-container {
            display: flex;
            height: 100%;
        }

        @media (min-width: 1025px) {
            .slider-container:before {
                position: absolute;
                top: 0;
                left: 0;
                width: 300px;
                height: 100%;
                background: linear-gradient(to left, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
                content: "";
                z-index: 2;
            }

            .slider-container:after {
                position: absolute;
                top: 0;
                right: 0;
                width: 300px;
                height: 100%;
                background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
                content: "";
                z-index: 2;
            }

            .swiper-pagination-bullet {
                width: 10px;
                height: 10px;
                background-color: #DDBD7E;
                opacity: 0.7;
                margin: 0 5px;
            }

            .swiper-pagination-bullet-active {
                background-color: #434240;
                opacity: 1;
            }

            /* .slider-container:hover,
            .slider:hover {
                animation-play-state: paused;
            } */
        }

        .penutup {
            position: absolute;
            background-color: black;
            opacity: 60%;
            z-index: 3;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        a:hover svg {
            fill: #434240;
            transition: fill 600ms;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "34px",
                },
                extend: {
                    screens: {
                        "2xl": "1320px",
                    },
                },
                fontFamily: {
                    montserrat: ['Montserrat']
                },
            },
        }
    </script>
</head>

<body>
    <header class="bg-[#434240] fixed top-0 left-0 w-full flex items-center z-10 font-montserrat">
        <div class="w-full">
            <div class="flex items-center justify-between relative">
                <div class="">
                    <img src="{{ asset('images/logo-maulana.png') }}" alt="Logo Perusahaan" class="w-36 my-4 ml-10">
                </div>
                <div class="flex items-center">
                    <button id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-[#DDBD7E] transition duration-300 ease-in-out origin-top-left"></span>
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-[#DDBD7E] transition duration-300 ease-in-out"></span>
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-[#DDBD7E] transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <div id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block w-full lg:flex mr-16">
                            <li class="group">
                                <a href="{{ route('home') }}"
                                    class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    <p class=" {{ Route::currentRouteName() == 'home' ? 'text-[#DDBD7E]' : '' }}">Home
                                    </p>
                                    <div
                                        class=" absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('katalog') }}"
                                    class=" relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    <p class=" {{ Route::currentRouteName() == 'katalog' ? 'text-[#DDBD7E]' : '' }}">
                                        Katalog</p>
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('cara_pemesanan') }}"
                                    class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    <p
                                        class=" {{ Route::currentRouteName() == 'cara_pemesanan' ? 'text-[#DDBD7E]' : '' }}">
                                        Cara Pemesanan</p>
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('cara_pembayaran') }}"
                                    class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    <p
                                        class=" {{ Route::currentRouteName() == 'cara_pembayaran' ? 'text-[#DDBD7E]' : '' }}">
                                        Cara Pembayaran</p>
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('kontak') }}"
                                    class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    <p class=" {{ Route::currentRouteName() == 'kontak' ? 'text-[#DDBD7E]' : '' }}">
                                        Kontak</p>
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="group">
                                        <a href="{{ route('login') }}"
                                            class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                            <p
                                                class="nav-link {{ Route::currentRouteName() == 'kontak' ? 'text-[#DDBD7E]' : '' }}">
                                                {{ __('Login') }}</p>
                                            <div
                                                class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                            </div>
                                        </a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="group">
                                        <a class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal"
                                            href="{{ route('register') }}">
                                            <p
                                                class="nav-link {{ Route::currentRouteName() == 'kontak' ? 'text-[#DDBD7E]' : '' }}">
                                                {{ __('Register') }}
                                            </p>
                                            <div
                                                class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="relative">
            <div class="" id="penutup"></div>
            @yield('content')
        </div>
    </section>

    <script>
        const hamburger = document.querySelector("#hamburger");
        const navMenu = document.querySelector("#nav-menu");
        const penutup = document.querySelector("#penutup");
        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("hamburger-active");
            navMenu.classList.toggle("hidden");
            penutup.classList.toggle("penutup");
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
