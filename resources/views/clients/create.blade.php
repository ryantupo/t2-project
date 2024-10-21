@extends('layouts.app')

@section('title', 'Add Client')

@section('content')
<style>
    body {
        background-color: #f9f9f9; /* Light gray background to match homepage */
    }

    .section {
        background-color: #ffffff; /* White background for sections */
        border-radius: 20px; /* Match the header rounding */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
        margin-bottom: 20px;
        padding: 1.5rem; /* Increase padding for cleaner space */
    }

    /* Style for image preview */
    #photo_preview {
        margin-top: 10px;
        max-width: 200px;
        display: none; /* Initially hidden */
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Light shadow around the preview */
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Add New Client</h1>

    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Client Photo Upload -->
            <div class="section">
                <label for="client_photo" class="block text-gray-700 font-semibold mb-2">Client Photo</label>
                <input type="file" name="client_photo" id="client_photo" accept="image/*" class="border-2 border-gray-800 rounded-md p-2 w-full text-black">
                <img id="photo_preview" alt="Client Photo Preview"> <!-- Image preview element -->
            </div>

            <!-- Client Details Box -->
            <div class="section">
                <label for="client_name" class="block text-gray-700 font-semibold mb-2">Client Name</label>
                <input type="text" name="client_name" id="client_name" required class="border-2 border-gray-800 rounded-md p-2 w-full text-black" placeholder="Enter client name">

                <label for="description" class="block text-gray-700 font-semibold mt-4 mb-2">Description</label>
                <textarea name="description" id="description" rows="4" required class="border-2 border-gray-800 rounded-md p-2 w-full text-black" placeholder="Enter client's description"></textarea>

                <label for="testimonial" class="block text-gray-700 font-semibold mt-2 mb-2">Testimonial</label>
                <textarea name="testimonial" id="testimonial" rows="4" required class="border-2 border-gray-800 rounded-md p-2 w-full text-black" placeholder="Enter client's testimonial"></textarea>
            </div>
        </div>

        <div class="text-right mt-6">
            <button type="submit" class="bg-[#A3CA33] text-white px-6 py-3 rounded-full text-lg shadow-md hover:shadow-lg transition-shadow duration-300">Add Client</button>
        </div>
    </form>
</div>

<!-- JavaScript for previewing the selected image -->
<script>
    document.getElementById('client_photo').onchange = function (event) {
        const [file] = event.target.files;
        if (file) {
            document.getElementById('photo_preview').src = URL.createObjectURL(file); // Set the preview image source
            document.getElementById('photo_preview').style.display = 'block'; // Make the preview visible
        }
    };
</script>
@endsection
