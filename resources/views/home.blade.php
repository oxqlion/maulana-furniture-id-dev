@extends('layouts.header')

@section('content')
<div class="">
    <!-- Hero Section -->
    <div class="bg-cover bg-center h-96 flex items-center justify-center" style="background-image: url('your-hero-image.jpg');">
        <h1 class="text-4xl text-white font-semibold text-center">Welcome to Our Website</h1>
    </div>

    <!-- Our Clients Section -->
    <div class="py-12">
        <h2 class="text-2xl text-center font-semibold mb-6">Our Clients</h2>
        <div class="flex justify-around space-x-4">
            <div class="w-1/6">
                <img src="{{ asset('images/cozy-monty.png') }}" alt="Client 1 Logo">
            </div>
            <div class="w-1/6">
                <img src="{{ asset('images/mocal.png') }}" alt="Client 2 Logo">
            </div>
            <div class="w-1/6">
                <img src="{{ asset('images/neka.png') }}" alt="Client 3 Logo">
            </div>
            <div class="w-1/6">
                <img src="{{ asset('images/dad.png') }}" alt="Client 4 Logo">
            </div>
        </div>
    </div>

    <!-- Company Overview Section -->
    <div class="py-12 flex items-center">
        <div class="w-3/12">
            <img src="https://storee.id/uploads/products/e33310585ac6ced4e8dacf4d5254f056.png" alt="Company Image" class="w-full h-auto">
        </div>
        <div class="w-1/2 p-6">
            <h2 class="text-2xl font-semibold">Company Overview</h2>
            <p class="mt-4 text-gray-700">
                This is a brief description of our company. You can provide details about your company here.
            </p>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="py-12">
        <h2 class="text-2xl text-center font-semibold mb-6">Why Choose Us?</h2>
        <div class="flex justify-center space-x-6">
            <!-- Card 1 -->
            <div class="w-1/3 p-6 border rounded-lg hover:shadow-lg cursor-pointer">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-check-circle text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-semibold">Quality Service</h3>
                <p class="mt-4 text-gray-700">We provide high-quality services that meet your needs.</p>
            </div>
            <!-- Card 2 -->
            <div class="w-1/3 p-6 border rounded-lg hover:shadow-lg cursor-pointer">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-chart-bar text-2xl text-blue-500"></i>
                </div>
                <h3 class="text-xl font-semibold">Proven Results</h3>
                <p class="mt-4 text-gray-700">Our track record speaks for itself with proven results.</p>
            </div>
            <!-- Card 3 -->
            <div class="w-1/3 p-6 border rounded-lg hover:shadow-lg cursor-pointer">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-users text-2xl text-indigo-500"></i>
                </div>
                <h3 class="text-xl font-semibold">Customer Satisfaction</h3>
                <p class="mt-4 text-gray-700">We prioritize customer satisfaction above all else.</p>
            </div>
        </div>
    </div>
</div>
@endsection
