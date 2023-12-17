@extends('layouts.sidebar')

@section('content1')
    <div class="overflow-y-scroll">
        <section class="bg-white dark:bg-gray-900">
            <div class="w-full px-6 pb-10 mt-8">
                <a href="{{ route('projects') }}">
                    <p class="text-gray-500 font-medium text-sm mb-4 cursor-pointer hover:text-gray-900">
                        < Projects</p>
                </a>
                <p class="text-3xl font-bold text-[#434240] ">{{ $project->nama_proyek }}</p>

                <p class="text-md font-medium text-gray-500 opacity-50 mt-2">{{ $project->user->name }}</p>
                <h1 class="mt-2 text-md font-medium text-gray-500 capitalize lg:text-lg dark:text-white">
                    {{ $project->deskripsi }}
                </h1>
                <div x-data="{ isOpen: false }" class="relative flex justify-center">
                    <div class="flex w-full items-center justify-start">
                        <button @click="isOpen = true"
                            class="my-4 px-6 py-2 tracking-wide text-white capitalize transition duration-300 transform bg-[#DDBD7E] rounded-md hover:opacity-50 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            + Add Progress
                        </button>
                    </div>

                    <div x-show="isOpen" x-transition:enter="transition duration-300 ease-out z-50"
                        x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                        x-transition:leave="transition duration-150 ease-in"
                        x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                        x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                        class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                        aria-modal="true">
                        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                            <span class="hidden sm:inline-block sm:h-screen sm:align-middle"
                                aria-hidden="true">&#8203;</span>

                            <div
                                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle">
                                <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white"
                                    id="modal-title">
                                    Catat Kemajuan Proyek
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Berikan informasi terkini kepada klien dengan menambahkan kemajuan terbaru proyek.
                                </p>

                                <form class="mt-4" action="{{ route('add_progress') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{-- <label for="emails-list" class="text-sm text-gray-700 dark:text-gray-200">
                                        Email address
                                    </label>

                                    <label class="block mt-3" for="email">
                                        <input type="email" name="email" id="email" placeholder="user@email.xyz"
                                            value="devdhaif@gmail.com"
                                            class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />
                                    </label> --}}

                                    <label for="deskripsi" class="text-sm text-gray-700 dark:text-gray-200">
                                        Deksripsi
                                    </label>
                                    <textarea name="deskripsi" id="deskripsi" rows="4" cols="50" placeholder="Deskripsi progres"
                                        class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"></textarea>

                                    <label for="gambar" class="text-sm text-gray-700 dark:text-gray-200">
                                        Upload Gambar
                                    </label>
                                    <input type="file" name="gambar" id="gambar"
                                        class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                                    <input type="hidden" name="project" id="project" value="{{ $project->id }}">
                                    {{-- <button type="button"
                                    class="mt-2 flex items-center rounded py-1.5 px-2 text-sm text-blue-600 transition-colors duration-300 hover:text-blue-400 focus:outline-none dark:text-blue-400 dark:hover:text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>

                                    <span class="mx-2">Add another</span>
                                </button> --}}


                                    <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
                                        <button type="button" @click="isOpen = false"
                                            class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-600 capitalize transition duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:opacity-50 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                            Cancel
                                        </button>

                                        <button type="submit"
                                            class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition duration-300 transform bg-[#DDBD7E] rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:opacity-50 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                            Tambah Progress
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="border-t border-gray-300 my-6">
                <section class="bg-white dark:bg-gray-800 lg:py-12 lg:flex flex-col lg:justify-center">
                    @foreach ($progress as $pr)
                        <div
                            class="mb-12 overflow-hidden bg-gray-400 dark:bg-gray-900 lg:flex lg:max-w-6xl lg:w-full shadow-md rounded-xl">
                            <div class="lg:w-1/4">
                                <div class="h-64 bg-cover lg:h-full"
                                    style="background-image:url('{{ asset('storage/' . $pr->gambar) }}')">
                                </div>
                            </div>

                            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                                {{-- <h2 class="text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">
                                    Build Your New <span class="text-blue-500">Idea</span>
                                </h2> --}}

                                <p class="text-gray-500 dark:text-gray-300">
                                    {{ $pr->deskripsi }}
                                </p>

                                @foreach ($comments as $cm)
                                    @if ($cm->progress_id == $pr->id)
                                        <p>{{ $cm->komen }}</p>
                                    @endif
                                @endforeach

                                <form action="{{ route('add_comment') }}" method="POST" class="">
                                    @csrf
                                    <input type="text" name="komen" id="komen" placeholder="Beri komentar">
                                    <input type="hidden" name="user" id="user" value="{{ Auth::id() }}">
                                    <input type="hidden" name="progress" id="progress" value="{{ $pr->id }}">
                                    <div class="inline-flex w-full mt-6 sm:w-auto">
                                        <button href="#" type="submit"
                                            class="inline-flex items-center justify-center w-full px-6 py-2 text-sm text-white duration-300 bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                                            Start Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </section>
    </div>
@endsection
