@extends('layouts.app')

@section('title', 'Setting Out')

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

<div id="carouselSettingOut" class="rounded-2xl overflow-hidden carousel slide carousel-fade max-w-7xl mx-auto bg-dark" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        @foreach ($imageNames as $index => $image)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="image-container">
                    <img src="{{ asset('images/setting_out/' . $image) }}"
                         class="d-block w-full"
                         alt="Setting Out Carousel Image">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    {{--  <h1 class="text-5xl font-bold text-white">Professional Setting Out Services</h1>  --}}
                </div>
            </div>
        @endforeach
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

<style>
    .image-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .carousel-item img {
        width: 100%;
        height: auto;
        max-height: 650px;
        object-fit: cover;
    }

    /* Remove individual image border radius since container is now rounded */
    @media (max-width: 640px) {
        .carousel-item img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }
    }
</style>


<!-- Spacing Below Carousel Header -->
<div style="height: 20px;"></div>

<!-- Setting Out Services Section -->
<div class="main-content max-w-7xl mx-auto">
    <section class="bg-gray-100 rounded-lg shadow-md section ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-3xl font-extrabold text-gray-900 mb-6">Professional Setting Out Services</h1>
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
