@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Main Content Background Color -->
<style>
    body {
        background-color: #333333; /* Slightly lighter gray than navbar */
    }

    h1,h2,h3,a, {
        font-family: 'Norwester', sans-serif;
        text-transform: uppercase;
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






<!-- Spacing Below Carousel Header -->
<div style="height: 20px;"></div> <!-- Increased space for more padding -->

<div id="carouselHeader" class="carousel slide carousel-fade max-w-7xl mx-auto bg-dark" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        @foreach($images as $index => $image)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <div class="image-container" style="width: 100%; height: 550px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                <img src="{{ asset('images/home/' . $image) }}"
                     class="d-block"
                     alt="Header Carousel Image"
                     style="width: 100%; height: 100%; object-fit: contain; border-radius: 20px;">
            </div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center mb-8" style="height: 100%; text-align: center;">
                <div class="rounded-2xl mb-4" style="padding: 15px; margin-top: auto; margin-bottom: auto;">
                    <h1 class="text-5xl font-bold text-white uppercase">Cutting Edge Engineering Solutions For All</h1>
                </div>
                <a href="/contact-us" class="mt-4 inline-block bg-[#A3CA33] text-white px-8 py-4 rounded-full text-xl">Get Started Today</a>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
 </div>








<!-- Spacing Below Carousel Header -->
<div style="height: 20px;"></div> <!-- Increased space for more padding -->

<!-- Services Section -->
<!-- Services Section -->
<section class="bg-dark rounded-2xl max-w-7xl mx-auto" style="padding: 1.5rem 1.5rem;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-extrabold text-white mb-6">OUR SERVICES</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> <!-- Adjusted to 2x2 grid -->
            <div class="bg-white border border-[#A3CA33] p-6 rounded-2xl shadow-md">
                <h3 class="text-xl font-semibold text-[#A3CA33]">Setting Out</h3>
                <p class="mt-2 text-gray-600 text-sm">Our setting out services ensure precision for construction projects of all sizes. We provide accurate measurements to help translate design plans into reality.</p>
                <a href="{{ route('setting-out-engineer') }}" class="mt-4 inline-block bg-[#A3CA33] text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#89b82a] transition-colors duration-300">Learn More</a>
            </div>
            <div class="bg-white border border-[#A3CA33] p-6 rounded-2xl shadow-md">
                <h3 class="text-xl font-semibold text-[#A3CA33]">Surveying</h3>
                <p class="mt-2 text-gray-600 text-sm">We offer comprehensive surveying services to deliver the exact land measurements required for your project. Our team uses advanced equipment to ensure top-level accuracy.</p>
                <a href="{{ route('surveying') }}" class="mt-4 inline-block bg-[#A3CA33] text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#89b82a] transition-colors duration-300">Learn More</a>
            </div>
            <div class="bg-white border border-[#A3CA33] p-6 rounded-2xl shadow-md">
                <h3 class="text-xl font-semibold text-[#A3CA33]">Scanning *Coming Soon*</h3>
                <p class="mt-2 text-gray-600 text-sm">With state-of-the-art scanning technology, we provide detailed 3D scans and high-definition imagery for project planning and execution, reducing error and increasing efficiency.</p>
                <a href="{{ route('quality-control') }}" class="mt-4 inline-block bg-[#A3CA33] text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#89b82a] transition-colors duration-300">Learn More</a>
            </div>
            <div class="bg-white border border-[#A3CA33] p-6 rounded-2xl shadow-md">
                <h3 class="text-xl font-semibold text-[#A3CA33]">Tank Analysis</h3>
                <p class="mt-2 text-gray-600 text-sm">Our tank analysis services focus on delivering precise measurements and evaluations for industrial storage tanks, helping ensure safe and efficient operations.</p>
                <a href="{{ route('tank-analysis') }}" class="mt-4 inline-block bg-[#A3CA33] text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#89b82a] transition-colors duration-300">Learn More</a>
            </div>
        </div>
    </div>
</section>


<!-- Spacing Between Sections -->
<div style="height: 20px;"></div> <!-- Ensure spacing between sections -->

<!-- Testimonials Section -->
<section class="bg-dark rounded-2xl py-6 max-w-7xl mx-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-extrabold text-white mb-6">TESTIMONIALS</h2>
        <div class="testimonials-carousel">
            @foreach($clients as $client)
                @if(!empty($client->testimonial))
                    <div class="testimonial p-6 rounded-2xl bg-white mr-6 ml-6 relative" style="min-height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                        <!-- Limit the testimonial to 150 characters and add "..." -->
                        <p class="text-lg font-semibold text-gray-600">
                            "{{ \Illuminate\Support\Str::limit($client->testimonial, 150, '...') }}"
                        </p>

                        <p class="text-[#A3CA33] absolute bottom-4 right-4">- {{ $client->name }}</p>
                        <!-- Testimonial Author and Job Section -->
                        @if($client->testimonial_author || $client->testimonial_author_job)
                            <div class="mt-4 text-sm text-gray-500">
                                @if($client->testimonial_author)
                                    <p class="text-gray-700 font-medium">- {{ $client->testimonial_author }}</p>
                                @endif
                                @if($client->testimonial_author_job)
                                    <p class="text-gray-400">{{ $client->testimonial_author_job }}</p>
                                @endif
                            </div>
                        @endif

                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>


<script>
    $(document).ready(function(){
        $('.testimonials-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3, // Show 3 testimonials at a time on larger screens
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            centerMode: true, // Enable centering
            centerPadding: '0px', // No padding for centering
            responsive: [
                {
                    breakpoint: 768, // Mobile breakpoint
                    settings: {
                        slidesToShow: 1, // Show 1 testimonial on mobile
                        centerMode: true, // Enable centering
                        centerPadding: '0px', // No extra padding
                    }
                }
            ]
        });
    });
</script>

<style>

    .text-primary {
        color: #A3CA33;
    }

    .testimonials-carousel {
        display: flex;
        justify-content: center; /* Center the carousel */
    }

    .testimonial {
        width: 100%; /* Full width of the parent container */
        box-sizing: border-box; /* Include padding and border in the element's total width */
    }

    /* Centering the testimonials inside the carousel */
    .slick-slide {
        display: flex !important; /* Flexbox for centering */
        justify-content: center; /* Center contents of the slide */
        height: 100%; /* Ensures uniform height */
    }
</style>







@endsection
