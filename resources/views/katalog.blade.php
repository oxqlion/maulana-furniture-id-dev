@extends('layouts.header')

@section('content')

    <body class="pt-28 font-montserrat">
        <div class="relative -mt-10 mb-8 ">
            <img src="{{ asset('images/products/header.jpg') }}" alt="Foto Header" class="object-cover w-full h-80" />
            <div class="absolute inset-0 bg-[#434240] bg-opacity-60"></div>
            <div class="absolute inset-0 pt-24 lg:pl-24 px-24 text-center lg:text-start" data-aos="fade-right"
                data-aos-offset="500" data-aos-duration="800">
                <p class="text-4xl lg:text-6xl font-bold pb-4 text-[#DDBD7E]">
                    Katalog.
                </p>
                <p class="text-xs text-white lg:text-sm font-semibold lg:w-1/2">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Excepturi placeat corrupti suscipit consectetur quae ullam at quaerat repellendus.
                    Earum enim libero, nihil perferendis culpa commodi incidunt dolores dignissimos eius unde.</p>
            </div>
        </div>
        <div class="flex flex-col h-fit container">
            <div class="px-4 mb-3">
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
                </div>
            </div>
            <div class="flex flex-1 gap-8">
                <div
                    class="hidden md:block w-1/5 w-1/5 p-4 font-montserrat sticky top-24 bottom-24 rounded-lg p-4 py-6 mt-4 mb-6 h-fit bg-white shadow-xl border">
                    <div class="text-start font-bold">KATEGORI PRODUK</div>
                    <div class="border-b-4 border-[#DDBD7E] mt-2 w-10"></div>
                    <div class="text-start mt-6 gab-2">
                        @foreach ($categories as $category)
                            <div class="py-1">
                                <a href="{{ route('kategori_produk', $category->id) }}" class="mt-1"
                                    class="hover:text-[#434240]">{{ $category->nama }}</a>
                                <div class="border-b border-gray-400 mt-1"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-4 w-full">
                    <div class="flex justify-between mb-12">
                        <p class="text-2xl font-bold font-montserrat text-[#434240]">
                            @if(isset($current_category))
                                {{ $current_category->nama }}
                            @else
                                Semua Produk
                            @endif
                        </p>
                        <p class="text-sm font-light font-montserrat text-slate-700">Showing {{ count($product_category) }}
                            products</p>
                    </div>
                    <div class="flex flex-wrap gap-6 justify-center sm:justify-between md:justify-start">
                        @foreach ($product_category as $pc)
                            <div class="flex flex-wrap" data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="max-w-full md:max-w-sm w-80 xl:w-56 lg:w-52 md:w-52 sm:w-64 sm:justify-center relative">
                                    <a href="{{ route('produk_detail', $pc->product) }}">
                                        <div
                                        class="group relative overflow-hidden transform transition-transform duration-300 shadow-xl hover:-translate-y-2 rounded-lg cursor-pointer">
                                            <div class="relative overflow-hidden group">
                                                <!-- Foto Produk -->
                                                <img src="{{ asset('images/products/' . $pc->product->id . '_1.png') }}"
                                                    alt="Kursi Hiroshima x Anyaman Viro"
                                                    class="w-full h-64 group-hover:brightness-50 transition-transform duration-900 object-fit" />
                                                <div
                                                    class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-900">
                                                    <p class="text-white text-lg font-bold">See Details</p>
                                                </div>
                                            </div>
                                            <div class="py-4 bg-white shadow-md px-3">
                                                <!-- Nama Produk -->
                                                <h2 class="text-xl font-semibold text-gray-800 truncate">
                                                    {{ $pc->product->nama }}</h2>
                                                <h2 class="text-md text-gray-500">{{ $pc->product->kategori }}</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
