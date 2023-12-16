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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script> --}}

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
            darkMode: 'class',
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


    <!-- component -->
    <div>
        <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()">


            <!-- Sidebar backdrop -->
            <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
                style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

            <!-- Sidebar -->
            <aside x-transition:enter="transition transform duration-300"
                x-transition:enter-start="-translate-x-full opacity-30  ease-in"
                x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                x-transition:leave-end="-translate-x-full opacity-0 ease-in"
                class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-52 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
                :class="{ '-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen }">
                <!-- sidebar header -->
                <div class="bg-[#434240] border-b border-white flex items-center justify-between flex-shrink-0 p-2"
                    :class="{ 'lg:justify-center': !isSidebarOpen }">
                    <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                        <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                            <img src="{{ asset('images/logo-maulana.png') }}" alt="Logo Perusahaan"
                                class="w-10 lg:w-40">
                        </span>
                        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                </div>
                <!-- Sidebar links -->
                <nav class="flex-1 bg-[#434240] overflow-hidden hover:overflow-y-auto">
                    <ul class="p-2 overflow-hidden">
                        <li>
                            <a href="{{ route('buat_produk') }}"
                                class="flex items-center gap-2 p-2 space-x-2 rounded-md group hover:bg-gray-100"
                                :class="{ 'justify-center': !isSidebarOpen }">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="w-6 h-6 text-[#DDBD7E] group-hover:text-[#434240]"
                                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg>
                                </span>
                                <span class="text-[#DDBD7E] group-hover:text-[#434240] font-semibold"
                                    :class="{ 'lg:hidden': !isSidebarOpen }">Dashboard</span>
                            </a>
                        </li>
                        <!-- Sidebar Links... -->
                    </ul>
                </nav>
                <!-- Sidebar footer -->
                <div class="flex-shrink-0 p-2 border-t max-h-14">
                    <button
                        class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring">
                        <span>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }"> Logout </span>
                    </button>
                </div>
            </aside>

            <div class="flex flex-col flex-1 h-full overflow-hidden">
                <!-- Navbar -->
                <header class="flex-shrink-0 border-b-4 border-[#434240]">
                    <div class="flex items-center justify-between p-2">
                        <!-- Navbar left -->
                        <div class="flex items-center space-x-3">
                            <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">K-WD</span>
                            <!-- Toggle sidebar button -->
                            <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                                <svg class="w-4 h-4 text-gray-600"
                                    :class="{ 'transform transition-transform -rotate-180': isSidebarOpen }"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        {{-- <!-- Mobile search box -->
            <div
              x-show.transition="isSearchBoxOpen"
              class="fixed inset-0 z-10 bg-black bg-opacity-20"
              style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
            >
              <div
                @click.away="isSearchBoxOpen = false"
                class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md"
              >
                <div class="flex items-center flex-1 px-2 space-x-2 border-b border-slate-900">
                  <!-- search icon -->
                  <span>
                    <svg
                      class="w-6 h-6 text-gray-500"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      />
                    </svg>
                  </span>
                  <input
                    type="text"
                    placeholder="Search"
                    class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none"
                  />
                </div>
                <!-- close button -->
                <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                  <svg
                    class="w-4 h-4 text-gray-500"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div> --}}

                        <!-- Desktop search box -->
                        <div class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5 ">
                            <!-- search icon -->
                            <span>
                                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" placeholder="Search"
                                class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border" />
                        </div>

                        <!-- Navbar right -->
                        <div class="relative flex items-center space-x-3">
                            <!-- Search button -->
                            <button @click="isSearchBoxOpen = true"
                                class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>

                            <div class="items-center hidden space-x-3 md:flex">
                                <!-- Notification Button -->
                                <div class="relative" x-data="{ isOpen: false }">
                                    <!-- red dot -->
                                    <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                                    <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                                    <button @click="isOpen = !isOpen"
                                        class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown card -->
                                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                        class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                        <div class="p-4 font-medium border-b">
                                            <span class="text-gray-800">Notification</span>
                                        </div>
                                        <ul class="flex flex-col p-2 my-2 space-y-1">
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">See All</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Services Button -->
                                <div x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen"
                                        class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown -->
                                    <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                        x-show.transition.opacity="isOpen"
                                        class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                        <div class="p-4 text-lg font-medium border-b">Web apps & services</div>
                                        <ul class="flex flex-col p-2 my-3 space-y-3">
                                            <li>
                                                <a href="#"
                                                    class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                    <span class="block mt-1">
                                                        <svg class="w-6 h-6 text-gray-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                            <path fill="#fff"
                                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                        </svg>
                                                    </span>
                                                    <span class="flex flex-col">
                                                        <span class="text-lg">Atlassian</span>
                                                        <span class="text-sm text-gray-400">Lorem ipsum dolor
                                                            sit.</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                    <span class="block mt-1">
                                                        <svg class="w-6 h-6 text-gray-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                        </svg>
                                                    </span>
                                                    <span class="flex flex-col">
                                                        <span class="text-lg">Slack</span>
                                                        <span class="text-sm text-gray-400">Lorem ipsum, dolor sit amet
                                                            consectetur adipisicing elit.</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">Show all apps</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Options Button -->
                                <div class="relative" x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen"
                                        class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown card -->
                                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                        class="absolute w-40 max-w-sm mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                        <div class="p-4 font-medium border-b">
                                            <span class="text-gray-800">Options</span>
                                        </div>
                                        <ul class="flex flex-col p-2 my-2 space-y-1">
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">See All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- avatar button -->
                            <div class="relative" x-data="{ isOpen: false }">
                                <button @click="isOpen = !isOpen"
                                    class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                                    <img class="object-cover w-8 h-8 rounded-full"
                                        src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                        alt="Ahmed Kamel" />
                                </button>
                                <!-- green dot -->
                                <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping">
                                </div>
                                <div
                                    class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3">
                                </div>

                                <!-- Dropdown card -->
                                <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                    class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
                                    <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                        <span class="text-gray-800">{{ $user->name }}</span>
                                        <span class="text-sm text-gray-400">{{ $user->email }}</span>
                                    </div>
                                    <ul class="flex flex-col p-2 my-2 space-y-1">
                                        <li>
                                            <a href="{{ route('home') }}"
                                                class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                @yield('content1')
                <!-- Main footer -->
                <footer class="flex items-center justify-center flex-shrink-0 p-4 border-t max-h-14">
                    <div class="text-sm">
                        Copyrights © 2023 Maulana Furniture Indonesia.
                    </div>
                    {{-- <div>
            <!-- Github svg -->
            <a
              href="https://github.com/Kamona-WD/starter-dashboard-layout"
              target="_blank"
              class="flex items-center space-x-1"
            >
              <svg class="w-6 h-6 text-gray-400" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                <path
                  fill-rule="evenodd"
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"
                ></path>
              </svg>
              <span class="hidden text-sm md:block">View on Github</span>
            </a>
          </div> --}}
                </footer>
            </div>

            <!-- Setting panel button -->
            <div>
                <button @click="isSettingsPanelOpen = true"
                    class="fixed right-0 px-4 py-2 text-sm font-medium text-white uppercase transform rotate-90 translate-x-8 bg-gray-600 top-1/2 rounded-b-md">
                    Settings
                </button>
            </div>

            <!-- Settings panel -->
            <div x-show="isSettingsPanelOpen" @click.away="isSettingsPanelOpen = false"
                x-transition:enter="transition transform duration-300"
                x-transition:enter-start="translate-x-full opacity-30  ease-in"
                x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                x-transition:leave-end="translate-x-full opacity-0 ease-in"
                class="fixed inset-y-0 right-0 flex flex-col bg-white shadow-lg bg-opacity-20 w-80"
                style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                <div class="flex items-center justify-between flex-shrink-0 p-2">
                    <h6 class="p-2 text-lg">Settings</h6>
                    <button @click="isSettingsPanelOpen = false" class="p-2 rounded-md focus:outline-none focus:ring">
                        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 max-h-full p-4 overflow-hidden hover:overflow-y-scroll">
                    <span>Settings Content</span>
                    <!-- Settings Panel Content ... -->
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
        <script>
            const setup = () => {
                return {
                    loading: true,
                    isSidebarOpen: false,
                    toggleSidbarMenu() {
                        this.isSidebarOpen = !this.isSidebarOpen
                    },
                    isSettingsPanelOpen: false,
                    isSearchBoxOpen: false,
                }
            }
        </script>
    </div>

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
