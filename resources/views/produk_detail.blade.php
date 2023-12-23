@extends('layouts.header')

@section('content')
    <!-- component -->

    <body class="mt-28">

        <div class="container font-montserrat mb-20">
            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                <a href="{{ route('home') }}" class="hover:underline hover:text-gray-600">Home</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="{{ route('katalog') }}" class="hover:underline hover:text-gray-600">Katalog</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <span>Detail Produk</span>
            </div>
            <!-- ./ Breadcrumbs -->

            <div class="px-3 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row gap-8 -mx-8 w-full mx-auto h-fit">
                    <div class="flex-auto md:w-3/5 px-4 md:ml-[-48px]">
                        <div x-data="{ image: 1 }" x-cloak>
                            <div class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4">
                                <div x-show="image === 1"
                                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center">
                                    <img src="{{ asset('storage/' . $product->images->slice(0, 1)->first()->gambar) }}"
                                        alt="" class="h-full w-full object-cover rounded-lg ">
                                </div>
                                <div x-show="image === 2"
                                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center">
                                    <img src="{{ asset('storage/' . $product->images->slice(1, 1)->first()->gambar) }}"
                                        alt="" class="h-full w-full object-cover rounded-lg">
                                </div>
                                <div x-show="image === 3"
                                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center">
                                    <img src="{{ asset('storage/' . $product->images->slice(2, 1)->first()->gambar) }}"
                                        alt="" class="h-full w-full object-cover rounded-lg">
                                </div>
                            </div>
                            @php
                                $image_1 = $product->images->slice(0, 1)->first()->gambar;
                                $image_2 = $product->images->slice(1, 1)->first()->gambar;
                                $image_3 = $product->images->slice(2, 1)->first()->gambar;
                            @endphp

                            <div class="flex -mx-2 mb-4">
                                <!-- Button untuk gambar pertama -->
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = 1" :class="{ 'ring-2 ring-[#434240]': image === 1 }"
                                        class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                        <img :src="'{{ asset('storage/' . $image_1) }}'" alt=""
                                            class="h-full w-full object-cover rounded-lg">
                                    </button>
                                </div>

                                <!-- Button untuk gambar kedua -->
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = 2" :class="{ 'ring-2 ring-[#434240]': image === 2 }"
                                        class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                        <img :src="'{{ asset('storage/' . $image_2) }}'" alt=""
                                            class="h-full w-full object-cover rounded-lg">
                                    </button>
                                </div>

                                <!-- Button untuk gambar ketiga -->
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = 3" :class="{ 'ring-2 ring-[#434240]': image === 3 }"
                                        class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                        <img :src="'{{ asset('storage/' . $image_3) }}'" alt=""
                                            class="h-full w-full object-cover rounded-lg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto md:w-2/4 pl-4 md:pl-0">
                        <h2
                            class="mb-2 leading-tight tracking-tight font-semibold text-gray-800 text-2xl md:text-4xl truncate">
                            {{ ucwords($product->nama) }}</h2>
                        <p class="text-gray-500 text-sm">By <a href="{{ route('home') }}"
                                class="text-[#DDBD7E] hover:underline">Maulana
                                Furniture Indonesia</a></p>
                        <div class="my-4 w-fit rounded-lg bg-[#DDBD7E] flex py-2 px-3">
                            <span class="text-[#434240] mr-1 mt-1">Rp. </span>
                            <span
                                class="font-bold text-[#434240] text-4xl">{{ number_format($product->harga, 0, ',', '.') }}
                            </span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex text-sm">
                                <p class="font-medium">Kondisi : </p>
                                <p class="pl-1 text-black-700">{{ $product->kondisi }}</p>
                            </div>
                            <div class="flex text-sm">
                                <p class="font-medium">Waktu Preorder : </p>
                                <p class="pl-1 text-black-700">{{ $product->waktu_preorder ?? '14' }} hari</p>
                            </div>
                            <div class="flex text-sm">
                                <p class="font-medium">Minimal Pemesanan : </p>
                                <p class="pl-1 text-black-700">{{ $product->minimal_pemesanan }} buah</p>
                            </div>
                        </div>

                        <hr class="w-full my-6">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Spesifikasi Produk :</p>
                            <div class="flex text-sm">
                                <p>- Material : {{ $product->material }}</p>
                            </div>
                            <div class="flex text-sm truncate">
                                <p>- Furnish : </p>
                                <p class="pl-1">{{ $product->furnish }}</p>
                            </div>
                            <div class="flex text-sm">
                                <p>- Ukuran : </p>
                                <p class="pl-1">{{ $product->ukuran ?? 'Standar' }}</p>
                            </div>
                        </div>
                        <div class=" md:absolute md:mt-24 mt-4 md:w-5/12 overflow-hidden ">
                            <a href="https://wa.me/6287815879282" target="_blank"
                                class="w-full gap-4 border-2 border-[#434240] font-bold py-2 flex items-center justify-center cursor-pointer group hover:bg-[#434240] rounded transition">
                                <i
                                    class="fab fa-whatsapp text-[#434240] text-2xl group-hover:text-[#DDBD7E] group-hover:transition transition"></i>
                                <p class="text-[#434240] group-hover:text-[#DDBD7E] transition">Pesan Sekarang</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>

        <div class="container mb-6">
            <p class="text-2xl font-bold font-montserrat text-[#434240]">
                Produk Rekomendasi
            </p>
            <div class="border-b-4 border-[#DDBD7E] mt-1 w-10"></div>
        </div>
        <div class="swiper mySwiper md:ml-10 md:ml-20 ml-20 mb-12 font-montserrat">
            <div class="swiper-wrapper">
                @foreach ($productRec as $pro)
                    <div class="swiper-slide mt-2">
                        <div class="max-w-full md:max-w-sm w-80 xl:w-56 lg:w-52 md:w-52 sm:w-64 sm:justify-center relative">
                            <a href="{{ route('produk_detail', $pro) }}">
                                <div
                                    class="group relative overflow-hidden transform transition-transform duration-300 shadow-xl hover:-translate-y-2 rounded-lg cursor-pointer">
                                    <div class="relative overflow-hidden group">
                                        <!-- Foto Produk -->
                                        <img src="{{ asset('images/products/' . $pro->id . '_1.png') }}"
                                            alt="Kursi Hiroshima x Anyaman Viro"
                                            class="w-full h-64 group-hover:brightness-50 transition-transform duration-900 object-fit" />
                                        <div
                                            class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-900">
                                            <p class="text-white text-lg font-semibold">See Details</p>
                                        </div>
                                    </div>
                                    <div class="py-4 bg-white shadow-md px-4 flex flex-col gap-1">
                                        <!-- Nama Produk -->
                                        <h2 class="text-md text-[#434240] font-semibold truncate">
                                            {{ ucwords($pro->nama) }}
                                        </h2>
                                        <h2 class="text-sm text-slate-700">{{ $pro->kategori }}</h2>
                                        <div class="flex">
                                            <span class="text-[#434240] font-bold text-xs mt-1 mr-1">Rp. </span>
                                            <span
                                                class="font-bold text-[#434240] text-lg">{{ number_format($pro->harga, 0, ',', '.') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-12">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </body>


    <x-footer></x-footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 5,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            bulletActiveClass: "swiper-pagination-bullet-active bg-[#434240]",
            breakpoints: {
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 1,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
            },
            autoplay: {
                delay: 1500,
            },
        });
    </script>
    <script>
        // Tambahkan data currentImage di Alpine.js untuk melacak gambar saat ini
        window.currentImage = null;
    </script>
@endsection
