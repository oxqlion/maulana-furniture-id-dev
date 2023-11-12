@extends('layouts.header')

@section('content')

    <body class="pt-28 font-montserrat">
        <div class="relative -mt-12 mb-8 ">
            <img src="{{ asset('images/products/header.jpg') }}" alt="Foto Header" class="object-cover w-full h-72" />
            <div class="absolute inset-0 bg-[#434240] bg-opacity-60"></div>
            <div class="absolute inset-0 pt-20 lg:pl-24 px-24 text-center lg:text-start" data-aos="fade-right"
                data-aos-offset="500" data-aos-duration="800">
                <p class="text-4xl lg:text-6xl font-bold pb-4 text-[#DDBD7E]">
                    Kontak.
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
                    <span>Kontak</span>
                </div>
            </div>
        </div>
        <div class="mt-8 container lg:flex lg:flex-row">
            <div class="md:w-4/5 mr-10" data-aos="fade-right" data-aos-duration="1000">
                <p class="lg:text-2xl text-xl font-bold text-[#434240] mb-3">Visit Maulana Furniture Indonesia</p>
                <hr class="border-t-2 w-full border-solid border-[#DDBD7E] mb-6">
                <div class="md:text-md lg:text-lg text-sm">
                    <div class="flex gap-4 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="#434240"
                            viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        <p class="pl-1 text-slate-700">Jalan Banjaran RT 05 RW 06 Bangsri Jepara, Jawa Tengah, Indonesia</p>
                    </div>
                    <div class="flex gap-2 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="#434240"
                            viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>
                        <p class="pl-1 text-slate-700">+62 878 1587 9282</p>
                    </div>

                </div>
                <div class="flex gap-4 mb-10">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="#434240"
                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    <p class="pl-1 text-slate-700">maulanafurniture@gmail.com</p>
                </div>
                <p class="lg:text-2xl text-xl font-bold text-[#434240] mb-3">Hubungi Kami</p>
                <hr class="border-t-2 w-full border-solid border-[#DDBD7E] mb-2">
                <a href="https://wa.me/6287815879282" target="_blank"
                    class="my-4 lg:mt-6 w-fit lg:w-96 gap-4 bg-[#DDBD7E] transition ease-in-out hover:bg-gray-400 text-gray-800 font-bold py-4 px-4 rounded flex items-center justify-center cursor-pointer">
                    <i class="fab fa-whatsapp text-black text-3xl"></i>
                    <span>Pesan Melalui Whatsapp</span>
                </a>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" class="my-8 relative h-6 md:w-5/6 overflow-hidden xl:mb-[-240px] mb-[-20px]" style="padding-bottom: 56.25%">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629.0358320762015!2d110.78964854674567!3d-6.531675444641133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7123e39b537651%3A0x69ea129d2acc91d6!2sMaulana%20Furniture%20Indonesia%20Manufacturer!5e0!3m2!1sen!2sid!4v1699595837411!5m2!1sen!2sid"
                    width="1000" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="absolute top-0 left-0 w-full md:h-3/5 h-4/5">
                </iframe>
            </div>
        </div>
    </body>
    <x-footer></x-footer>
@endsection
