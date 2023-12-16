@extends('layouts.sidebar')

@section('content1')
    <div class="overflow-y-scroll">
        <section class="bg-white dark:bg-gray-900">
            <div class="max-w-6xl px-6 pb-10 mt-8">
                {{-- <p class="text-xl font-medium text-blue-500 ">Testimonials</p>

                <h1 class="mt-2 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                    What clients saying --}}
                </h1>

                <main class="relative md:z-20 w-full md:flex md:items-center xl:mt-8">
                    <div class="absolute w-full bg-gray-600 -z-10 md:h-72 rounded-2xl"></div>

                    <div
                        class="w-full p-6 bg-gray-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-start">
                        <img class="h-24 w-24 md:mx-6 rounded-full object-cover shadow-md md:h-[24rem] md:w-72 lg:h-[24rem] lg:w-[20rem] md:rounded-2xl"
                            src="{{ asset('storage/' . $project->image_path) }}" alt="client photo" />

                        <div class="mt-2 md:mx-6">
                            <div>
                                <p class="text-xl font-medium tracking-tight text-white">{{ $project->user->name }}</p>
                                <p class="text-blue-200 ">Due {{ $project->deadline }}</p>
                            </div>

                            <p class="mt-4 text-lg leading-relaxed text-white md:text-xl">{{ $project->deskripsi }}</p>

                            {{-- <div class="flex items-center justify-between mt-6 md:justify-start">
                                <button title="left arrow"
                                    class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>

                                <button title="right arrow"
                                    class="p-2 text-white transition-colors duration-300 border rounded-full rtl:-scale-x-100 md:mx-6 hover:bg-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </div>
@endsection
