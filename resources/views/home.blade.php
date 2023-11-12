@extends('layouts.header')

@section('content')
    <div class="overflow-hidden font-montserrat">
        <!-- Hero Section -->
        <div class="relative flex flex-col items-start justify-start h-screen">
            <div class="flex-2 w-full justify-center lg:justify-between bg-[#434240] p-4 pt-24 lg:p-20">
                <div
                    class="bg-cover h-full flex flex-col font-montserrat justify-center items-center lg:items-start lg:justify-start">
                    <h1
                        class="text-3xl w-full lg:text-5xl max-w-sm lg:max-w-xl text-white font-bold lg:text-left text-center">
                        Wujudkan Furniture Impian Anda Bersama Kami</h1>
                    <p
                        class="font-montserrat font-normal text-md lg:text-xl font-thin text-white pt-4 lg:pt-6 max-w-lg text-center lg:text-start">
                        Jelajahi koleksi furniture kami
                        yang
                        menghadirkan keindahan dan kenyamanan tak tertandingi. Kami di
                        Maulana
                        Furniture Indonesia menyajikan perpaduan desain dan fungsi dari klasik hingga kontemporer. Temukan
                        sofa,
                        meja, kursi, dan banyak lagi yang kami pilih dengan cermat untuk meningkatkan kualitas hidup Anda.
                    </p>
                    <a
                        class="mt-4 lg:mt-12 lg:w-64 gap-4 bg-[#DDBD7E] transition ease-in-out hover:bg-gray-400 text-gray-800 font-bold py-4 px-4 rounded flex items-center justify-center cursor-pointer">
                        <i class="fab fa-whatsapp text-black text-3xl"></i>
                        <span>Pesan Sekarang</span>
                    </a>
                </div>
            </div>
            <div class="flex-1">
                <img class="block lg:absolute top-96 right-[-15%] h-4/6" src="{{ asset('images/hero-sofa.png') }}"
                    alt="hero">
            </div>
        </div>

        <!-- Our Clients Section -->
        <div class="py-12">
            <h2 class="text-3xl md:text-5xl text-center font-bold mb-12">Our Clients</h2>
            <div class="overflow-hidden whitespace-nowrap slider-container relative">
                <div class="gap-12 slider">
                    <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/mocal.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/neka.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/dad.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/mocal.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/neka.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/dad.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/mocal.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/neka.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/dad.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/mocal.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/neka.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/dad.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/mocal.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/neka.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/dad.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/mocal.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/neka.png') }}" alt="Client 1 Logo" class="w-[10%]">
                    <img src="{{ asset('images/dad.png') }}" alt="Client 1 Logo" class="w-[10%]">
                </div>
            </div>
        </div>


        <!-- Company Overview Section -->
        <div class="p-12 flex flex-col items-center">
            <h2 class="md:text-5xl text-3xl font-bold mb-4 md:mb-12 text-center">Tentang Kami</h2>
            <div class="flex md:flex-row flex-col">
                <p class="text-gray-700 font-medium text-md md:text-xl max-w-md text-center md:text-right md:mr-8">
                    Maulana Furniture Indonesia adalah
                    produsen furniture jepara yang bergerak
                    dalam produksi furniture dengan varian style
                    furniture minimalis, furniture ukiran,
                    furniture klasik, furniture mewah, furniture
                    italian style, furniture turki style. Kami
                    memproduksi semua kebutuhan furniture
                    baik indoor (dalam ruangan) seperti set kursi
                    meja ruang tamu, set kursi meja ruang
                    makan, set tempat tidur, nakas, meja rias,
                    almari pakaian ruang kamar & outdoor (luar
                    ruangan) seperti set meja rias, set kursi meja
                    taman payung kayu jati, gazebo kayu jati
                    atau gazebo kayu kelapa (glugu), rumah
                    kayu minimalis, rumah kayu adat (rumah
                    joglo kayu jati, rumah adat limasan kayu jati,
                    rumah panggung kayu jati), pendopo kayu
                    jati.
                </p>
                <div class="flex flex-col md:flex-row gap-8 h-full">
                    <div class="flex flex-col gap-8">
                        <img src="{{ asset('images/a_1.jpg') }}" class="w-56 h-56 object-cover rounded-xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-[#DDBD7E] duration-300" alt="">
                        <img src="{{ asset('images/a_2.jpg') }}" class="w-56 h-56 object-cover rounded-xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-[#DDBD7E] duration-300" alt="">
                    </div>
                    <img src="{{ asset('images/a_4.jpg') }}" class="rounded-xl w-56 object-cover cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-[#DDBD7E] duration-300" alt="">
                </div>
            </div>

        </div>

        <!-- Why Choose Us Section -->

        <div class="flex flex-col gap-4 items-center justify-center lg:m-12 text-center">

            <h1 class="font-bold text-3xl md:text-5xl">Kelebihan Kami</h1>

            <div id="services"
                class="max-w-[1490px] mx-auto px-10 flex flex-col lg:flex-row gap-12 md:gap-6 xs:justify-between w-full">
                <div
                    class="cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-[#DDBD7E] duration-300 p-12 rounded-lg shadow-xl flex flex-col lg:flex-row gap-4 w-full items-center">
                    <img src="{{ asset('images/star-solid.svg') }}" class="max-h-[84px] max-w-[84px]" alt="" />
                    <div class="flex flex-col gap-1.5">
                        <h3 class="text-center lg:text-start text-2xl lg:text-[28px] font-bold">
                            Kualitas Tinggi
                        </h3>
                        <h6 class="text-center lg:text-start text-base lg:text-lg text-fontGray font-medium">
                            Desain elegan dan bahan bermutu tinggi
                        </h6>
                    </div>
                </div>
                <div
                    class="cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-[#DDBD7E] duration-300 p-12 rounded-lg shadow-xl flex flex-col lg:flex-row gap-4 w-full items-center">
                    <img src="{{ asset('images/couch-solid.svg') }}" class="max-h-[84px] max-w-[84px]" alt="" />
                    <div class="flex flex-col gap-1.5">
                        <h3 class="text-center lg:text-start text-2xl lg:text-[28px] font-bold">
                            Desain Unik
                        </h3>
                        <h6 class="text-center lg:text-start text-base lg:text-lg text-fontGray font-medium">
                            Pilih desain atau desain produk Anda sendiri
                        </h6>
                    </div>
                </div>
                <div
                    class="cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-[#DDBD7E] duration-300 p-12 rounded-lg shadow-xl flex flex-col lg:flex-row gap-4 w-full items-center">
                    <img src="{{ asset('images/phone-solid.svg') }}" class="max-h-[84px] max-w-[84px]" alt="" />
                    <div class="flex flex-col gap-1.5">
                        <h3 class="text-center lg:text-start text-2xl lg:text-[28px] font-bold">
                            Pelayanan Terbaik
                        </h3>
                        <h6 class="text-center lg:text-start text-base lg:text-lg text-fontGray font-medium">
                            Kepuasan pelanggan adalah prioritas kami
                        </h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="p-12 flex flex-col">
            
        </div>
    </div>
    <x-footer></x-footer>
@endsection
