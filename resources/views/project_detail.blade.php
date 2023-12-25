@extends('layouts.sidebar')

@section('content1')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <div class="overflow-y-scroll">
        <div class="flex flex-col p-6 mx-auto space-y-6 lg:py-16 lg:flex-row justify-around w-full lg:items-start">
            <div class="w-full w-full">
                <a href="{{ route('projects') }}">
                    <p class="text-gray-500 font-medium text-sm mb-4 cursor-pointer hover:text-gray-900">
                        < Projects</p>
                </a>
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-bold tracking-wide text-gray-800 dark:text-white lg:text-4xl">
                        {{ $project->nama_proyek }}
                    </h1>
                    <h1 class="text-lg font-semibold tracking-wide text-gray-500 dark:text-white lg:text-xl mt-2">
                        {{ $project->user->name }}
                    </h1>
                    {{-- <div class="flex gap-2 items-center my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path fill="#ddbd7e"
                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                    </svg>
                    <h1 class="text-3xl font-semibold tracking-wide text-gray-500 dark:text-white lg:text-xl">
                        {{ $project->user->name }}
                    </h1>
                </div> --}}
                    <div class="flex gap-2 items-center mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="24"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ddbd7e"
                                d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z" />
                        </svg>
                        <h1 class="lg:text-3xl my-2 font-semibold tracking-wide text-gray-500 dark:text-white lg:text-xl">
                            Deadline: {{ $project->deadline }}
                        </h1>
                    </div>
                    <div class="flex gap-2 items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#ddbd7e"
                                d="M640 0V400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8V64c0-35.3 28.7-64 64-64H640zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z" />
                        </svg>
                        <div class="flex">
                            <h1
                                class="lg:text-3xl my-2 font-semibold tracking-wide text-gray-500 dark:text-white lg:text-xl">
                                Status:
                            </h1>
                            <form action="{{ route('update_status', $project) }}" method="POST">
                                @method('put')
                                @csrf
                                <select name="status" id="status" {{ Auth::user()->isAdmin() ? '' : 'disabled' }} class="lg:text-3xl my-2 font-semibold tracking-wide text-gray-500 dark:text-white lg:text-xl">
                                    <option {{ $project->status == "Disiapkan" ? 'selected' : '' }} value="Disiapkan">Disiapkan</option>
                                    <option {{ $project->status == "Dikerjakan" ? 'selected' : '' }} value="Dikerjakan">Dikerjakan</option>
                                    <option {{ $project->status == "Ditinjau" ? 'selected' : '' }} value="Ditinjau">Ditinjau</option>
                                    <option {{ $project->status == "Dikemas" ? 'selected' : '' }} value="Dikemas">Dikemas</option>
                                    <option {{ $project->status == "Dikirim" ? 'selected' : '' }} value="Dikirim">Dikirim</option>
                                    <option {{ $project->status == "Selesai" ? 'selected' : '' }} value="Selesai">Selesai</option>
                                </select>
                                @if (Auth::user()->isAdmin())
                                    <button type="submit" class="bg-green-400 px-8 py-1 rounded-md text-white  ml-6">Save Status</button>
                                @endif
                            </form>
                        </div>
                    </div>

                </div>

                @php
                    $user = Auth::user();
                @endphp
                @if ($user->id == $project->user_id || $user->role_id == 1)
                    <div
                        class="w-full mt-4 bg-transparent border rounded-md w-full dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-400 focus-within:ring-opacity-40">
                        <div class="flex flex-col lg:flex-row bg-green-100 rounded-md">
                            <input type="text" disabled
                                placeholder="Payment: Rp {{ number_format($paid) }} / Rp {{ number_format($project->harga) }}"
                                class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-800 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" />
                            @if ($user->role_id == 2)
                            <button type="button" id="defaultModalButton" data-modal-target="defaultModal"
                                data-modal-toggle="defaultModal" type="button"
                                class="h-10 px-4 py-2 m-1 text-white transition duration-300 transform bg-green-400 rounded-md hover:bg-green-300 focus:outline-none focus:bg-blue-400">
                                Add Payment
                            </button>
                            @endif
                            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <!-- Modal header -->
                                        <div
                                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Add Payment
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <form action="{{ route('simpan_pembayaran') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="flex flex-col gap-4 gap-4 mb-4 sm:grid-cols-2">
                                                <div class="w-full">
                                                    <label for="jumlah"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                                    <input type="number" name="jumlah" id="jumlah"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="$2999" required="">
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <label for="deskripsi"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                    <textarea id="deskripsi" rows="4" name="deskripsi"
                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Write product deskripsi here"></textarea>
                                                </div>
                                                <div class="sm:col-span-1">
                                                    <label for="gambar"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti
                                                        Pembayaran</label>
                                                    <input type="file" name="gambar" id="gambar" accept="gambar/*"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        multiple required="">
                                                </div>
                                                <input type="hidden" id="selectedRating" name="project_id"
                                                    value="{{ $project->id }}">
                                            </div>
                                            <button type="submit"
                                                class="text-white inline-flex items-center bg-red-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Add new payment
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border mt-4 border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endif
            </div>

            {{-- <div class="flex items-center justify-center w-full h-96">
                <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl"
                    src="{{ asset('storage/' . $project->image_path) }}" alt="glasses photo">
            </div> --}}
        </div>
        <hr class="border-t border-gray-800 mx-6">
        <div class="px-6 mt-4 flex w-full items-start justify-start">
            <h1 class="w-full font-bold text-2xl">Progress</h1>
        </div>
        <div x-data="{ isOpen: false }" class="relative flex max-w-fit justify-end mx-6">
            @if (Auth::user()->isAdmin())
                <div class="flex w-full items-center justify-end">
                    <button @click="isOpen = true"
                        class="my-4 px-6 py-2 tracking-wide w-full text-white capitalize transition duration-300 transform bg-[#DDBD7E] rounded-md hover:opacity-50 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        + Add Progress
                    </button>
                </div>
            @endif

            <div x-show="isOpen" x-transition:enter="transition duration-300 ease-out z-50"
                x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                x-transition:leave="transition duration-150 ease-in"
                x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                aria-modal="true">
                <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                    <span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>

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

                            <button type="button"
                                class="mt-2 flex items-center rounded py-1.5 px-2 text-sm text-blue-600 transition-colors duration-300 hover:text-blue-400 focus:outline-none dark:text-blue-400 dark:hover:text-blue-500">
                            </button>


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
        <div
            class="flex lg:overflow-x-scroll lg:flex-nowrap flex-wrap gap-12 items-start justify-center lg:justify-start p-6">
            @foreach ($progress as $pr)
                <div
                    class="max-w-xs lg:min-w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex w-full">
                        <img class="rounded-t-lg flex w-full object-cover h-36"
                            src="{{ asset('storage/' . $pr->gambar) }}" alt="" />
                    </div>
                    <div class="p-5">
                        {{-- <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a> --}}
                        <p class="font-normal text-sm max-w-fit text-gray-700 dark:text-gray-400 mb-2">
                            {{ date('F j, Y', strtotime($pr->created_at)) }}</p>
                        <p class="font-medium text-gray-700 dark:text-gray-400">Update:</p>
                        <p class="mb-3 font-medium text-gray-700 dark:text-gray-400">{{ $pr->deskripsi }}</p>
                        {{-- <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#DDBD7E] rounded-lg hover:opacity-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a> --}}
                    </div>
                    @if (!empty($comments))
                        <p class="px-6 ">Comments</p>
                        @foreach ($comments as $cm)
                            @if ($cm->progress_id == $pr->id)
                                <div class="flex-col px-6">
                                    <div class="flex items-center">
                                        <p class="font-medium mr-2">{{ $cm->user->name }}</p>
                                        <p class="font-normal text-gray-500 text-sm">
                                            {{ date('F j, Y', strtotime($cm->created_at)) }}</p>
                                    </div>
                                    <p class="font-normal">{{ $cm->komen }}</p>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <form action="{{ route('add_comment') }}" method="POST" class="flex flex-col p-6">
                        @csrf
                        <input type="text" name="komen" id="komen" placeholder="Beri komentar">
                        <input type="hidden" name="user" id="user" value="{{ Auth::id() }}">
                        <input type="hidden" name="progress" id="progress" value="{{ $pr->id }}">
                        <div class="inline-flex w-full mt-6 sm:w-auto">
                            <button href="#" type="submit"
                                class="flex font-semibold items-center justify-between w-full px-4 py-2 text-sm text-white bg-[#DDBD7E] duration-300 rounded-lg hover:opacity-50 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                                Kirim Komentar
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
