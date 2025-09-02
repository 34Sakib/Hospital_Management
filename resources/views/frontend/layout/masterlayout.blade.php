<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hospital Management System')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- External Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    
    <!-- Responsive Header Styles -->
    <style>
        /* Global Styles */
        :root {
            --primary-color: #00bcd4;
            --secondary-color: #6c757d;
            --light-bg: #f8f9fa;
            --text-color: #333;
            --heading-color: #2c3e50;
            --white: #ffffff;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #f8fcfd;
            color: #222;
            box-sizing: border-box;
            line-height: 1.6;
        }

        body {
            min-width: 320px;
            font-size: 16px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        img {
            max-width: 100%;
            display: block;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .top-header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 10px 0;
            font-size: 0.9em;
        }

        .top-header .container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .top-header .contact-info span {
            margin-right: 20px;
        }

        .top-header .contact-info i {
            margin-right: 5px;
        }

        /* Main Navigation */
        .main-nav {
            background-color: var(--white);
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .main-nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-toggler {
            border: 2px solid var(--primary-color) !important;
            padding: 0.4rem 0.6rem;
            background: #fff;
            font-size: 1.25rem;
            line-height: 1;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: none; /* Hidden by default */
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-toggler:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .navbar-toggler:hover .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(34, 184, 207, 0.25);
            outline: none;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2834, 184, 207, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2.5' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            transition: all 0.3s ease;
        }

        /* Show toggle button on smaller screens */
        @media (max-width: 991.98px) {
            .navbar-toggler {
                display: inline-block !important;
            }
        }

        /* Bootstrap Offcanvas customization */
        .offcanvas {
            width: 320px !important;
            background-color: #fff !important;
            border: none;
            box-shadow: -2px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1055 !important;
        }

        .offcanvas-backdrop {
            background-color: rgba(0, 0, 0, 0.5) !important;
            z-index: 1050 !important;
        }

        .offcanvas-header {
            border-bottom: 1px solid #eee;
            padding: 1.5rem;
            background-color: #fff;
        }

        .offcanvas-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--heading-color);
            margin: 0;
        }

        .offcanvas-body {
            padding: 1rem !important;
            background-color: #fff;
            overflow-y: auto;
            display: block !important;
        }

        .offcanvas .nav-links {
            flex-direction: column;
            padding: 0;
            margin: 0;
            list-style: none;
            width: 100%;
            display: flex !important;
        }

        .offcanvas .nav-links li {
            margin: 0;
            margin-bottom: 0.8rem;
            width: 100%;
            display: block;
        }

        .offcanvas .nav-links a {
            font-size: 1.2rem;
            padding: 1rem 1.2rem;
            display: block !important;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: var(--text-color) !important;
            font-weight: 500;
            width: 100%;
            border: 1px solid transparent;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .offcanvas .nav-links a:hover {
            color: var(--primary-color);
            background-color: #f0f9fa;
            border-color: #e0f2f7;
            transform: translateX(5px);
        }

        .offcanvas .nav-links a.active {
            color: #fff;
            background-color: var(--primary-color);
            font-weight: 600;
            border-color: var(--primary-color);
        }

        .offcanvas-footer {
            padding: 1.5rem;
            border-top: 1px solid #eee;
            margin-top: auto;
            background-color: #fff;
        }

        .btn-close {
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: 0.5rem;
            opacity: 0.6;
            width: 2em;
            height: 2em;
            padding: 0;
            background-color: #f8f9fa;
        }

        .btn-close:hover {
            opacity: 0.8;
            background-color: #e9ecef;
        }

        .btn-close:focus {
            box-shadow: 0 0 0 0.25rem rgba(34, 184, 207, 0.25);
            outline: none;
        }

        /* Force navigation links to be visible in offcanvas */
        #mobileMenu .nav-links,
        #mobileMenu .nav-links li,
        #mobileMenu .nav-links a {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
        }

        /* Debug styling for navigation links */
        #mobileMenu .nav-links {
            background-color: #f8f9fa !important;
            border: 2px solid #00bcd4 !important;
            border-radius: 10px;
            padding: 1rem !important;
            margin: 1rem 0;
        }

        #mobileMenu .nav-links li {
            background-color: #fff !important;
            border: 1px solid #e0e0e0;
            margin-bottom: 0.5rem !important;
            border-radius: 8px;
        }

        #mobileMenu .nav-links a {
            color: #333 !important;
            font-weight: 600 !important;
            font-size: 1.1rem !important;
            padding: 0.8rem 1rem !important;
            background-color: transparent !important;
        }

        #mobileMenu .nav-links a:hover {
            background-color: var(--primary-color) !important;
            color: #fff !important;
        }

        #mobileMenu .nav-links a.active {
            background-color: var(--primary-color) !important;
            color: #fff !important;
        }

        @media (max-width: 576px) {
            .offcanvas {
                width: 280px !important;
            }
        }

        .main-nav .logo {
            display: flex;
            align-items: center;
            transition: transform 0.2s ease;
        }

        .main-nav .logo:hover {
            transform: scale(1.05);
        }

        .main-nav .logo-circle {
            width: 40px;
            height: 40px;
            background-color: #1b3728;
            border-radius: 50%;
            margin-right: 10px;
        }

        .main-nav .logo span {
            font-size: 1.5em;
            font-weight: bold;
            color: var(--heading-color);
        }

        .main-nav .nav-links {
            list-style: none;
            display: flex;
        }

        .main-nav .nav-links li {
            margin-left: 30px;
        }

        .main-nav .nav-links a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .main-nav .nav-links a:hover {
            color: var(--primary-color);
        }

        .main-nav .nav-links a.active {
            color: var(--primary-color);
        }

        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            color: var(--primary-color);
            font-size: 18px;
            margin-left: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .icon-container:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .call-button {
            background-color: #22B8CF;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            text-decoration: none;
        }

        .call-button:hover {
            background-color: #199CB0;
        }

        .call-button i {
            font-size: 16px;
        }

        @media (max-width: 900px) {
            .main-nav .container {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                gap: 0;
                position: relative;
                width: 100%;
            }

            .main-nav .container>.logo,
            .main-nav .container>.navbar-toggler,
            .main-nav .container>.icon-container,
            .main-nav .container>.call-button {
                margin: 0 4px;
            }

            .navbar-toggler {
                display: flex !important;
                order: 2;
            }

            .nav-links {
                display: none !important;
            }

            /* Override for offcanvas - ensure nav links are visible inside offcanvas */
            #mobileMenu .nav-links {
                display: flex !important;
                flex-direction: column;
            }

            .icon-container,
            .call-button {
                display: flex;
                align-items: center;
            }

            .call-button {
                font-size: 0.9rem;
                padding: 8px 12px;
            }

            .call-button span {
                display: none;
            }

            .call-button i {
                margin: 0;
            }
        }

        @media (max-width: 767px) {
            .call-button {
                display: none !important;
            }
            
            .icon-container {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .top-header .container {
                flex-direction: column;
                text-align: center;
                gap: 5px;
            }

            .top-header .contact-info {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .top-header .contact-info span {
                margin-right: 0;
                font-size: 0.85rem;
            }
        }
    </style>
    
    <!-- Custom Styles -->
    @yield('styles')
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <!-- Header Section -->
    <header class="top-header">
        <div class="container">
            <div class="contact-info">
                <span><i class="fas fa-phone"></i> +88018674-45897</span>
                <span><i class="fas fa-envelope"></i> example@gmail.com</span>
                <span><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</span>
            </div>
        </div>
    </header>

    <!-- Navigation Section -->
    <nav class="main-nav">
        <div class="container">
            <a href="{{ route('home') }}" class="logo" style="text-decoration: none; color: inherit;">
                <div class="logo-circle"></div>
                <span>LOGO</span>
            </a>
            
            <!-- Desktop Navigation -->
            <ul class="nav-links d-none d-lg-flex">
                <li><a href="{{ route('home') }}" class="@yield('home-active')">Home</a></li>
                <li><a href="{{ route('about') }}" class="@yield('about-active')">About Us</a></li>
                <li><a href="{{ route('services') }}" class="@yield('services-active')">Services</a></li>
                <li><a href="{{ route('specialists') }}" class="@yield('specialists-active')">Specialists</a></li>
                <li><a href="{{ route('shop') }}" class="@yield('shop-active')">Shop</a></li>
                <li><a href="{{ route('blog') }}" class="@yield('blog-active')">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="@yield('contact-active')">Contact</a></li>
            </ul>

            <div class="call-button">
            <span>+88018574-45897</span>
            <i class="fa-solid fa-phone"></i>
        </div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('profile') }}" class="icon-container d-none d-sm-flex" style="text-decoration: none; color: inherit;">
                    <i class="fas fa-user"></i>
                </a>
                
                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggler d-lg-none" type="button" id="offcanvasToggle" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation" onclick="console.log('Button clicked!')">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Bootstrap Offcanvas Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel" data-bs-backdrop="true" data-bs-scroll="false">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="@yield('home-active')">Home</a></li>
                <li><a href="{{ route('about') }}" class="@yield('about-active')">About Us</a></li>
                <li><a href="{{ route('services') }}" class="@yield('services-active')">Services</a></li>
                <li><a href="{{ route('specialists') }}" class="@yield('specialists-active')">Specialists</a></li>
                <li><a href="{{ route('shop') }}" class="@yield('shop-active')">Shop</a></li>
                <li><a href="{{ route('blog') }}" class="@yield('blog-active')">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="@yield('contact-active')">Contact</a></li>
            </ul>
            
            {{-- <div class="offcanvas-footer mt-auto">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <a href="{{ route('profile') }}" class="icon-container" style="text-decoration: none; color: inherit;">
                        <i class="fas fa-user"></i>
                    </a>
                    <span style="color: var(--text-color); font-weight: 500;">Profile</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-phone" style="color: var(--primary-color);"></i>
                    <span style="color: var(--text-color); font-weight: 500;">+88018574-45897</span>
                </div>
                <div class="d-flex align-items-center gap-2 mt-2">
                    <i class="fas fa-envelope" style="color: var(--primary-color);"></i>
                    <span style="color: var(--text-color); font-weight: 500;">example@gmail.com</span>
                </div>
            </div> --}}
        </div>
    </div>
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="site-footer py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-column logo-column d-flex flex-column align-items-start">
                        <div class="logo-placeholder bg-info bg-opacity-50 rounded-circle mb-3"></div>
                        <h3 class="logo-text text-white fs-4 mb-3">Logo</h3>
                        <p class="text-white small mb-2">511 SW 10th Ave 1206, Portland, OR,<br>United States</p>
                        <p class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">View Directions</a></p>
                        <p class="mb-2"><a href="tel:+8801857445897" class="footer-link text-white text-decoration-none small">+88018574-45897</a></p>
                        <p class="mb-0"><a href="mailto:example@gmail.com" class="footer-link text-white text-decoration-none small">example@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-column">
                        <h4 class="text-white fs-5 mb-3">View Directions</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="{{ route('about') }}" class="footer-link text-white text-decoration-none small">About Us</a></li>
                            <li class="mb-2"><a href="{{ route('services') }}" class="footer-link text-white text-decoration-none small">Services</a></li>
                            <li class="mb-2"><a href="{{ route('specialists') }}" class="footer-link text-white text-decoration-none small">Our Team</a></li>
                            <li class="mb-2"><a href="{{ route('shop') }}" class="footer-link text-white text-decoration-none small">Shop</a></li>
                            <li class="mb-0"><a href="{{ route('contact') }}" class="footer-link text-white text-decoration-none small">Contacts</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-column">
                        <h4 class="text-white fs-5 mb-3">Our Services</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">Cupping Therapy</a></li>
                            <li class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">Manual Therapy</a></li>
                            <li class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">Ultrasound Therapy</a></li>
                            <li class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">Sports Therapy</a></li>
                            <li class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">Laser Therapy</a></li>
                            <li class="mb-2"><a href="#" class="footer-link text-white text-decoration-none small">Hand Therapy</a></li>
                            <li class="mb-0"><a href="#" class="footer-link text-white text-decoration-none small">Chronic Pain Treatment</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-column subscribe-column">
                        <h4 class="text-white fs-5 mb-3">Subscribe to Our Newsletter</h4>
                        <form class="newsletter-form d-flex flex-column flex-sm-row gap-2 mb-3">
                            <input type="email" placeholder="Your email..." aria-label="Your email" 
                                   class="form-control bg-white bg-opacity-75 border-0 rounded-2 flex-grow-1">
                            <button type="submit" class="btn btn-light text-info fw-bold rounded-2 px-3">
                                Subscribe
                            </button>
                        </form>
                        <div class="social-icons d-flex gap-3">
                            <a href="#" class="social-icon d-inline-flex justify-content-center align-items-center bg-white text-info rounded-circle text-decoration-none" aria-label="Follow us on Facebook" title="Facebook">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="social-icon d-inline-flex justify-content-center align-items-center bg-white text-info rounded-circle text-decoration-none" aria-label="Follow us on Twitter" title="Twitter">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="social-icon d-inline-flex justify-content-center align-items-center bg-white text-info rounded-circle text-decoration-none" aria-label="Subscribe to our YouTube channel" title="YouTube">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Offcanvas Navigation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing offcanvas...');
            
            // Get elements
            const offcanvasElement = document.getElementById('mobileMenu');
            const toggleButton = document.getElementById('offcanvasToggle');
            
            if (offcanvasElement && toggleButton) {
                console.log('Offcanvas elements found');
                
                // Initialize offcanvas
                const bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement, {
                    backdrop: true,
                    keyboard: true,
                    scroll: false
                });
                
                // Manual toggle button handler
                toggleButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Toggle button clicked - showing offcanvas');
                    bsOffcanvas.show();
                });
                
                // Only close when navigation links are clicked
                const navLinks = document.querySelectorAll('#mobileMenu .nav-links a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        console.log('Nav link clicked - closing offcanvas after delay');
                        // Small delay to allow navigation to process
                        setTimeout(() => {
                            bsOffcanvas.hide();
                        }, 100);
                    });
                });
                
                // Debug events
                offcanvasElement.addEventListener('show.bs.offcanvas', function () {
                    console.log('Offcanvas showing...');
                });
                
                offcanvasElement.addEventListener('shown.bs.offcanvas', function () {
                    console.log('Offcanvas shown!');
                    
                    // Debug: Check if navigation links are present
                    const navLinks = document.querySelectorAll('#mobileMenu .nav-links');
                    const navItems = document.querySelectorAll('#mobileMenu .nav-links li');
                    const navAnchors = document.querySelectorAll('#mobileMenu .nav-links a');
                    
                    console.log('Nav links container:', navLinks.length);
                    console.log('Nav items:', navItems.length);
                    console.log('Nav anchors:', navAnchors.length);
                    
                    // Force visibility
                    navLinks.forEach(ul => {
                        ul.style.display = 'block';
                        ul.style.visibility = 'visible';
                        ul.style.opacity = '1';
                    });
                    
                    navItems.forEach(li => {
                        li.style.display = 'block';
                        li.style.visibility = 'visible';
                        li.style.opacity = '1';
                    });
                    
                    navAnchors.forEach(a => {
                        a.style.display = 'block';
                        a.style.visibility = 'visible';
                        a.style.opacity = '1';
                    });
                });
                
                offcanvasElement.addEventListener('hide.bs.offcanvas', function () {
                    console.log('Offcanvas hiding...');
                });
                
            } else {
                console.error('Offcanvas elements not found:', {
                    offcanvasElement: !!offcanvasElement,
                    toggleButton: !!toggleButton
                });
            }
        });
    </script>

    @yield('scripts')

</body>
</html>