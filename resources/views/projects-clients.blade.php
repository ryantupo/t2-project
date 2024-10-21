@extends('layouts.app')

@section('title', 'Projects - Clients')

@section('content')
<section class="py-16 bg-[#333333]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-white text-center">Projects - Clients</h1>
        <p class="mt-4 text-lg text-gray-300 text-center">Details about the clients we work with on various projects.</p>

        <div class="mt-8">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($clients as $client)
                    <div class="bg-white p-6 rounded-2xl shadow-lg transition-transform hover:scale-105 duration-300">
                        @if($client->logo_path)
                            <img src="{{ Storage::url($client->logo_path) }}" alt="Client Photo" class="client-photo w-full h-72 object-cover rounded-t-xl">
                        @endif
                        <h2 class="text-xl font-bold mt-4 text-gray-800">{{ $client->name }}</h2>
                        <p class="mt-2 text-gray-700">{{ $client->description }}</p>
                        @if($client->testimonial)
                            <div class="mt-4 border-t pt-4">
                                <h3 class="text-lg font-semibold text-gray-800">Testimonial</h3>
                                <p class="mt-2 text-gray-600 italic">“{{ $client->testimonial }}”</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
