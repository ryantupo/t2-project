@extends('layouts.app')

@section('title', 'Tank Analysis - T2 Engineering')

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

<!-- Comign Soon -->
<section class="bg-gray-100 rounded-lg shadow-md" style="padding: 2rem; border-radius: 15px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-6">Coming Soon</h2>
    </div>
</section>
@endsection
