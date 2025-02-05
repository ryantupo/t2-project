@extends('layouts.app')

@section('title', 'Projects - Clients')

@section('content')
<section class="py-16 bg-[#333333]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Section -->
        <h1 class="text-3xl font-extrabold text-white text-center">Our Clients</h1>

        @auth
        <div class="text-right">
            <a href="{{ route('clients.index') }}" class="bg-[#A3CA33] text-white px-6 py-3 rounded-full text-lg shadow-md hover:shadow-lg transition-shadow duration-300 inline-block">
                Admin View Clients
            </a>
        </div>
        @endauth

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
                            <blockquote class="mt-4 text-gray-600 italic border-t pt-4">
                                "{{ $client->testimonial }}"
                            </blockquote>

                            <!-- Author and Job Title Section -->
                            @if($client->testimonial_author || $client->testimonial_author_job)
                                <div class="mt-4 border-t pt-4">
                                    @if($client->testimonial_author)
                                        <p class="text-gray-700 font-medium">- {{ $client->testimonial_author }}</p>
                                    @endif
                                    @if($client->testimonial_author_job)
                                        <p class="text-gray-500 text-sm">{{ $client->testimonial_author_job }}</p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
