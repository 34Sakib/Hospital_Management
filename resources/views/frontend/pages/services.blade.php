@extends('frontend.layout.masterlayout')

@section('title', 'Our Services - Hospital Management')

@section('services-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}

@endsection

@section('scripts')
<script>
// Testimonials Slider Functionality
let currentSlideIndex = 0;
const totalSlides = 4;

function moveSlide(direction) {
    const track = document.getElementById('testimonialsTrack');
    const dots = document.querySelectorAll('.testimonials-pagination .dot');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    
    currentSlideIndex += direction;
    
    // Prevent going beyond bounds
    if (currentSlideIndex >= totalSlides) {
        currentSlideIndex = totalSlides - 1;
        return;
    }
    
    if (currentSlideIndex < 0) {
        currentSlideIndex = 0;
        return;
    }
    
    // Move the slider track
    const translateX = -currentSlideIndex * 25; // 25% for 4 slides
    track.style.transform = `translateX(${translateX}%)`;
    
    // Update pagination dots
    dots.forEach((dot, index) => {
        if (index === currentSlideIndex) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
    
    // Hide/show navigation arrows
    if (currentSlideIndex === 0) {
        prevBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'flex';
    }
    
    if (currentSlideIndex === totalSlides - 1) {
        nextBtn.style.display = 'none';
    } else {
        nextBtn.style.display = 'flex';
    }
}

function currentSlide(slideIndex) {
    const track = document.getElementById('testimonialsTrack');
    const dots = document.querySelectorAll('.testimonials-pagination .dot');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    
    currentSlideIndex = slideIndex - 1;
    
    // Move the slider track
    const translateX = -currentSlideIndex * 25; // 25% for 4 slides
    track.style.transform = `translateX(${translateX}%)`;
    
    // Update pagination dots
    dots.forEach((dot, index) => {
        if (index === currentSlideIndex) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
    
    // Hide/show navigation arrows
    if (currentSlideIndex === 0) {
        prevBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'flex';
    }
    
    if (currentSlideIndex === totalSlides - 1) {
        nextBtn.style.display = 'none';
    } else {
        nextBtn.style.display = 'flex';
    }
}

// Touch/swipe support for mobile
let startX = 0;
let endX = 0;

function handleTouchStart(e) {
    startX = e.touches[0].clientX;
}

function handleTouchMove(e) {
    endX = e.touches[0].clientX;
}

function handleTouchEnd() {
    if (startX - endX > 50) {
        // Swipe left - next slide
        moveSlide(1);
    } else if (endX - startX > 50) {
        // Swipe right - previous slide
        moveSlide(-1);
    }
}

// Add touch event listeners when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    const sliderContainer = document.querySelector('.testimonials-slider-container');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    
    // Initialize arrow visibility
    if (prevBtn) prevBtn.style.display = 'none'; // Hide left arrow on first slide
    
    if (sliderContainer) {
        sliderContainer.addEventListener('touchstart', handleTouchStart, false);
        sliderContainer.addEventListener('touchmove', handleTouchMove, false);
        sliderContainer.addEventListener('touchend', handleTouchEnd, false);
    }
});
</script>
@endsection

@section('content')


<section class="services-section py-5">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6">
                <div class="services-hero-img-wrap">
                    <img src="https://www.nurseregistry.com/wp-content/uploads/2019/01/nurses-in-hospital-setting.jpg" 
                         alt="Exercise Services" class="img-fluid rounded-4 shadow">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-hero-content">
                    <span class="services-hero-pill badge rounded-pill mb-3">Our Services</span>
                    <h1 class="services-hero-title display-4 fw-bold mb-3">We Provide The Best Services</h1>
                    <p class="services-hero-desc text-muted mb-0 fs-5 fs-md-4 lh-base">World-class rehabilitation solutions and individualized recovery plans, from acute care to ongoing outpatient treatment and beyond.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section2 py-5">
    <div class="container">
        <div class="row g-3 g-md-4">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Cupping Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <a href="{{ route('serviceinfo') }}" class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-hands"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Manual Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Chronic Pain</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-hand-paper"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Hand Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-running"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Sports Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Laser Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-deaf"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Ultrasound Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-card card h-100 border-0 shadow-sm position-relative">
                    <div class="card-body p-4">
                        <div class="service-icon d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <i class="fas fa-deaf"></i>
                        </div>
                        <h5 class="service-title card-title text-info mb-2">Ultrasound Therapy</h5>
                        <p class="service-desc card-text text-muted small lh-sm">Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat
                            justo neque. Varius nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis
                            turpis</p>
                    </div>
                    <button class="service-arrow btn btn-outline-info rounded-circle position-absolute">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="services-bottom-bar card bg-light border-0 p-3 p-md-4 mt-5">
            <div class="row align-items-center g-3">
                <div class="col-12 col-lg-8">
                    <div class="d-flex align-items-start align-items-md-center gap-3 flex-column flex-md-row text-center text-md-start">
                        <div class="bottom-icon d-flex align-items-center justify-content-center rounded-3 mx-auto mx-md-0">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div>
                            <h6 class="bottom-title fw-bold text-info mb-1 fs-6 fs-md-5">Ready to start your journey to recovery?</h6>
                            <p class="bottom-desc text-muted mb-0 fs-6 fs-md-5 lh-sm">We understand that injuries and acute pain can unexpectedly. Our
                                emergency physiotherapy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('booking') }}" class="book-btn btn btn-info btn-lg rounded-pill px-4 w-100 w-md-auto">
                        Book An Appointment <span class="arrow ms-1">→</span>
                    </a>
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
        
        <!-- Testimonials Slider -->
        <div class="testimonials-slider-container position-relative">
            <div class="testimonials-slider-track" id="testimonialsTrack">
                <!-- Slide 1 -->
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat justo neque. Varius
                                        nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis turpis.Lorem ipsum dolor
                                        sit amet consectetur. Elementum egestas sed consequat justo neque.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Mr. Tom"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Tom</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat justo neque. Varius
                                        nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis turpis.Lorem ipsum dolor
                                        sit amet consectetur. Elementum egestas sed consequat justo neque.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ms. Sarah"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Ms. Sarah</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Lorem ipsum dolor sit amet consectetur. Elementum egestas sed consequat justo neque. Varius
                                        nullam adipiscing proin dapibus integer viverra eu. Quis nibh convallis turpis.Lorem ipsum dolor
                                        sit amet consectetur. Elementum egestas sed consequat justo neque.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Dr. Ahmed"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Dr. Ahmed</a>
                                            <div class="testimonial-location text-muted small">Dhanmondi, Dhaka</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Excellent service and professional staff. The treatment was very effective and I felt much better after just a few sessions. Highly recommend this hospital for anyone seeking quality healthcare.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Ms. Lisa"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Ms. Lisa</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Amazing experience with the medical team. They provided comprehensive care and made sure I understood every step of my treatment. The facilities are modern and clean.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Mr. John"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. John</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Outstanding healthcare services! The doctors are very knowledgeable and caring. I received excellent treatment and the recovery process was smooth. Thank you for the great care.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/women/38.jpg" alt="Dr. Maria"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Dr. Maria</a>
                                            <div class="testimonial-location text-muted small">Mirpur, Dhaka</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        The physiotherapy sessions were incredibly helpful. The therapists are skilled and patient, explaining each exercise clearly. I've seen significant improvement in my mobility and pain levels.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="Mr. Rahman"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Rahman</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Professional and caring medical staff. The cupping therapy treatment exceeded my expectations. The environment is peaceful and the equipment is state-of-the-art. Will definitely return.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/women/52.jpg" alt="Mrs. Fatima"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mrs. Fatima</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        The manual therapy sessions have been life-changing. My chronic back pain has significantly reduced and I can now perform daily activities without discomfort. Excellent medical care!
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Mr. Karim"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Karim</a>
                                            <div class="testimonial-location text-muted small">Tejgaon, Dhaka</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 -->
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        The laser therapy treatment was remarkable. The staff explained everything thoroughly and made me feel comfortable throughout the process. Highly professional and effective treatment.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Ms. Rashida"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Ms. Rashida</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Sports therapy here helped me recover from my injury faster than expected. The personalized treatment plan and dedicated support made all the difference. Truly grateful for their expertise.
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Mr. Hassan"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Mr. Hassan</a>
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
                                    <div class="testimonial-text text-muted mb-4 flex-grow-1 fs-6 lh-sm">
                                        Hand therapy sessions were exactly what I needed after my accident. The therapists are compassionate and highly skilled. My hand function has improved dramatically. Thank you!
                                    </div>
                                    <div class="testimonial-user d-flex align-items-center gap-3">
                                        <img src="https://randomuser.me/api/portraits/women/29.jpg" alt="Dr. Nasreen"
                                            class="testimonial-avatar rounded-circle">
                                        <div>
                                            <a href="#" class="testimonial-name text-decoration-none fw-semibold text-info">Dr. Nasreen</a>
                                            <div class="testimonial-location text-muted small">Shantinagar, Dhaka</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button class="testimonial-nav testimonial-prev position-absolute" onclick="moveSlide(-1)">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="testimonial-nav testimonial-next position-absolute" onclick="moveSlide(1)">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <!-- Pagination Dots -->
        <div class="testimonials-pagination d-flex justify-content-center gap-2 mt-4">
            <button class="dot active" onclick="currentSlide(1)"></button>
            <button class="dot" onclick="currentSlide(2)"></button>
            <button class="dot" onclick="currentSlide(3)"></button>
            <button class="dot" onclick="currentSlide(4)"></button>
        </div>
    </div>
</section>



@endsection