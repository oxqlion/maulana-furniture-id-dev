<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-\latihan.htmlscale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap');

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

            .slider-container:hover,
            .slider:hover {
                animation-play-state: paused;
            }
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
    </style>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "15px",
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
    <header class="bg-[#434240] nav-blur fixed top-0 left-0 w-full flex items-center z-10">
        <div class="w-full">
            <div class="flex items-center justify-between relative">
                <div class="">
                    <a href="#home" class="font-bold text-lg text-[#DDBD7E] block py-6 ml-6 lg:ml-12">Maulana Furniture
                        Indonesia</a>
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
                                <a href={{ route('home') }}
                                    class="text-base text-[#434240] lg:text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Home</a>
                            </li>
                            <li class="group">
                                <a href={{ route('tentang_kami') }}
                                    class="text-base text-[#434240] lg:text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Tentang
                                    Kami</a>
                            </li>
                            <li class="group">
                                <a href={{ route('katalog') }}
                                    class="text-base text-[#434240] lg:text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Katalog</a>
                            </li>
                            <li class="group">
                                <a href={{ route('cara_pemesanan') }}
                                    class="text-base text-[#434240] lg:text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Cara
                                    Pemesanan</a>
                            </li>
                            <li class="group">
                                <a href={{ route('cara_pembayaran') }}
                                    class="text-base text-[#434240] lg:text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Cara
                                    Pembayaran</a>
                            </li>
                            <li class="group">
                                <a href={{ route('contact') }}
                                    class="text-base text-[#434240] lg:text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="pt-32 relative">
            <div class="" id="penutup"></div>
            @yield('content')
        </div>
    </section>

    <footer class="bg-[#434240] text-white p-12 font-montserrat">
        <div class="md:flex flex-wrap">
            <div class="md:w-2/5 md:pr-8">
                <div class="mb-4 mr-8">
                    <img src="logoperusahaan.png" alt="Logo Perusahaan" class="w-40-">
                    <p class="text-xs">Dengan semangat dan kekuatan dari Team Work menghasilkan produk berkualitas serta
                        memberikan pelayanan yang terbaik sehingga menjadi pemimpin industri furniture asal Jepara yang
                        unggul di Indonesia dan memenangkan persaingan internasional.</p>
                </div>
            </div>
            <div class="md:w-1/5 md:pr-8">
                <h2 class="text-lg font-extrabold mb-6">Menu</h2>
                <ul class="text-sm">
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Beranda
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Tentang Kami
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Katalog
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Cara Pemesanan
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Cara Pembayaran
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="relative group">
                            Kontak
                            <div
                                class="absolute w-full h-0.5 bg-[#DDBD7E] bottom-(-1) left-0 transform scale-x-0 origin-left transition-transform group-hover:scale-x-100 duration-300">
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="md:w-1/5 md:pr-8">
                <h2 class="text-lg font-bold mb-6">E-commerce</h2>
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
            <div class="md:w-1/5">
                <div class="flex mb-6 space-x-4">
                    <a href="#" class="bg-[#1877f2] rounded-full p-2">
                        <i class="fab fa-facebook text-white"></i>
                    </a>
                    <a href="#" class="bg-[#1da1f2] rounded-full p-2">
                        <i class="fab fa-twitter text-white"></i>
                    </a>
                    <a href="#" class="bg-[#e1306c] rounded-full p-2">
                        <i class="fab fa-instagram text-white"></i>
                    </a>
                </div>
                <div class="text-sm">
                    <p class="mb-2">Email: example@example.com</p>
                    <p>Nomor Telepon: +1234567890</p>
                </div>

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
