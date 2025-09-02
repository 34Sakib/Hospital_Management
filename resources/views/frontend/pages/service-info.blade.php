@extends('frontend.layout.masterlayout')

@section('title', 'Cupping Therapy - Service Details - Hospital Management')

@section('services-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection


@section('content')
<!-- Service Main Content -->
<section class="service-main py-5">
    <div class="container-fluid" style="max-width: 1200px;">
        <div class="row g-4 g-lg-5">
            <!-- Service Sidebar -->
            <div class="col-lg-3">
                <aside class="service-sidebar">
                    <h4>Our Services</h4>
                    <ul class="service-list">
                        <li class="active">Cupping Therapy <i class="fa fa-chevron-right"></i></li>
                        <li>Manual Therapy <i class="fa fa-chevron-right"></i></li>
                        <li>Chronic Pain <i class="fa fa-chevron-right"></i></li>
                        <li>Sports Injury <i class="fa fa-chevron-right"></i></li>
                        <li>Electro Therapy <i class="fa fa-chevron-right"></i></li>
                        <li>Laser Therapy <i class="fa fa-chevron-right"></i></li>
                        <li>Ultrasound Therapy <i class="fa fa-chevron-right"></i></li>
                        <li>Shockwave Therapy <i class="fa fa-chevron-right"></i></li>
                    </ul>
                </aside>
            </div>
            
            <!-- Service Content -->
            <div class="col-lg-9">
                <section class="service-content">
                    <h1 class="service-title">Cupping Therapy</h1>
                    <img class="service-hero-img img-fluid" src="https://i.postimg.cc/nzzV3pn9/image.png" alt="Cupping Therapy">
                    <h2 class="service-section-header">About Cupping Therapy Services</h2>
                    <p class="service-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis minus natus nulla numquam voluptatibus
                        maiores. Quam voluptatibus, voluptatum doloremque, totam, facilis molestiae laborum ad voluptatem
                        distinctio suscipit? Quisquam, voluptates, maxime.
                    </p>
                    <h3 class="service-list-header">What is Cupping Therapy?</h3>
                    <ul class="service-list-bullets">
                        <li>Learn about pain and its cause.</li>
                        <li>Learn about pain and its cause immediate.</li>
                        <li>Learn about pain and its cause immediate.</li>
                        <li>Learn about pain and its cause immediate.</li>
                        <li>Learn about pain and its cause immediate.</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section class="service-info-booking-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12" style="max-width: 1200px;">
                <div class="service-info-booking-container card border-0 shadow-lg p-0 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6">
                            <div class="service-info-booking-image p-4">
                                <img src="https://i.postimg.cc/yN0NFzRH/image.png" alt="Book Appointment" class="img-fluid rounded-4 shadow-sm">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-info-booking-content p-4 p-lg-5">
                                <span class="service-book-appointment-tag badge rounded-pill mb-3">Book Your Appointment</span>
                                <h2 class="service-booking-title h2 fw-bold mb-3">BOOK YOUR CONSULTATION</h2>
                                <p class="service-booking-desc text-muted mb-4">Enter your details below and we will follow up with you to book your appointment.</p>
                                <form class="service-booking-form">
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <div class="service-form-group">
                                                <label for="services" class="form-label">Services</label>
                                                <select id="services" name="services" class="form-control service-form-group">
                                                    <option value="">Services Name</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-form-group">
                                                <label for="doctor" class="form-label">Doctor</label>
                                                <select id="doctor" name="doctor" class="form-control service-form-group">
                                                    <option value="">Doctor Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <div class="service-form-group">
                                                <label for="your-name" class="form-label">Your Name*</label>
                                                <input type="text" id="your-name" name="your-name" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-form-group">
                                                <label for="your-phone" class="form-label">Your Phone</label>
                                                <input type="text" id="your-phone" name="your-phone" class="form-control" placeholder="Your Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <div class="service-form-group">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date" id="date" name="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-form-group">
                                                <label for="time" class="form-label">Time</label>
                                                <div class="service-time-selectors">
                                                    <select id="time-start" name="time-start" class="form-control">
                                                        <option value="">3:00</option>
                                                    </select>
                                                    <select id="time-end" name="time-end" class="form-control">
                                                        <option value="">4:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="service-booking-btn btn btn-info btn-lg rounded-3 fw-semibold">Book Your Appointment <i class="fa-solid fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="service-info-team-section py-5">
    <div class="container">
        <div class="service-info-team-header text-center text-lg-start mb-5">
            <span class="service-info-team-tag badge rounded-pill mb-3">Our Specialists</span>
            <h2 class="service-info-team-title h2 fw-bold">Our Dedicated & Experienced<br>Therapist Team</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-info-team-card card border-0 shadow-sm h-100 text-center">
                    <div class="service-info-team-photo-bg">
                        <img src="https://img.freepik.com/premium-photo/male-female-doctor-portrait-healthcare-medical-staff-concept-confident-doctor-portrait_1108314-405796.jpg"
                            alt="Dr. Emily Brown" class="img-fluid">
                        <div class="service-info-team-contact">
                            <a href="#" class="text-decoration-none"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="service-info-team-name">Dr. Emily Brown</div>
                        <div class="service-info-team-role">senior physiotherapist</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-info-team-card card border-0 shadow-sm h-100 text-center">
                    <div class="service-info-team-photo-bg">
                        <img src="https://thumbs.dreamstime.com/z/studio-portrait-hispanic-brazilian-female-laboratory-scientist-lab-coat-wearing-mask-goggle-safety-cap-glove-260485549.jpg?w=576"
                            alt="Dr. Sarah Johnson" class="img-fluid">
                        <div class="service-info-team-contact">
                            <a href="#" class="text-decoration-none"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="service-info-team-name">Dr. Sarah Johnson</div>
                        <div class="service-info-team-role">senior physiotherapist</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-info-team-card card border-0 shadow-sm h-100 text-center">
                    <div class="service-info-team-photo-bg">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small_2x/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                            alt="Dr. Michael Chen" class="img-fluid">
                        <div class="service-info-team-contact">
                            <a href="#" class="text-decoration-none"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="service-info-team-name">Dr. Michael Chen</div>
                        <div class="service-info-team-role">senior physiotherapist</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-info-team-card card border-0 shadow-sm h-100 text-center">
                    <div class="service-info-team-photo-bg">
                        <img src="https://img.freepik.com/free-photo/nurse-with-stethoscope-white-medical-uniform-white-protective-sterile-mask_179666-205.jpg?t=st=1717959581~exp=1717963181~hmac=976a532d8fc64986f6c29f5c8c8f71972111de503411342eaffa23645e02218d&w=1800"
                            alt="Dr. Lisa Wang" class="img-fluid">
                        <div class="service-info-team-contact">
                            <a href="#" class="text-decoration-none"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="service-info-team-name">Dr. Lisa Wang</div>
                        <div class="service-info-team-role">senior physiotherapist</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection