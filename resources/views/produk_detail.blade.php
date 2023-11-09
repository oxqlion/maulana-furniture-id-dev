@extends('layouts.header')

@section('content')
    <!-- component -->

    <body class="mt-28">

        <div class="container font-montserrat mb-32">
            <!-- Breadcrumbs -->
            <div class="px-4">
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
            </div>
            <!-- ./ Breadcrumbs -->

            <div class="px-3 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row gap-8 -mx-8 w-full mx-auto h-fit">
                    <div class="flex-auto md:w-3/5 px-4">
                        <div x-data="{ image: 1 }" x-cloak>
                            <div class="h-64 md:h-96 rounded-lg bg-gray-100 mb-4">
                                <div x-show="image === 1"
                                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center">
                                    <img src="{{ asset('images/products/' . $product->id . '_1.png') }}" alt=""
                                        class="h-full w-full object-cover rounded-lg ">
                                </div>
                                <div x-show="image === 2"
                                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center">
                                    <img src="{{ asset('images/products/' . $product->id . '_2.png') }}" alt=""
                                        class="h-full w-full object-cover rounded-lg">
                                </div>
                                <div x-show="image === 3"
                                    class="h-64 md:h-96 rounded-lg mb-4 flex items-center justify-center">
                                    <img src="{{ asset('images/products/' . $product->id . '_3.png') }}" alt=""
                                        class="h-full w-full object-cover rounded-lg">
                                </div>
                            </div>
                            <div class="flex -mx-2 mb-4">
                                <template x-for="i in 3">
                                    <div class="flex-1 px-2">
                                        <button x-on:click="image = i" :class="{ 'ring-2 ring-[#434240]': image === i }"
                                            class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                            <img :src="'{{ asset('images/products/' . $product->id . '_') }}' + i + '.png'" alt=""
                                                class="h-full w-full object-cover rounded-lg">
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto md:w-2/4 pl-4 md:pl-0">
                        <h2 class="mb-2 leading-tight tracking-tight font-semibold text-gray-800 text-2xl md:text-4xl">
                            {{$product->nama}}</h2>
                        <p class="text-gray-500 text-sm">By <a href="{{route('home')}}" class="text-[#DDBD7E] hover:underline">Maulana
                                Furniture Indonesia</a></p>
                        <div class="my-4 w-fit rounded-lg bg-[#DDBD7E] flex py-2 px-3">
                            <span class="text-[#434240] mr-1 mt-1">Rp. </span>
                            <span class="font-bold text-[#434240] text-4xl">{{ number_format($product->harga, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex text-sm">
                                <p class="font-medium">Kondisi : </p>
                                <p class="pl-1 text-black-700">{{$product->kondisi}}</p>
                            </div>
                            <div class="flex text-sm">
                                <p class="font-medium">Waktu Preorder : </p>
                                <p class="pl-1 text-black-700">{{$product->waktu_preorder}}</p>
                            </div>
                            <div class="flex text-sm">
                                <p class="font-medium">Minimal Pemesanan : </p>
                                <p class="pl-1 text-black-700">{{$product->minimal_pemesanan}}</p>
                            </div>
                        </div>

                        <hr class="w-full my-6">
                        <div class="flex flex-col gap-2">
                            <p class="font-medium">Spesifikasi Produk :</p>
                            <div class="flex text-sm">
                                <p>- Material : </p>
                                <p class="pl-1">{{$product->material}}</p>
                            </div>
                            <div class="flex text-sm truncate">
                                <p>- Furnish : </p>
                                <p class="pl-1">{{$product->furnish}}</p>
                            </div>
                            <div class="flex text-sm">
                                <p>- Ukuran : </p>
                                <p class="pl-1">{{$product->ukuran}}</p>
                            </div>
                        </div>
                        <div class="md:bottom-4 md:absolute mt-8 md:w-5/12 overflow-hidden ">
                            <a
                                class="w-full gap-4 border-2 border-[#DDBD7E] font-bold py-2 flex items-center justify-center cursor-pointer group hover:bg-[#DDBD7E] rounded transition">
                                <i
                                    class="fab fa-whatsapp text-[#DDBD7E] text-2xl group-hover:text-[#434240] group-hover:transition transition"></i>
                                <p class="text-[#DDBD7E] group-hover:text-[#434240] transition">Pesan Sekarang</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
        </div>
    </body>
@endsection
