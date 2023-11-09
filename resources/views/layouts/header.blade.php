<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-\latihan.htmlscale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                    padding: "30px",
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
                    <img src="{{asset('images/logo-maulana.png')}}" alt="Logo Perusahaan" class="w-36 my-4 ml-10">
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
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block w-full lg:flex">
                            <li class="group">
                                <a href="{{route('home')}}" class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    Home
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{route('tentang_kami')}}" class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    Tentang Kami
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{route('katalog')}}" class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    Katalog
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{route('cara_pemesanan')}}" class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    Cara Pemesanan
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{route('cara_pembayaran')}}" class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    Cara Pembayaran
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{route('kontak')}}" class="relative group text-base text-[#434240] lg:text-white hover:text-opacity-50 lg:hover:text-opacity-100 py-2 mx-8 group flex font-normal">
                                    Kontak
                                    <div
                                        class="absolute md:w-full h-0.5 bg-[#DDBD7E] bottom-1 left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
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

    <footer class="bg-[#434240] text-white px-12 pt-12 pb-2 font-montserrat">
        <div class="md:flex flex-wrap">
            <div class="md:w-2/5 md:pr-8 mb-12 md:mb-4">
                <div class="mb-4 mr-8">
                    <img src="{{asset('images/logo-maulana.png')}}" alt="Logo Perusahaan" class="w-60 mb-4">
                    <p class="text-sm">Dengan semangat dan kekuatan dari Team Work menghasilkan produk berkualitas serta
                        memberikan pelayanan yang terbaik sehingga menjadi pemimpin industri furniture asal Jepara yang
                        unggul di Indonesia dan memenangkan persaingan internasional.</p>
                </div>
            </div>
            <div class="md:w-1/5 md:pr-8 mb-12 md:mb-4">
                <h2 class="text-lg font-extrabold mb-4 text-[#DDBD7E]">Menu</h2>
                <ul class="text-sm">
                    <li class="mb-3">
                        <a href="{{route('home')}}" class="relative group">
                            Home
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{route('tentang_kami')}}" class="relative group">
                            Tentang Kami
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{route('katalog')}}" class="relative group">
                            Katalog
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{route('cara_pemesanan')}}" class="relative group">
                            Cara Pemesanan
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{route('cara_pembayaran')}}" class="relative group">
                            Cara Pembayaran
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{route('kontak')}}" class="relative group">
                            Kontak
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="md:w-1/5 md:pr-8 mb-12 md:mb-4">
                <h2 class="text-lg font-bold mb-4 text-[#DDBD7E]">E-commerce</h2>
                <ul class="text-sm">
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Shopee
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Tokopedia
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="md:w-1/5 mb-12 md:mb-4">
                <div class="flex mb-6 space-x-4">
                    <a href="#" class="border-2 border-[#DDBD7E] border-solid rounded-full p-2 relative hover:bg-[#DDBD7E] transition duration-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="#DDBD7E"  viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </a>
                    <a href="#" class="border-2 border-[#DDBD7E] border-solid rounded-full p-2 relative hover:bg-[#DDBD7E] transition duration-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="#DDBD7E" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                    </a>
                    <a href="#" class="border-2 border-[#DDBD7E] border-solid rounded-full p-2 relative hover:bg-[#DDBD7E] transition duration-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="#DDBD7E" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                    </a>
                </div>
                <div class="text-sm">
                    <p class="mb-2">Email: example@example.com</p>
                    <p>Nomor Telepon: +1234567890</p>
                </div>

            </div>
        </div>
        <div class="border-t border-[#DDBD7E] mt-4 mb-4 flex justify-between">
            <p class="text-sm my-4">Copyrights &copy; 2023 Maulana Furniture Indonesia.</p>
            <div class="flex gap-6">
                <p class="text-sm my-4">Terms</p>
                <p class="text-sm my-4">Privacy</p>
                <p class="text-sm my-4">Compliences</p>
            </div>
        </div>
    </footer>
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
