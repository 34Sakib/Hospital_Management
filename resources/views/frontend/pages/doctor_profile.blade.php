@extends('frontend.layout.masterlayout')

@section('title', 'Dr. Emily Brown - Doctor Profile - Hospital Management')

@section('specialists-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection


@section('content')
<!-- Doctor Profile Section -->
<section class="doctor-profile-section py-4">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-start justify-content-center">
            <!-- Doctor Profile Info -->
            <div class="col-lg-5 order-lg-1 order-2">
                <div class="doctor-profile-info card border-0 shadow-lg p-4 text-center">
                    <h2 class="h3 fw-semibold mb-3">Dr. Emily Brown</h2>
                    <div class="contact text-start text-muted mb-4">
                        Phone: +8801555-548965<br>
                        Office: +8801555-548965<br>
                        Email: example@gmail.com
                    </div>
                    <div class="social d-flex justify-content-center gap-3">
                        <a href="#" class="text-decoration-none"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Doctor Profile Picture -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="doctor-profile-pic position-relative d-flex justify-content-center">
                    <img src="https://img.freepik.com/free-photo/nurse-with-stethoscope-white-medical-uniform-white-protective-sterile-mask_179666-205.jpg?t=st=1717959581~exp=1717963181~hmac=976a532d8fc64986f6c29f5c8c8f71972111de503411342eaffa23645e02218d&w=1800"
                        alt="Dr. Emily Brown" class="img-fluid rounded-4 shadow">
                    <span class="heart position-absolute"><i class="fa fa-heart"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Main Content -->
<section class="doctor-main-content py-4">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-start">
            <!-- Booking Form -->
            <div class="col-lg-5 order-lg-1 order-2">
                <div class="doctor-booking-form card border-0 shadow-lg p-4">
                    <h3 class="h4 fw-semibold mb-4">Book a Consultation:</h3>
                    <form>
                        <div class="mb-3">
                            <label for="services" class="form-label">Services</label>
                            <select id="services" class="form-control">
                                <option>Services Name</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="patient-name" class="form-label">Your Name</label>
                            <input id="patient-name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="patient-phone" class="form-label">Your Phone</label>
                            <input id="patient-phone" type="text" class="form-control" placeholder="Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="appointment-date" class="form-label">Date</label>
                            <input id="appointment-date" type="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="appointment-time" class="form-label">Time</label>
                            <select id="appointment-time" class="form-control">
                                <option>03:00</option>
                                <option>04:00</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info btn-lg rounded-3 fw-semibold w-100">Book Your Appointment →</button>
                    </form>
                </div>
            </div>
            
            <!-- Biography Section -->
            <div class="col-lg-7 order-lg-2 order-1">
                <div class="doctor-bio-section card border-0 shadow-lg p-4">
                    <h2 class="h4 fw-semibold mb-4">Short Biography</h2>
                    <p class="text-muted mb-4">
                        It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
                        all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day
                        however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of
                        Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild
                        Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven
                        versalia, put her initial into the belt and made herself on the way. When she reached the first hills of
                        the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the
                        headline of Alphabet Village and the subline of her own road, the Line Lane.
                    </p>
                    
                    <div class="doctor-edu-exp">
                        <h3 class="h5 fw-semibold mb-3">Education & Experience</h3>
                        <div class="table-responsive mb-4">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="fw-medium text-info">Education</td>
                                        <td class="text-muted">University of Virginia, M.D. of Medicine</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium text-info">Board certification</td>
                                        <td class="text-muted">National Commission on Certification of Physician Assistants</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium text-info">Field of expertise</td>
                                        <td class="text-muted">University of Virginia, M.D. of Medicine</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium text-info">Years of practice</td>
                                        <td class="text-muted">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="doctor-working-shifts alert alert-info border-start border-info border-4 bg-light">
                        <b class="d-block mb-2">Working Shifts</b>
                        Mon-Fri: 10am-8pm<br>
                        Sat-Sun: Off day
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection