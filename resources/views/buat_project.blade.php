@extends('layouts.sidebar')

@section('content1')
    <div class="w-full h-full overflow-y-scroll">
        <form method="POST" action="{{ route('store_project') }}" class="bg-white p-8" enctype="multipart/form-data">
            @csrf

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
                </select>
            </div>

            <div class="mb-6">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                    Images</label>
                <input type="file" name="gambar" multiple id="gambar" accept="gambar/*"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Add Project
                </button>
            </div>
        </form>
    </div>
@endsection
