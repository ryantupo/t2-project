@extends('layouts.app')

@section('title', 'Edit Client')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-gray-900">Edit Client</h1>

        <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Client Name -->
            <div class="mt-4">
                <label for="client_name" class="block text-sm font-medium text-gray-700">Client Name</label>
                <input type="text" name="client_name" id="client_name" value="{{ old('client_name', $client->name) }}" class="mt-1 block w-full border-2 border-gray-800 rounded-md shadow-md focus:ring-green-500 focus:border-green-500 text-black" required>
                @error('client_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Description -->
            <div class="mt-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="3" class="mt-1 block w-full border-2 border-gray-800 rounded-md shadow-md focus:ring-green-500 focus:border-green-500 text-black" required>{{ old('description', $client->description) }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Testimonial -->
            <div class="mt-4">
                <label for="testimonial" class="block text-sm font-medium text-gray-700">Testimonial</label>
                <textarea name="testimonial" id="testimonial" rows="3" class="mt-1 block w-full border-2 border-gray-800 rounded-md shadow-md focus:ring-green-500 focus:border-green-500 text-black">{{ old('testimonial', $client->testimonial) }}</textarea>
                @error('testimonial')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Client Image -->
            <div class="mt-4">
                <label for="logo" class="block text-sm font-medium text-gray-700">Client Image</label>
                <input type="file" name="logo" id="logo" accept="image/*" class="mt-1 block border-2 border-gray-800 rounded-md shadow-md focus:ring-green-500 focus:border-green-500 text-black" onchange="previewImage(event)">
                @error('logo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image Preview -->
            <div class="mt-4">
                <img id="imagePreview" src="{{ Storage::url($client->logo_path) }}" alt="Current Client Photo" class="client-photo w-72 h-72 object-cover">
            </div>

            <!-- Update Button -->
            <div class="mt-6">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#A3CA33] hover:bg-[#8FB82D]">
                    Update Client
                </button>
            </div>
        </form>
    </div>
</section>

<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
