@extends('layouts.sidebar')

@section('content1')
    <section class="bg-white dark:bg-gray-900 overflow-y-scroll">
        <div class="py-8 px-4 mx-auto max-w-6xl lg:py-12">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Product</h2>
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('update_produk', $produkEdit) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                    <div class="sm:col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Produk</label>
                        <input value="{{ $produkEdit->nama }}" type="text" name="nama" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Nama produk anda">
                    </div>
                    <div>
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="kategori" name="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="{{ $produkEdit->id }}">{{ $produkEdit->kategori }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="kondisi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi</label>
                        <input value="{{ $produkEdit->kondisi }}" type="text" name="kondisi" id="kondisi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product Kondisi">
                    </div>
                    <div class="w-full">
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input value="{{ $produkEdit->harga }}" type="number" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$2999">
                    </div>
                    <div>
                        <label for="waktu-preorder"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Preorder</label>
                        <input value="{{ $produkEdit->waktu_preorder }}" type="number" name="waktu_preorder"
                            id="waktu-preorder"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="12">
                    </div>
                    <div>
                        <label for="minimal-pemesanan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimal Pemesanan</label>
                        <input value="{{ $produkEdit->minimal_pemesanan }}" type="number" name="minimal_pemesanan"
                            id="minimal-pemesanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="12">
                    </div>
                    <div class="w-full">
                        <label for="material"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material</label>
                        <input value="{{ $produkEdit->material }}" type="text" name="material" id="material"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product brand">
                    </div>
                    <div class="w-full">
                        <label for="furnish"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Furnish</label>
                        <input value="{{ $produkEdit->furnish }}" type="text" name="furnish" id="furnish"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product brand">
                    </div>
                    <div class="w-full">
                        <label for="ukuran"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                        <input value="{{ $produkEdit->ukuran }}" type="text" name="ukuran" id="ukuran"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product brand">
                    </div>
                    <div class="sm:col-span-1">
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Images</label>
                        <div class="flex">
                            @foreach ($produkEdit->images as $image)
                                <img src="{{ asset('storage/' . $image->gambar) }}"
                                    alt="Previous Image" class="w-16 h-16 object-cover mr-2 mb-2">
                            @endforeach
                        </div>
                        <input type="file" name="gambar[]" multiple id="gambar" accept="gambar/*"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            multiple>
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-slate-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Add product
                </button>
            </form>
        </div>
    </section>
@endsection
