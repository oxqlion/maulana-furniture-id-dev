@extends('layouts.header')

@section('content')

    <body class="pt-28 font-montserrat">
        <div class="relative -mt-12 mb-8 ">
            <img src="{{ asset('images/products/header.jpg') }}" alt="Foto Header" class="object-cover w-full h-72" />
            <div class="absolute inset-0 bg-[#434240] bg-opacity-60"></div>
            <div class="absolute inset-0 pt-20 lg:pl-24 px-24 text-center lg:text-start" data-aos="fade-right"
                data-aos-offset="500" data-aos-duration="800">
                <p class="text-4xl lg:text-6xl font-bold pb-4 text-[#DDBD7E]">
                    Cara Pembayaran.
                </p>
                <p class="text-xs text-white lg:text-sm font-semibold lg:w-1/2">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Excepturi placeat corrupti suscipit consectetur quae ullam at quaerat repellendus.
                    Earum enim libero, nihil perferendis culpa commodi incidunt dolores dignissimos eius unde.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="mb-3">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="{{ route('home') }}" class="hover:underline hover:text-gray-600">Home</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Cara Pembayaran</span>
                </div>
            </div>
        </div>
        <div class="container pt-6 flex flex-col gap-4 pb-12">
            <p data-aos="fade-right" data-aos-duration="1200" class="font-semibold text-md">Metode Keamanan Pembayaran /
                Safety Payment Method Pada Maulana Furniture Indonesia :</p>

            <div data-aos="fade-right" data-aos-duration="1800">
                <p class="underline mb-4">Tranfer Pembayaran antar Rekening Bank :</p>
                <ul class="list-disc flex flex-col gap-4 ml-8">
                    <li>Pembayaran dilakukan dengan cara transfer ke rekening Maulana Furniture Indonesia yang sudah kami
                        sediakan pada kolom di bawah.</li>
                    <li>Proses transfer dapat dilakukan melalui ATM, Internet Banking, Mobile Banking / SMS Banking.</li>
                    <li>Proses selanjutnya konfirmasikan transfer pembayaran saudara melalui email / SMS / telp kepada kami
                        supaya permintaan anda bisa dengan segera kami proses.</li>
                </ul>
                <p class="underline my-4">Transfer pembayaran melalui setor tunai antar Bank :</p>
                <ul class="list-disc flex flex-col gap-4 ml-8">
                    <li>Pembayaran dilakukan dengan cara malakukan setor tunai secara langsung ke rekening Maulana Furniture
                        Indonesia yang sudah kami sediakan pada kolom di bawah.</li>
                    <li>Proses selanjutnya konfirmasikan transfer pembayaran saudara melalui email / SMS / telp kepada kami
                        supaya permintaan anda bisa dengan segera kami proses.</li>
                </ul>
                <p class="font-semibold text-md mt-4">Valid Account Bank Maulana Furniture Indonesia :</p>
                <div class="ml-8 flex flex-col gap-4 my-4">
                    <p class="font-semibold text-md">Bank BCA Cabang Jepara</p>
                    <hr class="w-1/2 border-[#DDBD7E]">
                    <img class="w-52"
                        src="https://www.logolynx.com/images/logolynx/da/dac2a09bffbf15220a99290ed9e3be90.png"
                        alt="">
                    <hr class="w-1/2 border-[#DDBD7E]">
                    <p class="font-semibold text-md">Nomor rekekning : 0310781479</p>
                    <hr class="w-1/2 border-[#DDBD7E]">
                    <p class="font-semibold text-md">A/N MUHAMMAD RIO FEBRIAN MAULANA</p>
                    <hr class="w-1/2 border-[#DDBD7E]">
                </div>
                <p class="font-semibold text-md mb-4">Service Center konfirmasi transfer pembayaran dapat dilakukan melalui media
                    berikut : </p>
                <ul class="list-disc flex flex-col gap-4 ml-8">
                    <li>Whatsapp / Telepon : +62 87815879282</li>
                    <li>Email : maulanafurniture@gmail.com</li>
                </ul>
            </div>
        </div>
    </body>
    <x-footer></x-footer>
@endsection
