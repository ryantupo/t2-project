@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Main Content Background Color -->
<style>
    body {
        background-color: #333333; /* Slightly lighter gray than navbar */
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
<div id="carouselAboutUs" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner" style="height: 600px;">
        @for ($i = 1; $i <= 3; $i++)
            <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                {{--  add in images when have them from jack  --}}
                <img src="{{ asset('images/about-us/about-' . $i . '.jpg') }}" class="d-block w-100" alt="About Us Carousel Image" style="height: 600px; object-fit: cover; border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-5xl font-bold text-white">About T2 Engineering</h1>
                </div>
            </div>
        @endfor
    </div>
    <a class="carousel-control-prev" href="#carouselAboutUs" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselAboutUs" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Spacing Below Carousel Header -->
<div style="height: 10px;"></div>

<!-- About Us Section -->
<section class="bg-gray-100 rounded-lg shadow-md" style="padding: 2rem; border-radius: 15px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-6">About Us</h2>
        <p class="text-lg text-gray-600 mb-4">
            T2 Engineering was founded in December 2021 by Director Jack Rylatt. We support the construction industry in all aspects of engineering, surveying, and quality control. The wide variety of equipment and software we use also leads to a crossover into the petrochemical industry.
        </p>
        <p class="text-lg text-gray-600 mb-4">
            Based in the Hull and Grimsby area, we proudly serve the whole of Lincolnshire, Yorkshire, and Nottinghamshire. Our team takes a meticulous, caring approach to every project, ensuring that we provide the best service to our clients.
        </p>
        <p class="text-lg text-gray-600 mb-4">
            With our curiosity and passion for modern technologies, we strive to use innovative methods, helping our clients stay ahead of the rapid technological developments at a low cost.
        </p>
        <div class="text-left mt-6">
            <a href="{{ route('contact-us') }}" class="mt-4 inline-block bg-[#A3CA33] text-white px-6 py-3 rounded-full text-lg shadow-md hover:shadow-lg transition-shadow duration-300">Contact Us</a>
        </div>
    </div>
</section>
@endsection
