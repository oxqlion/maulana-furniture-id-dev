@extends('layouts.sidebar')

@section('content1')
    <section class="bg-white dark:bg-gray-900 overflow-y-scroll">
        <div class="py-8 px-4 mx-auto max-w-6xl lg:py-8">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new projects</h2>
            <form method="POST" action="{{ route('store_project') }}" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama_proyek"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name</label>
                        <input type="text" name="nama_proyek" id="nama_proyek"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product project name" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="deadline"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
                        <input type="date" name="deadline" id="deadline"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product deadline" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$2999" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$2999" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="client"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client</label>
                        <select id="client"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                            <option value="">Belum ada</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2 mb-4">
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project
                            Images</label>
                        <input type="file" name="gambar" multiple id="gambar" accept="gambar/*"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            >
                    </div>
                </div>
                <button type="submit"
                    class="px-4 py-2 text-white rounded-md bg-[#434240] hover:bg-[#DDBD7E] transition focus:outline-none focus:ring focus:border-blue-300">
                    Add Project
                </button>
            </form>
        </div>
    </section>
    {{-- <div class="px-4 h-full overflow-y-scroll ">
        <a href="{{ route('projects') }}">
            <p class="text-gray-500 font-medium text-sm mx-8 mt-8 cursor-pointer hover:text-gray-900">
                < Projects</p>
        </a>
        <form method="POST" action="{{ route('store_project') }}" class=" bg-white p-8" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-6">
                <label for="nama_proyek" class="block text-sm font-medium text-gray-600">Project Name</label>
                <input type="text" name="nama_proyek" id="nama_proyek" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-6">
                <label for="deadline" class="block text-sm font-medium text-gray-600">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
            </div>

            <div class="mb-6">
                <label for="harga" class="block text-sm font-medium text-gray-600">Price</label>
                <input type="number" name="harga" id="harga" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-6">
                <label for="client" class="block text-sm font-medium text-gray-600">Client</label>
                <select name="client" id="client" class="mt-1 p-2 w-full border rounded-md">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    <option value="">Belum ada</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                    Images</label>
                <input type="file" name="gambar" multiple id="gambar" accept="gambar/*"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    >
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="px-4 py-2 text-white rounded-md bg-[#434240] hover:bg-[#DDBD7E] transition focus:outline-none focus:ring focus:border-blue-300">
                    Add Project
                </button>
            </div>
        </form>
    </div> --}}
@endsection
