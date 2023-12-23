@extends('layouts.sidebar')

@section('content1')
    <!-- Main content -->
    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        <!-- Main content header -->
        <div
            class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
            <h1 class="text-2xl font-semibold whitespace-nowrap">Payment Dashboard</h1>
            <div class="flex items-center gap-2">
                <!-- search icon -->
                <span>
                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
                <form action="{{ route('pembayaran') }}" method="GET">
                    <input type="text" name="search" placeholder="Search"
                        class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border" />
                    <input type="submit" style="display:none;" />
                </form>
            </div>
        </div>

        <!-- Start Content -->
        <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start gap-5">
                    <div class="p-4 bg-blue-600 bg-opacity-75 rounded-full">
                        <svg class="w-10 h-10 text-white" viewBox="0 0 28 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                fill="currentColor"></path>
                            <path
                                d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                fill="currentColor"></path>
                            <path
                                d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                fill="currentColor"></path>
                            <path
                                d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                fill="currentColor"></path>
                            <path
                                d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                fill="currentColor"></path>
                            <path
                                d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="text-4xl font-semibold">{{ $total_clients }}</span>
                        <span class="text-gray-400">Total Client</span>
                    </div>
                </div>
            </div>
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start gap-5">
                    <div class="p-4 bg-amber-600 bg-opacity-75 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" viewBox="0 0 448 512"
                            fill="white"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M248 48V256h48V58.7c23.9 13.8 40 39.7 40 69.3V256h48V128C384 57.3 326.7 0 256 0H192C121.3 0 64 57.3 64 128V256h48V128c0-29.6 16.1-55.5 40-69.3V256h48V48h48zM48 288c-12.1 0-23.2 6.8-28.6 17.7l-16 32c-5 9.9-4.4 21.7 1.4 31.1S20.9 384 32 384l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32V384H352v96c0 17.7 14.3 32 32 32s32-14.3 32-32V384c11.1 0 21.4-5.7 27.2-15.2s6.4-21.2 1.4-31.1l-16-32C423.2 294.8 412.1 288 400 288H48z" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="text-4xl font-semibold">{{ $total_products }}</span>
                        <span class="text-gray-400">Total Products</span>
                    </div>
                </div>
            </div>
            <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
                <div class="flex items-start gap-5">
                    <div class="p-4 bg-emerald-600 bg-opacity-75 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" fill="white"
                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48V96H384V80c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H432c-26.5 0-48-21.5-48-48V160H192v16c0 1.7-.1 3.4-.3 5L272 288h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H272c-26.5 0-48-21.5-48-48V336c0-1.7 .1-3.4 .3-5L144 224H48c-26.5 0-48-21.5-48-48V80z" />
                        </svg>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="text-4xl font-semibold">{{ $total_projects }}</span>
                        <span class="text-gray-400">Current Projects</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
        <div class="flex mt-6 gap-4">
            <h3 class=" text-xl">Payment</h3>
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
                                        Tanggal
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Jumlah
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Deskripsi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @php
                                    $userRole = Auth::user()->role_id; 
                                @endphp
                                @if ($userRole == 2)
                                    @foreach ($payments as $pc)
                                        @if ($pc->project->user_id == Auth::user()->id)
                                            <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $pc->project->nama_proyek }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                    {{ $pc->created_at->format('Y-m-d') }}</td>
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                    {{ $pc->jumlah }}
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                    {{ $pc->deskripsi }}
                                                </td>

                                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                    <div class="inline-block p-2 rounded">
                                                        @if ($pc->is_paid == 1)
                                                            <div class="text-sm font-medium text-green-600 bg-green-100 p-2 rounded">Confirm</div>
                                                        @elseif ($pc->is_paid == 2)
                                                            <div class="text-sm font-medium text-red-600 bg-red-100 p-2 rounded">Decline</div>
                                                        @elseif ($pc->is_paid == 0)
                                                            <div class="text-sm font-medium text-yellow-600 bg-yellow-100 p-2 rounded">Pending</div>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex gap-2">
                                                        <div class="relative group">
                                                            <button
                                                                onclick="openLightbox('{{ asset('storage/payments/' . $pc->id . '.png') }}')"
                                                                class="flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                                                                See Detail
                                                            </button>
                                                            <div id="lightbox"
                                                                class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 z-50">
                                                                <div class="absolute top-4 right-4">
                                                                    <button onclick="closeLightbox()"
                                                                        class="text-white focus:outline-none">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            height="16" width="12" fill="white"
                                                                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                                            <path
                                                                                d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                                    <img src="" alt="Lightbox Image"
                                                                        id="lightbox-image"
                                                                        class="max-w-md max-h-full mx-auto" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @elseif ($userRole == 1)
                                    @foreach ($payments as $pc)
                                        <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $pc->project->nama_proyek }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $pc->created_at->format('Y-m-d') }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $pc->jumlah }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $pc->deskripsi }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                @if ($pc->is_paid == 1)
                                                    <div class="text-sm font-medium text-green-600">Paid</div>
                                                @elseif ($pc->is_paid == 2)
                                                    <div class="text-sm font-medium text-red-600">Decline</div>
                                                @elseif ($pc->is_paid == 0)
                                                    <div class="text-sm font-medium text-red-600">Unpaid</div>
                                                @endif
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex gap-2">
                                                    <form action="{{ route('konfirmasi_pembayaran', $pc) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="flex items-center text-green-700 hover:text-white border border-green-700 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 mr-2 -ml-0.5" fill="currentColor"
                                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                                <path
                                                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                                            </svg>
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('penolakan_pembayaran', $pc) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 mr-2 -ml-0.5" fill="currentColor"
                                                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                                <path
                                                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                            </svg>
                                                            Reject
                                                        </button>
                                                    </form>
                                                    <div class="relative group">
                                                        <button
                                                            onclick="openLightbox('{{ asset('storage/payments/' . $pc->id . '.png') }}')"
                                                            class="flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                                                            See Detail
                                                        </button>
                                                        <div id="lightbox"
                                                            class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 z-50">
                                                            <div class="absolute top-4 right-4">
                                                                <button onclick="closeLightbox()"
                                                                    class="text-white focus:outline-none">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16"
                                                                        width="12" fill="white"
                                                                        viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                                        <path
                                                                            d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div
                                                                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                                <img src="" alt="Lightbox Image"
                                                                    id="lightbox-image"
                                                                    class="max-w-md max-h-full mx-auto" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            {{ $payments->links() }}
        </div>
    </main>
    <script>
        function openLightbox(imageSrc) {
            document.getElementById('lightbox-image').src = imageSrc;
            document.getElementById('lightbox').classList.remove('hidden');
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.add('hidden');
        }
    </script>
@endsection
