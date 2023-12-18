@extends('layouts.sidebar')

@section('content1')
    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        <!-- Main content header -->
        <div
            class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap">Project Dashboard</h1>
            <div class="flex items-center gap-2">
                <!-- search icon -->
                <span>
                  <svg
                    class="w-5 h-5 text-gray-500"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                  </svg>
                </span>
                <form action="{{ route('projects') }}" method="GET">
                  <input
                    type="text"
                    name="search"
                    placeholder="Search"
                    class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border"
                  />
                  <input type="submit" style="display:none;" />
                </form>
              </div>
        </div>

        <!-- Start Content -->
        {{-- <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Users</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>from 2019</span>
                </div>
            </div>
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Users</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>from 2019</span>
                </div>
            </div>
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Users</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>from 2019</span>
                </div>
            </div>
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Users</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>from 2019</span>
                </div>
            </div>
        </div> --}}

        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
        <div class="flex mt-6 gap-4">
            <h3 class=" text-xl">Projects</h3>
            <a href="{{ route('tambah_project') }}">
                <button type="button"
                    class="flex items-center justify-center text-white bg-red-800 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    New project
                </button>
            </a>
        </div>
        <div class="flex flex-col mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                        <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nama Proyek
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Deadline
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Deskripsi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Harga
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Klien
                                    </th>
                                    {{-- <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Material
                                        </th> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($projects as $pc)
                                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-10 h-10 rounded-md"
                                                        src="{{ asset('storage/' . $pc->image_path) }}" alt="" />
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $pc->nama_proyek }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $pc->deadline }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $pc->deskripsi }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $pc->harga }}</td>
                                        <td
                                            class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis max-w-[150px]">
                                            @if (!$pc->user)
                                                <form action="{{ route('assign_client', $pc) }}" method="POST">
                                                    @method('put')
                                                    @csrf
                                                    <select name="user" id="user">
                                                        @foreach ($clients as $cl)
                                                            <option value="{{ $cl->id }}">{{ $cl->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit">Save</button>
                                                </form>
                                            @else
                                                {{ $pc->user->name }}
                                            @endif
                                        </td>
                                        {{-- <td
                                                class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap overflow-hidden overflow-ellipsis max-w-[150px]">
                                                {{ $pc->product->material }}</td> --}}
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex gap-2">
                                                <a href="{{ route('detail_project', $pc->id) }}">
                                                    <button type="button"
                                                        class="flex items-center text-yellow-600 hover:text-white border border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-600 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-yellow-600 dark:text-yellow-600 dark:hover:text-white dark:hover:bg-yellow-600 dark:focus:ring-yellow-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                                            viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Detail
                                                    </button>
                                                </a>
                                                @if (Auth::user()->isAdmin())
                                                    <form action="{{ route('delete_produk', $pc->id) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit"
                                                            class="flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Done
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
