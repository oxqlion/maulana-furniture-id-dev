@extends('layouts.sidebar')

@section('content1')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <div class="overflow-y-scroll">
        <section class="bg-white dark:bg-gray-900">
            <div class="w-full px-6 pb-10 mt-8">
                <div class="flex justify-between">
                    <div>
                        <a href="{{ route('projects') }}">
                            <p class="text-gray-500 font-medium text-sm mb-4 cursor-pointer hover:text-gray-900">
                                < Projects</p>
                        </a>
                        <p class="text-3xl font-bold text-[#434240] ">{{ $project->nama_proyek }}</p>
    
                        <p class="text-md font-medium text-gray-500 opacity-50 mt-2">{{ $project->user->name }}</p>
                        <p class="text-md font-medium text-gray-500 opacity-50 mt-2">{{ $paid }}/{{ $project->harga }}</p>
                        <h1 class="mt-2 text-md font-medium text-gray-500 capitalize lg:text-lg dark:text-white">
                            {{ $project->deskripsi }}
                        </h1>
                    </div>
                    <div>
                        <!-- Modal toggle -->
                        <div class="flex justify-center m-5">
                            <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                class="block text-white bg-red-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                type="button">
                                Payment
                            </button>
                        </div>
    
                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div
                                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add Product
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="{{ route('simpan_pembayaran') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="flex flex-col gap-4 gap-4 mb-4 sm:grid-cols-2">
                                            <div class="w-full">
                                                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                                <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="deskripsi"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                <textarea id="deskripsi" rows="4" name="deskripsi"
                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="Write product deskripsi here"></textarea>
                                            </div>
                                            <div class="sm:col-span-1">
                                                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti Pembayaran</label>
                                                <input type="file" name="gambar"  id="gambar" accept="gambar/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" multiple required="">
                                            </div>
                                            <input type="hidden" id="selectedRating" name="project_id" value="{{ $project->id }}">
                                        </div>
                                        <button type="submit"
                                            class="text-white inline-flex items-center bg-red-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Add new product
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <div
                            class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
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

                                    <input type="hidden" name="project_id" id="project" value="{{ $project->id }}">
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
