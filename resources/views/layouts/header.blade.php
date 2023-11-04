<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-\latihan.htmlscale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            },
        };
    </script>
    <style>
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
    </style>
</head>

<body>
    <header class="bg-[#434240] nav-blur fixed top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="">
                    <a href="#home" class="font-bold text-lg text-[#DDBD7E] block py-6">Maulana Furniture
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
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href={{ route('home') }}
                                    class="text-base text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Home</a>
                            </li>
                            <li class="group">
                                <a href={{ route('tentang_kami') }}
                                    class="text-base text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Tentang
                                    Kami</a>
                            </li>
                            <li class="group">
                                <a href={{ route('katalog') }}
                                    class="text-base text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Katalog</a>
                            </li>
                            <li class="group">
                                <a href={{ route('cara_pemesanan') }}
                                    class="text-base text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Cara
                                    Pemesanan</a>
                            </li>
                            <li class="group">
                                <a href={{ route('cara_pembayaran') }}
                                    class="text-base text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Cara
                                    Pembayaran</a>
                            </li>
                            <li class="group">
                                <a href={{ route('contact') }}
                                    class="text-base text-[#DDBD7E] py-2 mx-8 group hover:opacity-50 flex font-normal">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container pt-28">
            @yield('content')
        </div>
    </section>

    <script>
        const hamburger = document.querySelector("#hamburger");
        const navMenu = document.querySelector("#nav-menu");
        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("hamburger-active");
            navMenu.classList.toggle("hidden");
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
