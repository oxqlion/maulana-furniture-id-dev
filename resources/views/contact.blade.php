@extends('layouts.header')

@section('content')
    <body class="pt-28 font-montserrat">
        <div class="relative -mt-10 mb-8 ">
            <img src="{{ asset('images/products/header.jpg') }}" alt="Foto Header" class="object-cover w-full h-72" />
            <div class="absolute inset-0 bg-[#434240] bg-opacity-60"></div>
            <div class="absolute inset-0 pt-16 lg:pl-24 px-24 text-center lg:text-start" data-aos="fade-right" data-aos-offset="500" data-aos-duration="800">
                <p class="text-4xl lg:text-6xl font-bold pb-4 text-[#DDBD7E]">
                    Katalog.
                </p>
                <p class="text-xs text-white lg:text-sm font-semibold lg:w-1/2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi placeat corrupti suscipit consectetur quae ullam at quaerat repellendus. Earum enim libero, nihil perferendis culpa commodi incidunt dolores dignissimos eius unde.</p>
            </div>
        </div>
        <div class="mt-8 container flex flex-row ">
            <div class="w-2/5">
                halo
            </div>
            <div class="relative h-10 w-3/4 overflow-hidden lg:mb-[-150px] mb-[-100px]" style="padding-bottom: 56.25%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629.0358320762015!2d110.78964854674567!3d-6.531675444641133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7123e39b537651%3A0x69ea129d2acc91d6!2sMaulana%20Furniture%20Indonesia%20Manufacturer!5e0!3m2!1sen!2sid!4v1699595837411!5m2!1sen!2sid"
                        width="600"
                        height="50"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="absolute top-0 left-0 w-full h-1/2">
                </iframe>
            </div>
        </div>
    </body>
@endsection
