@extends('frontend.layout.masterlayout')

@section('title', 'About Us - Hospital Management')

@section('about-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')
    <section class="about-services-section">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <div class="about-services-img">
                        <img src="https://i.postimg.cc/YSb49tfX/image.png" alt="Exercise Services" class="img-fluid rounded-4 shadow">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-services-content">
                        <span class="about-services-pill badge rounded-pill mb-3">Our Services</span>
                        <h2 class="about-services-title display-5 fw-bold mb-3">We Provide The Best<br>Services</h2>
                        <p class="about-services-desc text-muted mb-0">
                            World-class rehabilitation solutions and individualized recovery plans,
                            from acute care to ongoing outpatient treatment and beyond.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-main-section">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-6">
                    <div class="about-main-content">
                        <h1 class="about-main-heading display-4 fw-bold mb-4">How We Get You Better</h1>
                        <p class="about-main-description text-muted mb-0">
                            Lorem ipsum dolor sit amet consectetur. Duis mattis penatibus tellus urna et eget. Nec ornare enim
                            ornare ligula elit a nibh laoreet diam. Auctor at nisl fermentum tellus morbi sed pretium quam
                            neque.
                            Volutpat volutpat vitae pretium suscipit eros ultrices massa nam. Ut cursus sed massa faucibus quam
                            eget vulputate. Morbi lorem libero porttitor posuere arcu mauris vulputate lacus blandit.
                            Felis nunc lectus mattis arcu a. Auctor consequat at nibh sit tortor. Viverra eu sed habitant morbi
                            libero neque et penatibus dignissim.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-main-image">
                        <img src="https://i.postimg.cc/44FzPQc8/image.png" alt="About Us Image" class="img-fluid rounded-4 shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-team-section py-5">
        <div class="container">
            <div class="about-team-header text-center text-lg-start mb-5">
                <span class="about-team-tag badge rounded-pill mb-3">Our Specialists</span>
                <h2 class="about-team-title display-5 fw-bold">Our Dedicated & Experienced<br>Therapist Team</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="about-team-card text-center">
                        <div class="about-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://img.freepik.com/premium-photo/male-female-doctor-portrait-healthcare-medical-staff-concept-confident-doctor-portrait_1108314-405796.jpg"
                                alt="Dr. Emily Brown" class="img-fluid rounded-3 shadow-sm">
                            <div class="about-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="about-team-name text-info fw-bold mb-1">Dr. Emily Brown</h5>
                        <p class="about-team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-team-card text-center">
                        <div class="about-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://thumbs.dreamstime.com/z/studio-portrait-hispanic-brazilian-female-laboratory-scientist-lab-coat-wearing-mask-goggle-safety-cap-glove-260485549.jpg?w=576"
                                alt="Dr. Sarah Johnson" class="img-fluid rounded-3 shadow-sm">
                            <div class="about-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="about-team-name text-info fw-bold mb-1">Dr. Sarah Johnson</h5>
                        <p class="about-team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-team-card text-center">
                        <div class="about-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small_2x/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                                alt="Dr. Michael Chen" class="img-fluid rounded-3 shadow-sm">
                            <div class="about-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="about-team-name text-info fw-bold mb-1">Dr. Michael Chen</h5>
                        <p class="about-team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-team-card text-center">
                        <div class="about-team-photo-bg position-relative d-flex align-items-center justify-content-center rounded-4 mb-3">
                            <img src="https://img.freepik.com/free-photo/nurse-with-stethoscope-white-medical-uniform-white-protective-sterile-mask_179666-205.jpg?t=st=1717959581~exp=1717963181~hmac=976a532d8fc64986f6c29f5c8c8f71972111de503411342eaffa23645e02218d&w=1800"
                                alt="Dr. Lisa Wang" class="img-fluid rounded-3 shadow-sm">
                            <div class="about-team-contact position-absolute d-flex gap-3 align-items-center bg-white rounded-3 shadow-sm px-3 py-2">
                                <a href="#" class="text-info"><i class="fas fa-phone"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-comment-dots"></i></a>
                                <a href="#" class="text-info"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                        <h5 class="about-team-name text-info fw-bold mb-1">Dr. Lisa Wang</h5>
                        <p class="about-team-role text-muted mb-0">senior physiotherapist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
