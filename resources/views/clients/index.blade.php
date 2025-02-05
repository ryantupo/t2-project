@extends('layouts.app')

@section('title', 'Clients')

@section('content')
<section class="py-16 bg-[#333333]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-white text-center">Clients</h1>
        <p class="mt-4 text-lg text-gray-300 text-center">Details about our clients.</p>

        <div class="flex justify-center">
            <a href="{{ route('clients.create') }}" class="mt-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#A3CA33] hover:bg-[#8FB82D]">
                Add New Client
            </a>
        </div>

        <div class="mt-8">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($clients as $client)
                <div class="bg-white p-6 rounded-2xl shadow-lg transition-transform hover:scale-105 duration-300">
                    @if($client->logo_path)
                        <img src="{{ Storage::url($client->logo_path) }}" alt="Client Photo" class="client-photo w-full h-72 object-cover rounded-t-xl">
                    @endif
                    <h2 class="text-xl font-bold mt-4 text-gray-800">{{ $client->name }}</h2>

                    @if($client->testimonial)
                        <div class="mt-4 border-t pt-4">
                            <h3 class="text-lg font-semibold text-gray-800">Testimonial</h3>
                            <p class="mt-2 text-gray-600 italic">“{{ $client->testimonial }}”</p>

                            @if($client->testimonial_author)
                                <p class="mt-2 text-gray-700 font-medium">- {{ $client->testimonial_author }}</p>
                            @endif

                            @if($client->testimonial_author_job)
                                <p class="text-gray-500 text-sm">{{ $client->testimonial_author_job }}</p>
                            @endif
                        </div>
                    @endif

                    <!-- Edit Button -->
                    <div class="mt-4">
                        <a href="{{ route('clients.edit', $client->id) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#A3CA33] hover:bg-[#8FB82D]">
                            Edit
                        </a>
                    </div>

                    <!-- Delete Button -->
                    <div class="mt-4">
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this client?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-500">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
