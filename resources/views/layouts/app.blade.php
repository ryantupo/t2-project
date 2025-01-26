<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Slick Modern')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



    @vite('resources/css/app.css')

    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        h1,
        h2,
        h3,
        a {
            font-family: 'Norwester', sans-serif;
            text-transform: uppercase;

        }

        .bg-dark {
            background-color: #1f1f1f;
        }

        .text-light {
            color: #e0e0e0;
        }

        .text-primary {
            color: #A3CA33;
        }

        .bg-primary {
            background-color: #333;
        }

        .bg-secondary {
            background-color: #444444;
        }

        .hover\:text-primary:hover {
            color: #A3CA33;
        }

        .hover\:bg-secondary:hover {
            background-color: #444;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .content {
            padding: 1rem 1rem;
            flex: 1;
        }

        .title {
            text-align: center;
            font-size: 2rem;
            margin: 1rem 0;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 1.5rem;
            }
        }

        /* Navbar custom styles */
        .navbar-container {
            display: flex;
            align-items: center;
            padding: 1rem;
        }

        .menu-button {
            display: none;
            position: relative;
            z-index: 10;
        }

        .desktop-menu {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            white-space: nowrap;
            margin: 10px;
            scroll-behavior: smooth;
            /* Smooth scrolling effect */
        }

        .desktop-menu a {
            color: #e0e0e0;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s;
        }

        .desktop-menu a:hover {
            background-color: #444;
            color: #A3CA33;
        }

        /* Fancy Animated Scrollbar */
        .desktop-menu::-webkit-scrollbar {
            height: 8px;
        }

        .desktop-menu::-webkit-scrollbar-track {
            background: #333;
        }

        .desktop-menu::-webkit-scrollbar-thumb {
            background-color: #A3CA33;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .desktop-menu::-webkit-scrollbar-thumb:hover {
            background-color: #88B828;
        }

        /* Scrollbar for Firefox */
        .desktop-menu {
            scrollbar-width: thin;
            scrollbar-color: #A3CA33 #333;
        }

        /* Mobile-specific styles */
        @media (max-width: 1024px) {
            .menu-button {
                display: flex;
            }

            .desktop-menu {
                display: none;
            }

            .menu-button {
                padding-right: 10px;
            }
        }

        .menu-button svg {
            height: 1.5rem;
            width: 1.5rem;
            color: #e0e0e0;
        }

        /* Navbar custom styles */
        .navbar-container {
            display: flex;
            align-items: center;
            padding: 1rem;
        }

        .menu-button {
            display: none;
            margin-left: auto;
            /* Pushes the menu button to the right */
            position: relative;
            z-index: 10;
        }

        .flex-shrink-0 {
            margin-right: auto;
            /* Ensures the logo stays on the left */
        }

        /* Mobile-specific styles */
        @media (max-width: 1024px) {
            .menu-button {
                display: flex;
            }

            .desktop-menu {
                display: none;
            }
        }

        .menu-button svg {
            height: 1.5rem;
            width: 1.5rem;
            color: #e0e0e0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-dark shadow-md overflow-hidden">
        <div class="container navbar-container">
            <div class="flex-shrink-0">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="T2 Engineering Logo" class="h-10">
                </a>
            </div>
            <div class="menu-button">
                <!-- Mobile menu button -->
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-light hover:text-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Visible when menu is closed -->
                    <svg class="block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Visible when menu is open -->
                    <svg class="hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="desktop-menu">
                {{--  <a href="/" class="hover:bg-secondary hover:text-primary">Home</a>  --}}
                <a href="/setting-out-engineer" class="hover:bg-secondary hover:text-primary">Setting Out</a>
                <a href="/surveying" class="hover:bg-secondary hover:text-primary">Surveying</a>
                <a href="/quality-control" class="hover:bg-secondary hover:text-primary">Scanning *Coming soon*</a>
                <a href="/tank-analysis" class="hover:bg-secondary hover:text-primary">Tank Analysis *Coming soon*</a>

                {{--  <a href="/volume-calculations" class="hover:bg-secondary hover:text-primary">Volume Calculations</a>  --}}
                {{--  <a href="/equipment" class="hover:bg-secondary hover:text-primary">Equipment</a>  --}}
                <a href="/about-us" class="hover:bg-secondary hover:text-primary">About Us</a>
                <a href="/projects-clients" class="hover:bg-secondary hover:text-primary">Clients & Testimonials</a>
                <a href="/contact-us" class="hover:bg-secondary hover:text-primary">Contact Us</a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                {{--  <a href="/" class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Home</a>  --}}

                <a href="/setting-out-engineer"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Setting Out
                    Engineer</a>
                <a href="/surveying"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Surveying</a>
                <a href="/quality-control"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Scanning
                    *Coming soon*</a>
                <a href="/tank-analysis"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Tank Analysis
                    *Coming soon*</a>

                {{--  <a href="/volume-calculations"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Volume
                    Calculations</a>  --}}
                {{--  <a href="/equipment"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Equipment</a>  --}}
                <a href="/about-us"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">About Us</a>
                <a href="/projects-clients"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Clients &
                    Testimonials</a>
                <a href="/contact-us"
                    class="text-light block px-3 py-2 rounded-md text-base font-medium hover:text-primary">Contact
                    Us</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        <div class="container content">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light p-4 text-center">
        &copy; 2021 T2 Engineering. All rights reserved.
    </footer>

    <script>
        // JavaScript for mobile menu toggle
        const button = document.querySelector('button[aria-controls="mobile-menu"]');
        const menu = document.getElementById('mobile-menu');
        const svgs = button.querySelectorAll('svg');

        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            svgs.forEach(svg => svg.classList.toggle('hidden'));
        });
        // Close mobile menu if screen width is greater than 1024px (desktop mode)
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1024) {
                if (!menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                    svgs[0].classList.remove('hidden');
                    svgs[1].classList.add('hidden');
                }
            }
        });
    </script>
</body>

</html>
