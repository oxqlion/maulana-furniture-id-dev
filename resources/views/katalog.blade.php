@extends('layouts.header')

@section('content')
<body class="justify-content-center pt-32">
    <div class="flex flex-col h-fit container">
        <div class="flex flex-1 gap-8">
            <div class="hidden md:block w-1/5 w-1/5 p-4 font-montserrat">
                <div class="text-start font-bold">KATEGORI PRODUK</div>
                <div class="border-b-4 border-[#DDBD7E] mt-2 w-10"></div>
                <div class="text-start mt-6 gab-2">
                    <div class="mt-1">Kursi</div>
                    <div class="border-b border-gray-400 mt-1 w-44"></div>
                    <div class="mt-1">Lampu tidur</div>
                    <div class="border-b border-gray-400 mt-1 w-44"></div>
                    <div class="mt-1">Set kamar tidur</div>
                    <div class="border-b border-gray-400 mt-1 w-44"></div>
                    <div class="mt-1">Meja kayu</div>
                    <div class="border-b border-gray-400 mt-1 w-44"></div>
                    <div class="mt-1">Gazebo taman</div>
                    <div class="border-b border-gray-400 mt-1 w-44"></div>
                    <div class="mt-1">Kamar tidur</div>
                    <div class="border-b border-gray-400 mt-1 w-44"></div>
                </div>
            </div>
            <div class="p-4 w-full">
                <div class="flex justify-between mb-12">
                    <p class="text-2xl font-bold font-montserrat text-[#434240]">Sofa Tempat Tidur</p>
                    <p class="text-sm font-light font-montserrat text-slate-700">Showing 25 result</p>
                </div>
                <div class="flex flex-wrap gap-8 justify-center sm:justify-between md:justify-start">
                    <x-card_katalog></x-card_katalog>
                    <x-card_katalog></x-card_katalog>
                    <x-card_katalog></x-card_katalog>
                    <x-card_katalog></x-card_katalog>
                    <x-card_katalog></x-card_katalog>
                    <x-card_katalog></x-card_katalog>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
