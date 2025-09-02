@extends('frontend.layout.masterlayout')

@section('title', 'Chiropractic Care - Hospital Management')

@section('home-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('scripts')
<script>
// Testimonials Slider JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.testimonials-slider-track');
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.testimonials-pagination .dot');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    
    // Function to update slider position
    function updateSlider() {
        const translateX = -currentSlide * 25; // 25% per slide (100% / 4 slides)
        track.style.transform = `translateX(${translateX}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
        
        // Update navigation arrows visibility
        if (prevBtn) {
            prevBtn.style.display = currentSlide === 0 ? 'none' : 'flex';
        }
        
        if (nextBtn) {
            nextBtn.style.display = currentSlide === totalSlides - 1 ? 'none' : 'flex';
        }
    }
    
    // Next slide function
    function nextSlide() {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateSlider();
        }
    }
    
    // Previous slide function
    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
        }
    }
    
    // Event listeners for navigation buttons
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });
    
    // Auto-play functionality
    function autoPlayNext() {
        if (currentSlide < totalSlides - 1) {
            nextSlide();
        } else {
            // Reset to first slide when reaching the end
            currentSlide = 0;
            updateSlider();
        }
    }
    
    let autoplayInterval = setInterval(autoPlayNext, 5000); // Change slide every 5 seconds
    
    // Pause autoplay on hover
    const sliderContainer = document.querySelector('.testimonials-slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', () => {
            clearInterval(autoplayInterval);
        });
        
        sliderContainer.addEventListener('mouseleave', () => {
            autoplayInterval = setInterval(autoPlayNext, 5000);
        });
    }
    
    // Touch/swipe support for mobile
    let startX = 0;
    let isDragging = false;
    
    if (sliderContainer) {
        sliderContainer.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
            clearInterval(autoplayInterval);
        });
        
        sliderContainer.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
        });
        
        sliderContainer.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            isDragging = false;
            
            const endX = e.changedTouches[0].clientX;
            const diffX = startX - endX;
            
            // If swipe distance is greater than 50px
            if (Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    nextSlide(); // Swipe left - next slide
                } else {
                    prevSlide(); // Swipe right - previous slide
                }
            }
            
            // Resume autoplay
            autoplayInterval = setInterval(autoPlayNext, 5000);
        });
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            clearInterval(autoplayInterval);
            autoplayInterval = setInterval(autoPlayNext, 5000);
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            clearInterval(autoplayInterval);
            autoplayInterval = setInterval(autoPlayNext, 5000);
        }
    });
    
    // Initialize slider
    updateSlider();
});
</script>
@endsection

@section('content')
    <section class="hero-section">
        <div class="hero-content">
            <h1>CHIROPRACTIC</h1>
            <h2>CARE FOR THE FAMILY</h2>
            <p>Nunc accumsan dui vel lobortis pulvinar. Duis convallis odio ut dignissim faucibus. Sed sit amet urna
                dictum.</p>
            <a href="{{ route('booking') }}" class="book-btn">Book An Appointment →</a>
        </div>
        <div class="hero-image">
            <div class="circle-bg"></div>
            <img src="https://i.postimg.cc/14hjkcLq/image-removebg-preview.png" alt="Female Doctor" loading="lazy">
        </div>
    </section>

    <!-- Feature Bar Section Start -->
    <section class="feature-bar-section py-4 py-md-5">
        <div class="container">
            <div class="row g-4 g-lg-5 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card d-flex align-items-start gap-3">
                        <div class="feature-icon d-flex align-items-center justify-content-center rounded-3">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="feature-info">
                            <div class="feature-title fw-bold text-white mb-1">Expert Therapists</div>
                            <div class="feature-desc text-white-50">Our team of licensed and certified physiotherapists</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card d-flex align-items-start gap-3">
                        <div class="feature-icon d-flex align-items-center justify-content-center rounded-3">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="feature-info">
                            <div class="feature-title fw-bold text-white mb-1">Emergency Service</div>
                            <div class="feature-desc text-white-50">Our team of licensed and certified physiotherapists</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card d-flex align-items-start gap-3">
                        <div class="feature-icon d-flex align-items-center justify-content-center rounded-3">
                            <i class="fas fa-briefcase-medical"></i>
                        </div>
                        <div class="feature-info">
                            <div class="feature-title fw-bold text-white mb-1">Emergency Service</div>
                            <div class="feature-desc text-white-50">Our team of licensed and certified physiotherapists</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-section py-5">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <div class="aboutus-img">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/042/625/450/small_2x/physiotherapist-working-with-patient-in-clinic-closeup-a-modern-rehabilitation-physiotherapy-worker-with-senior-client-physical-therapist-stretching-patient-knee-photo.jpg"
                            alt="About Us" class="img-fluid rounded-4 shadow" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aboutus-content">
                        <span class="services-pill badge rounded-pill">About Us</span>
                        <h2 class="aboutus-title display-5 fw-bold mb-3">We Are The Best For<br>Physiotherapy</h2>
                        <p class="aboutus-desc text-muted mb-4">We understand that injuries and acute pain can happen unexpectedly. Our
                            emergency physiotherapy services are designed to provide prompt and effective care to help you
                            manage pain, prevent further injury, and start your recovery process as quickly as possible.</p>
                        <div class="aboutus-features row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="feature-item d-flex align-items-center gap-2">
                                    <i class="fas fa-apple-alt text-info"></i> 
                                    <span>Nutrition Strategies</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item d-flex align-items-center gap-2">
                                    <i class="fas fa-user-check text-info"></i> 
                                    <span>Be Pro Active</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item d-flex align-items-center gap-2">
                                    <i class="fas fa-dumbbell text-info"></i> 
                                    <span>Workout Routines</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item d-flex align-items-center gap-2">
                                    <i class="fas fa-comments text-info"></i> 
                                    <span>Support & Motivation</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('booking') }}" class="aboutus-btn btn btn-info btn-lg rounded-pill px-4">
                            Book An Appointment <span class="arrow ms-1">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-3">
                <div class="col-auto">
                    <span class="services-pill badge rounded-pill">Our Services</span>
                </div>
            </div>
            <h2 class="services-title display-5 fw-bold mb-4">We Provide The Best Services</h2>
            <div class="col-auto">
                <button class="services-viewall-btn btn btn-outline-info rounded-pill">View All Subjects <span class="arrow ms-1">→</span></button>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Cupping Therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-hands"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Manual Therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">chronic pain</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-hand-paper"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Hand therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-running"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Sports Therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Laser Therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-deaf"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Ultrasound Therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card h-100 border-0 shadow-sm position-relative">
                        <div class="card-body p-4">
                            <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                                <i class="fas fa-deaf"></i>
                            </div>
                            <h5 class="service-title card-title text-info mb-2">Ultrasound Therapy</h5>
                            <p class="service-desc card-text text-muted">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                                justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                                turpis</p>
                        </div>
                        <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="services-bottom-bar card bg-light border-0 p-4">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-icon d-flex align-items-center justify-content-center rounded-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div>
                                <h6 class="bottom-title fw-bold text-info mb-1">Ready to start your journey to recovery?</h6>
                                <p class="bottom-desc text-muted mb-0">We understand that injuries and acute pain can unexpectedly. Our
                                    emergency physiotherapy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                        <a href="{{ route('booking') }}" class="bottom-cta btn btn-info btn-lg rounded-pill px-4">
                            Book An Appointment <span class="arrow ms-1">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="unique-condition-section">
        <div class="container">
            <div class="section-header">
                <h2 class="unique-condition-title">WE TREAT YOUR UNIQUE CONDITION</h2>
                <div class="unique-condition-desc">Don't let pain stand in the way of doing what
                    you love. Consult with our expert physiotherapists to help you live a better life!</div>
                <div class="unique-condition-instruction">Click on the body part
                    that is causing you pain</div>
            </div>
            <div class="condition-image">
                <svg viewBox="0 0 200 400" width="200" height="400">
                    <!-- Blue Human Silhouette (simplified for clarity) -->
                    <g>
                        <ellipse cx="100" cy="60" rx="22" ry="30" fill="#00bfff" /> <!-- Head -->
                        <rect x="80" y="90" width="40" height="80" rx="20" fill="#00bfff" /> <!-- Torso -->
                        <rect x="60" y="90" width="18" height="70" rx="9" fill="#00bfff" /> <!-- Left Arm -->
                        <rect x="122" y="90" width="18" height="70" rx="9" fill="#00bfff" /> <!-- Right Arm -->
                        <rect x="90" y="170" width="12" height="60" rx="6" fill="#00bfff" /> <!-- Left Leg -->
                        <rect x="108" y="170" width="12" height="60" rx="6" fill="#00bfff" /> <!-- Right Leg -->
                    </g>
                    <!-- Pain Dots (clickable) -->
                    <a href="#" title="Head">
                        <circle cx="100" cy="60" r="7" fill="#ff9800" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Left Shoulder">
                        <circle cx="70" cy="100" r="7" fill="#7e57c2" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Right Shoulder">
                        <circle cx="130" cy="100" r="7" fill="#d32f2f" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Left Elbow">
                        <circle cx="60" cy="140" r="7" fill="#1976d2" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Right Elbow">
                        <circle cx="140" cy="140" r="7" fill="#388e3c" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Chest">
                        <circle cx="100" cy="120" r="7" fill="#00bcd4" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Left Knee">
                        <circle cx="96" cy="220" r="7" fill="#e91e63" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Right Knee">
                        <circle cx="114" cy="220" r="7" fill="#ffeb3b" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Left Ankle">
                        <circle cx="96" cy="260" r="7" fill="#3949ab" stroke="#fff" stroke-width="2" />
                    </a>
                    <a href="#" title="Right Ankle">
                        <circle cx="114" cy="260" r="7" fill="#212121" stroke="#fff" stroke-width="2" />
                    </a>
                </svg>
            </div>
        </div>
    </section>

    <section class="why-chiropractor-section">
        <div class="attention-section">
            <div class="container">
                <div class="attention-header">
                    <span class="attention-pill">Need Attention</span>
                    <h2>Where Do You Need Attention?</h2>
                    <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy
                        services are designed to provide prompt and effective care to help you manage.</p>
                </div>

                <div class="attention-grid">
                    <div class="attention-card">
                        <i class="fas fa-user-md"></i> <span>Neck Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-walking"></i> <span>Knee Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-hand-paper"></i> <span>Hand Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-child"></i> <span>Shoulder Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-shoe-prints"></i> <span>Ankle Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-dumbbell"></i> <span>Tricep Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-hand-rock"></i> <span>Elbow Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-shoe-prints"></i> <span>Foot Pain</span>
                    </div>
                    <div class="attention-card">
                        <i class="fas fa-running"></i> <span>Sports Injuries</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section py-5">
        <div class="container">
            <div class="team-header text-center text-lg-start mb-5">
                <span class="team-tag badge rounded-pill mb-3">Our Specialists</span>
                <h2 class="team-title display-5 fw-bold">Our Dedicated & Experienced<br>Therapist Team</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card text-center">
                        <div class="team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://img.freepik.com/premium-photo/male-female-doctor-portrait-healthcare-medical-staff-concept-confident-doctor-portrait_1108314-405796.jpg"
                                alt="Dr. Emily Brown" class="img-fluid rounded-3 shadow-sm">
                            <div class="team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="team-name text-info fw-bold mb-1">Dr. Emily Brown</h5>
                        <p class="team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card text-center">
                        <div class="team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://thumbs.dreamstime.com/z/studio-portrait-hispanic-brazilian-female-laboratory-scientist-lab-coat-wearing-mask-goggle-safety-cap-glove-260485549.jpg?w=576"
                                alt="Dr. Sarah Johnson" class="img-fluid rounded-3 shadow-sm">
                            <div class="team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="team-name text-info fw-bold mb-1">Dr. Sarah Johnson</h5>
                        <p class="team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card text-center">
                        <div class="team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small_2x/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                                alt="Dr. Michael Chen" class="img-fluid rounded-3 shadow-sm">
                            <div class="team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="team-name text-info fw-bold mb-1">Dr. Michael Chen</h5>
                        <p class="team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card text-center">
                        <div class="team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://img.freepik.com/free-photo/nurse-with-stethoscope-white-medical-uniform-white-protective-sterile-mask_179666-205.jpg?t=st=1717959581~exp=1717963181~hmac=976a532d8fc64986f6c29f5c8c8f71972111de503411342eaffa23645e02218d&w=1800"
                                alt="Dr. Lisa Wang" class="img-fluid rounded-3 shadow-sm">
                            <div class="team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="team-name text-info fw-bold mb-1">Dr. Lisa Wang</h5>
                        <p class="team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section py-5">
        <div class="container">
            <div class="testimonials-header text-center text-lg-start mb-5">
                <span class="testimonials-tag badge rounded-pill mb-3">Clients Review</span>
                <h2 class="testimonials-title display-5 fw-bold">What Our Client Say</h2>
            </div>
            
            <!-- Testimonials Slider Container -->
            <div class="testimonials-slider-container position-relative">
                <!-- Navigation Arrows -->
                <button class="testimonial-nav testimonial-prev position-absolute" type="button" aria-label="Previous testimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="testimonial-nav testimonial-next position-absolute" type="button" aria-label="Next testimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
                <!-- Slider Track -->
                <div class="testimonials-slider-track">
                    <div class="testimonial-slide">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "The physiotherapy team here is exceptional! Dr. Emily helped me recover from my knee injury faster than I expected. The personalized treatment plan and caring approach made all the difference."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Mr. Tom"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Tom Anderson</a>
                                                <div class="testimonial-location text-muted small">Baridhara, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "I've been coming here for chronic back pain treatment. The manual therapy sessions with Dr. Sarah have been life-changing. Professional, friendly staff and excellent facilities."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ms. Sarah"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Ms. Sarah Khan</a>
                                                <div class="testimonial-location text-muted small">Gulshan, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "Outstanding sports therapy services! As an athlete, I needed specialized care for my shoulder injury. The team's expertise got me back to competitive form quickly."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Dr. Ahmed"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Dr. Ahmed Rahman</a>
                                                <div class="testimonial-location text-muted small">Dhanmondi, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second slide -->
                    <div class="testimonial-slide">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "The cupping therapy here is amazing! I was skeptical at first, but the results speak for themselves. My chronic pain has significantly reduced after just a few sessions."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/women/55.jpg" alt="Mrs. Lisa"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mrs. Lisa Chen</a>
                                                <div class="testimonial-location text-muted small">Uttara, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "Excellent hand therapy services! After my wrist surgery, the rehabilitation program here helped me regain full functionality. Highly recommend their specialized treatments."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Mr. Rahman"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Rahman Ali</a>
                                                <div class="testimonial-location text-muted small">Banani, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "The laser therapy treatment exceeded my expectations. Modern equipment, knowledgeable staff, and a comfortable environment. My recovery time was cut in half!"
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Ms. Fatima"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Ms. Fatima Begum</a>
                                                <div class="testimonial-location text-muted small">Mirpur, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Third slide -->
                    <div class="testimonial-slide">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "Incredible ultrasound therapy experience! The advanced equipment and skilled technicians made my treatment comfortable and effective. I felt significant improvement after just three sessions."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Dr. Rashida"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Dr. Rashida Sultana</a>
                                                <div class="testimonial-location text-muted small">Mohammadpur, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "The emergency physiotherapy service saved my weekend! I injured my ankle during a football match and received immediate, professional care. Quick response and excellent treatment."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="Mr. Karim"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Karim Hassan</a>
                                                <div class="testimonial-location text-muted small">Wari, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "Professional chronic pain management program that changed my quality of life. The comprehensive approach addressing both physical and lifestyle factors was exactly what I needed."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/women/39.jpg" alt="Mrs. Nasreen"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mrs. Nasreen Akter</a>
                                                <div class="testimonial-location text-muted small">Tejgaon, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Fourth slide -->
                    <div class="testimonial-slide">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "The pediatric physiotherapy services here are outstanding! My daughter's motor skills improved dramatically with their specialized child-friendly approach and caring staff."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Mr. Hasan"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Hasan Mahmud</a>
                                                <div class="testimonial-location text-muted small">Panthapath, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "Comprehensive rehabilitation program following my knee surgery. The progressive treatment plan and continuous monitoring ensured optimal recovery. Highly professional team!"
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/women/47.jpg" alt="Prof. Rehana"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Prof. Rehana Khatun</a>
                                                <div class="testimonial-location text-muted small">Ramna, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="testimonial-card card h-100 border-2 shadow-sm">
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="testimonial-stars text-warning mb-3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-text text-muted mb-4 flex-grow-1">
                                            "Workplace ergonomics consultation and therapy sessions helped eliminate my repetitive strain injury. The preventive care approach and educational guidance were invaluable."
                                        </div>
                                        <div class="testimonial-user d-flex align-items-center gap-3">
                                            <img src="https://randomuser.me/api/portraits/men/61.jpg" alt="Mr. Rafi"
                                                class="testimonial-avatar rounded-circle">
                                            <div>
                                                <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Rafi Ahmed</a>
                                                <div class="testimonial-location text-muted small">Motijheel, Dhaka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slider Indicators -->
            <div class="testimonials-pagination d-flex justify-content-center gap-2 mt-4">
                <button class="dot active" data-slide="0" aria-label="Go to slide 1"></button>
                <button class="dot" data-slide="1" aria-label="Go to slide 2"></button>
                <button class="dot" data-slide="2" aria-label="Go to slide 3"></button>
                <button class="dot" data-slide="3" aria-label="Go to slide 4"></button>
            </div>
        </div>
    </section>

    <section class="blog-section py-5">
        <div class="container">
            <div class="blog-header text-center mb-5">
                <span class="blog-tag badge bg-info text-white rounded-pill fw-bold text-uppercase mb-3">News & Blog</span>
                <h2 class="display-5 fw-bold text-dark">Our Latest Insights & Updates</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post card h-100 border-0 shadow-sm overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="https://lirp.cdn-website.com/83ac98e3/dms3rep/multi/opt/benefits-of-physiotherapy-01-1920w.jpg"
                                alt="Physiotherapy benefits" class="img-fluid" loading="lazy">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title text-dark mb-3 fw-semibold">10 essential benefits of regular physiotherapy</h5>
                            <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill">
                                Read more <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post card h-100 border-0 shadow-sm overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="https://www.minsterlaw.co.uk/wp-content/uploads/2021/05/PI01-scaled.jpg"
                                alt="Choosing a physiotherapist" class="img-fluid" loading="lazy">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title text-dark mb-3 fw-semibold">How to choose the right physiotherapist for you</h5>
                            <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill">
                                Read more <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post card h-100 border-0 shadow-sm overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="https://www.unitekcollege.edu/wp-content/uploads/2024/06/shutterstock_2206610103-scaled.jpg"
                                alt="Correct posture importance" class="img-fluid" loading="lazy">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title text-dark mb-3 fw-semibold">Importance of correct posture and how to improve it</h5>
                            <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill">
                                Read more <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection