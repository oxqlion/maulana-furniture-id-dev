@extends('layouts.header')

@section('content')
    <body class="pt-28 font-montserrat">
    <div class="relative -mt-12 mb-8 ">
        <img src="{{ asset('images/products/header.jpg') }}" alt="Foto Header" class="object-cover w-full h-72" />
        <div class="absolute inset-0 bg-[#434240] bg-opacity-60"></div>
        <div class="absolute inset-0 pt-20 lg:pl-24 px-24 text-center lg:text-start" data-aos="fade-right"
            data-aos-offset="500" data-aos-duration="800">
            <p class="text-4xl lg:text-6xl font-bold pb-4 text-[#DDBD7E]">
                Cara Pemesanan.
            </p>
            <p class="text-xs text-white lg:text-sm font-medium lg:w-1/2">Selamat datang di halaman panduan pemesanan, di mana kemudahan menjadi landasan setiap langkah. Kami memahami bahwa proses pemesanan merupakan bagian krusial dalam perjalanan Anda menciptakan ruang yang ideal.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="mb-3">
            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                <a href="{{ route('home') }}" class="hover:underline hover:text-gray-600">Home</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <span>Cara Pemesanan</span>
            </div>
        </div>
    </div>
    <div class="container pt-6 flex flex-col gap-4 pb-12">
        <p data-aos="fade-right" data-aos-duration="1200" class="font-semibold text-md">Prosedur / Cara Pemesanan Produk Mebel di Maulana Furniture Indonesia : </p>
        <ul data-aos="fade-right" data-aos-duration="1800" class="list-disc flex flex-col gap-4 ml-8">
            <li>Pilih produk mebel yang sudah kami sediakan pada katalog mebel di website Maulana Furniture Indonesia kami telah menyediakan berbagai jenis katalog yg memudahkan anda dalam memilih kebutuhan mebel sesuai keinginan anda, kemudian tentukan <strong> Produk, Nama Barang dan Jumlah Barang </strong> yang akan dipesan, Informasikan pesanan anda dengan langsung menghubungi kami melalui Email : maulanafurniture@gmail.com atau Call & Whatsapp : +62 87815879282  A/N Muhammad Rio Febrian.</li>
            <li>Langkah berikutnya, kami akan menginformasikan prosedur order, total harga dan biaya kirim kepada saudara, jika harga sudah disepakati dan ready stok ada, maka kami minta biaya untuk ditransfer ke salah satu rekening kami.</li>
            <li>Apabila produk mebel yang dipesan belum ready stok / habis, maka kami mohon kepada saudara untuk mengirimkan DP 50 % dari total harga, Setelah deposit menetap di salah satu account bank kami, kami akan mulai proses produksi barang yang anda pesan sebelumnya dengan segera. sisa 50% pelunasan dibayarkan setelah kami informasikan bahwa pesanan sudah siap untuk dikirim.</li>
            <li>Proses produksi dalam tempo 7 - 15 hari tergantung dari jenis produk yang dipesan.</li>
            <li>Pembatalan pesanan dapat dilakukan jika proses produksi barang yang dipesan belum dimulai dan DP dikembalikan penuh tanpa potongan.</li>
            <li>Setiap proses produksi atau finishing kita laporkan kepada pemesan dengan mengirim foto-fotonya Via Whatsapp atau Email.</li>
            <li>Prosedur Pelunasan dapat juga dilakukan setelah barang berada di perusahaan expedisi / cargo, sehingga pemesan dapat mengecek langsung ke perusahaan expedisi tersebut via phone.</li>
            <li>Proses pengiriman barang biasanya kami lakukan dengan menggunakan Jasa Expedisi Truck Lokal / Kargo Lokal, hal ini dapat memberikan efisiensi biaya kirim supaya dapat ditekan lebih murah, karena biaya kirim akan menjadi tanggung jawab sepenuhnya pada pihak pembeli.</li>
            <li>Untuk mengetahui posisi kiriman produk/barang mebel pesanan anda, kami akan menginformasikan Nomor HP Supir dari pihak perusahaan kargo/ekspedisi yang bersangkutan yang bertanggung jawab membawa barang pesanan saudara sehingga anda dapat mengecek posisi kiriman saudara.</li>
            <li>Jika barang sudah diterima tetapi dalam keadaan rusak / lecet., maka klaim dapat diterima selama sopir pengantar barang masih dilokasi terima barang, karena akan sepenuhnya menjadi tanggung jawab kargo atau jasa ekspedisi yang bersangkutan. Jika barang dalam keadaan lecet ringan, maka kami akan mengirimkan bahan warna finishing yang sama lewat paket sehingga barang yang lecet dapat langsung dikuas / dicolok dengan warna yang kami kirimkan. Jika ternyata barang yang diterima dalam keadaan rusak berat, maka kami siap mengganti dengan yang baru, setelah barang dikirim kembali ( diretur ).</li>
        </ul>
    </div>
    </body>
    <x-footer></x-footer>
@endsection
