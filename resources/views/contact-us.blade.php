@extends('layouts.app')

@section('title', 'Contact Us')

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

    /* Form fields styling */
    input[type="text"],
    input[type="email"],
    textarea {
        border: 2px solid #000 !important; /* Black border with high priority */
        color: #000 !important; /* Black text */
        background-color: #ffffff; /* White background */
        border-radius: 5px; /* Rounded edges for consistency */
        padding: 10px; /* Extra padding for clearer input fields */
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        outline: none; /* Remove default outline */
        border-color: #A3CA33 !important; /* Green border on focus */
        box-shadow: 0 0 5px rgba(163, 202, 51, 0.5); /* Glow effect */
    }

    label {
        color: #000; /* Black text for labels */
    }

    /* Popup Notification Styles */
    .popup {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #A3CA33;
        color: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        opacity: 1;
        transition: opacity 1s ease-in-out, transform 1s ease-in-out; /* Smooth transition */
        z-index: 1000; /* Ensure it's on top of other content */
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h1 class="text-3xl font-extrabold text-white mb-6">Contact Us</h1>

    <!-- Contact Form -->
    <div class="section">
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block font-semibold mb-2">Your Name</label>
                    <input type="text" name="name" id="name" required class="border-gray-300 rounded-md p-2 w-full" placeholder="Enter your name">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block font-semibold mb-2">Your Email</label>
                    <input type="email" name="email" id="email" required class="border-gray-300 rounded-md p-2 w-full" placeholder="Enter your email">
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block font-semibold mb-2">Your Message</label>
                    <textarea name="message" id="message" rows="5" required class="border-gray-300 rounded-md p-2 w-full" placeholder="Enter your message"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="bg-[#A3CA33] text-white px-6 py-3 rounded-full text-lg shadow-md hover:shadow-lg transition-shadow duration-300">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Popup Notification -->
<div id="successPopup" class="popup hidden">
    {{ session('success') }}
</div>

<!-- JavaScript to trigger confirmation popup -->
@if(session('success'))
<script>
    window.onload = function() {
        const popup = document.getElementById('successPopup');
        popup.classList.remove('hidden'); // Show the popup

        // Start fade-out after 2 seconds
        setTimeout(() => {
            popup.style.transition = "opacity 1s ease-in-out";  // Smooth fade-out for 1 second
            popup.style.opacity = "0";  // Start the fade-out
        }, 2000); // Start the fade-out after 2 seconds

        // Remove the popup completely after the fade-out (1s for fade-out + 500ms buffer)
        setTimeout(() => {
            popup.style.display = "none"; // Hide it fully after fading out
        }, 3000); // 2s (delay) + 1s (fade-out duration)
    };
</script>
@endif

@endsection
