@extends('frontend.layout.masterlayout')

@section('title', 'Our Specialists - Hospital Management')

@section('specialists-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')

<section class="specialists-services-section py-5">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6 order-lg-2">
                <div class="specialists-services-content">
                    <span class="specialists-services-pill badge rounded-pill mb-3">Our Specialists</span>
                    <h2 class="specialists-services-title display-4 fw-bold mb-3">Our Dedicated & Experienced<br>Therapist Team</h2>
                    <p class="specialists-services-desc text-muted mb-0">
                        World-class rehabilitation solutions and individualized recovery plans,
                        from acute care to ongoing outpatient treatment and beyond.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="specialists-services-img">
                    <img src="https://i.postimg.cc/44FzPQc8/image.png" alt="Exercise Services" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="specialists-team-section py-5">
    <div class="container">
        <div class="specialists-team-header text-center text-lg-start mb-5">
            <span class="specialists-team-tag badge rounded-pill mb-3">Our Specialists</span>
            <h2 class="specialists-team-title display-5 fw-bold">Our Dedicated & Experienced<br>Therapist Team</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://img.freepik.com/premium-photo/male-female-doctor-portrait-healthcare-medical-staff-concept-confident-doctor-portrait_1108314-405796.jpg"
                            alt="Dr. Emily Brown" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. Emily Brown</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://thumbs.dreamstime.com/z/studio-portrait-hispanic-brazilian-female-laboratory-scientist-lab-coat-wearing-mask-goggle-safety-cap-glove-260485549.jpg?w=576"
                            alt="Dr. Sarah Johnson" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. Sarah Johnson</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small_2x/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                            alt="Dr. Michael Chen" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. Michael Chen</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://img.freepik.com/free-photo/nurse-with-stethoscope-white-medical-uniform-white-protective-sterile-mask_179666-205.jpg?t=st=1717959581~exp=1717963181~hmac=976a532d8fc64986f6c29f5c8c8f71972111de503411342eaffa23645e02218d&w=1800"
                            alt="Dr. Lisa Wang" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <a href="{{ route('doctor-profile', ['id' => 1]) }}" class="text-decoration-none">
                        <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. Lisa Wang</h5>
                    </a>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://img.freepik.com/premium-photo/male-female-doctor-portrait-healthcare-medical-staff-concept-confident-doctor-portrait_1108314-405796.jpg"
                            alt="Dr. James Wilson" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. James Wilson</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://thumbs.dreamstime.com/z/studio-portrait-hispanic-brazilian-female-laboratory-scientist-lab-coat-wearing-mask-goggle-safety-cap-glove-260485549.jpg?w=576"
                            alt="Dr. Maria Garcia" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. Maria Garcia</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small_2x/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                            alt="Dr. David Kim" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. David Kim</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="specialists-team-card text-center">
                    <div class="specialists-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                        <img src="https://img.freepik.com/free-photo/nurse-with-stethoscope-white-medical-uniform-white-protective-sterile-mask_179666-205.jpg?t=st=1717959581~exp=1717963181~hmac=976a532d8fc64986f6c29f5c8c8f71972111de503411342eaffa23645e02218d&w=1800"
                            alt="Dr. Jennifer Lee" class="img-fluid rounded-3 shadow-sm">
                        <div class="specialists-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                            <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                            <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                    <h5 class="specialists-team-name text-info fw-bold mb-1">Dr. Jennifer Lee</h5>
                    <p class="specialists-team-role text-muted mb-0">senior physiotherapist</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="specialists-booking-section py-5">
    <div class="container">
        <div class="specialists-booking-container card border-0 shadow-lg p-0 overflow-hidden">
            <div class="row g-0 align-items-center">
                <div class="col-lg-5">
                    <div class="specialists-booking-image p-4">
                        <img src="https://i.postimg.cc/yN0NFzRH/image.png" alt="booking-image" class="img-fluid rounded-4 shadow-sm">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="specialists-booking-content p-4 p-lg-5">
                        <div class="specialists-book-appointment-tag badge rounded-pill mb-3">Book Your Appointment</div>
                        <h3 class="specialists-booking-title fw-bold mb-3">BOOK YOUR CONSULTATION</h3>
                        <p class="specialists-booking-desc text-muted mb-4">Enter your details below and we will follow up with you to book your appointment.</p>
                        <form class="specialists-booking-form">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="specialists-form-group">
                                        <label for="services" class="form-label">Services</label>
                                        <select id="services" name="services" class="form-select">
                                            <option value="">Services Name</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="specialists-form-group">
                                        <label for="doctor" class="form-label">Doctor</label>
                                        <select id="doctor" name="doctor" class="form-select">
                                            <option value="">Doctor Name</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="specialists-form-group">
                                        <label for="your-name" class="form-label">Your Name*</label>
                                        <input type="text" id="your-name" name="your-name" placeholder="Your Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="specialists-form-group">
                                        <label for="your-phone" class="form-label">Your Phone</label>
                                        <input type="text" id="your-phone" name="your-phone" placeholder="Your Phone Number" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="specialists-form-group">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" placeholder="Select Date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="specialists-form-group">
                                        <label for="time" class="form-label">Time</label>
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <select id="time-start" name="time-start" class="form-select">
                                                    <option value="">3:00</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select id="time-end" name="time-end" class="form-select">
                                                    <option value="">4:00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="specialists-booking-btn btn btn-info btn-lg rounded-pill px-4">
                                Book Your Appointment <i class="fa-solid fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection