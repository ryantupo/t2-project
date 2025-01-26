@extends('layouts.app')

@section('title', 'Projects - Clients')

@section('content')
<section class="py-16 bg-[#333333]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Section -->
        <h1 class="text-3xl font-extrabold text-white text-center">Explore Our Customer Success Stories</h1>
        <p class="mt-4 text-lg text-gray-300 text-center">
            Showcasing the diversity and quality of our construction endeavors. From innovative solutions to creative projects, we bring ideas to life. Explore our portfolio and see the results of our dedication and hard work.
        </p>

        <!-- Logos Section -->
        <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
            @foreach($clients as $client)
                @if($client->logo_path)
                    <div class="flex items-center justify-center p-4 bg-white rounded-xl shadow-md h-[150px] w-[150px] mx-auto">
                        <img src="{{ Storage::url($client->logo_path) }}"
                             alt="{{ $client->name }} Logo"
                             class="max-w-full max-h-full object-contain">
                    </div>
                @endif
            @endforeach
        </div>


        <!-- Testimonials Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-white text-center mb-8">What Our Clients Say</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                @foreach($clients as $client)
                    @if($client->testimonial)
                        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200 hover:border-gray-400 transition duration-300">
                            <div class="mb-4 flex items-center">
                                <img src="{{ Storage::url($client->logo_path) }}"
                                     alt="{{ $client->name }} Logo"
                                     class="h-[100px] w-[100px] object-contain mr-4">
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">{{ $client->name }}</h3>
                                    <p class="text-sm text-gray-600">{{ $client->role ?? '' }}</p>
                                </div>
                            </div>
                            <p class="text-gray-700">{{ $client->description }}</p>
                            <blockquote class="mt-4 text-gray-600 italic border-t pt-4">
                                "{{ $client->testimonial }}"
                            </blockquote>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
