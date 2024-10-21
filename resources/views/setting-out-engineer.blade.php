@extends('layouts.app')

@section('title', 'Setting Out Engineer')

@section('content')
<!-- Main Content Background Color -->
<style>
    html, body {
        background-color: #333333; /* Slightly lighter gray than navbar */
        margin: 0;
    }
    .main-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .section {
        background-color: #f0f0f0; /* Light grey for sections to contrast */
        border-radius: 20px; /* Match the header rounding */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
        margin-bottom: 20px;
        padding: 1.5rem; /* Increase padding for cleaner space */
    }

    .carousel-inner img {
        border-radius: 20px; /* Match the same rounded corners */
    }
</style>

<!-- Image Carousel Header with Fixed Height -->
<div id="carouselSettingOut" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner" style="height: 600px;">
        @for ($i = 1; $i <= 5; $i++)
            <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                <img src="{{ asset('images/setting_out/setting out - ' . $i . '.jpg') }}" class="d-block w-100" alt="Setting Out Carousel Image" style="height: 600px; object-fit: cover; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-5xl font-bold text-white">Professional Setting Out Services</h1>
                </div>
            </div>
        @endfor
    </div>
    <a class="carousel-control-prev" href="#carouselSettingOut" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselSettingOut" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Spacing Below Carousel Header -->
<div style="height: 10px;"></div>

<!-- Setting Out Services Section -->
<div class="main-content">
    <section class="bg-gray-100 rounded-lg shadow-md section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-6">Our Setting Out Services</h2>
            <p class="text-lg text-gray-600 mb-4">T2 Engineering is fully versed in all areas of setting out. Our setting out services include but are not limited to:</p>
            <ul class="list-disc list-inside text-gray-700 text-lg space-y-2">
                <li>Setting out structures and foundations, including bolts and crane rails.</li>
                <li>Setting out piles and pile mats.</li>
                <li>Setting out roads and highway infrastructure.</li>
                <li>Setting out drainage.</li>
                <li>Setting out boundary lines.</li>
                <li>Continued monitoring of work progression and quality.</li>
            </ul>
            <div class="text-left mt-6">
                <a href="{{ route('contact-us') }}" class="mt-4 inline-block bg-[#A3CA33] text-white px-6 py-3 rounded-full text-lg shadow-md hover:shadow-lg transition-shadow duration-300">Learn More</a>
            </div>
        </div>
    </section>
</div>
@endsection
