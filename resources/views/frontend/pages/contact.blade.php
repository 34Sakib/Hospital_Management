@extends('frontend.layout.masterlayout')

@section('title', 'Contact Us - Hospital Management')

@section('contact-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')
<section class="about-section py-3 py-sm-4 py-md-5 py-lg-6">
    <div class="container">
        <div class="row align-items-center g-3 g-sm-4 g-lg-5">
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="about-content text-center text-lg-start">
                    <span class="contact-pill badge rounded-pill mb-3">Contact Us</span>
                    <h1 class="about-title h2 fw-bold mb-3 mb-md-4">Contact Us Easily Online,<br class="d-none d-md-block">by Phone or by Dropping In</h1>
                    <div class="about-btn-row d-flex flex-column flex-sm-row flex-md-row gap-2 gap-sm-3 justify-content-center justify-content-lg-start">
                        <a href="{{route('booking')}}" class="about-btn about-btn-main btn btn-info btn-lg rounded-3 d-flex align-items-center gap-2">
                            Book An Appointment <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="tel:+8801857445897" class="about-btn about-btn-call btn btn-outline-info btn-lg rounded-3 d-flex align-items-center gap-2">
                            +88018574-45897 <i class="fa fa-phone"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about-image d-flex justify-content-center justify-content-lg-end">
                    <img src="https://i.postimg.cc/qvrfzNTp/image.png" alt="Contact Hero" class="img-fluid rounded-4 shadow" style="max-width: 500px; height: auto; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info + Map Section -->
<section class="contact-map-section py-5">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-stretch">
            <div class="col-lg-6">
                <div class="contact-info-col h-100 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2 class="contact-map-title h3 fw-bold mb-4">Contact Information</h2>
                    <p class="contact-map-desc text-muted lead mb-4">Learn more about our clinic and doctors and why they are trusted by so many families in our community.</p>
                    <div class="contact-map-details d-flex flex-column gap-3">
                        <div class="text-muted">
                            <strong class="text-info">Address:</strong><br>
                            Dhaka, Bangladesh<br>
                            Apple Valley, MN 55124
                        </div>
                        <div class="text-muted">
                            <strong class="text-info">Open:</strong><br>
                            Monday – Sunday,<br>
                            9am – 7pm EST
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-map-embed h-100">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9021397204415!2d90.39109741498116!3d23.750885984589207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b896b3b4a63b%3A0x123456789abcdef!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1594274197294!5m2!1sen!2sbd"
                        width="100%" height="320" style="border:0; border-radius:18px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-4 shadow-sm"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form + Image Section -->
<section class="contact-form-section py-5">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="contact-form-img d-flex justify-content-center justify-content-lg-start">
                    <img src="https://i.postimg.cc/yN0NFzRH/image.png" alt="Contact Physiotherapy" class="img-fluid rounded-4 shadow" style="max-width: 500px; height: auto; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="contact-form-block card border-0 shadow-lg p-4 p-lg-5">
                    <h2 class="contact-form-title h2 fw-bold mb-3">Contact Information</h2>
                    <p class="contact-form-desc text-muted mb-4">If you have any questions, you can contact us. Please, fill out the form below.</p>
                    <form class="contact-form">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-name" class="form-label">Your Name</label>
                                    <input id="contact-name" type="text" class="form-control form-input" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-email" class="form-label">Your Email</label>
                                    <input id="contact-email" type="email" class="form-control form-input" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact-message" class="form-label">Your Message</label>
                            <textarea id="contact-message" class="form-control form-textarea" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="form-submit btn btn-info btn-lg rounded-3 fw-semibold">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection