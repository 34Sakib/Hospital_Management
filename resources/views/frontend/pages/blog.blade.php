@extends('frontend.layout.masterlayout')

@section('title', 'Blog - Hospital Management')

@section('blog-active', 'active')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')
<section class="blog-hero py-5">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="blog-hero-img text-center text-lg-start d-flex justify-content-center justify-content-lg-start">
                    <img src="https://i.postimg.cc/RCHJmZLM/image.png" alt="Blog Hero" class="img-fluid rounded-4 shadow">
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="blog-hero-content text-center text-lg-start">
                    <span class="blog-tag badge rounded-pill mb-3">News & Blog</span>
                    <h1 class="display-4 fw-bold mb-4">Our Latest Insights & Updates</h1>
                    <p class="text-muted lead mb-0">World-class rehabilitation solutions and individualized recovery plans, from acute care to ongoing outpatient treatment and beyond.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-cards-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Row 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/RCHJmZLM/image.png" alt="Blog 1" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">Transitional Rehab: What to Expect</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/Dfrf5Jcb/image.png" alt="Blog 2" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">How to choose the right physiotherapist for you</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/9Q4v8sjN/image.png" alt="Blog 3" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">Importance of correct posture and how to improve it</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/RCHJmZLM/image.png" alt="Blog 4" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">10 essential benefits of regular physiotherapy</h5>
                        <a href="{{ route('bloginfo', ['slug' => '10-essential-benefits-of-regular-physiotherapy']) }}" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/Dfrf5Jcb/image.png" alt="Blog 5" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">How to choose the right physiotherapist for you</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/9Q4v8sjN/image.png" alt="Blog 6" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">Importance of correct posture and how to improve it</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Row 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/RCHJmZLM/image.png" alt="Blog 7" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">10 essential benefits of regular physiotherapy</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/Dfrf5Jcb/image.png" alt="Blog 8" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">How to choose the right physiotherapist for you</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card card h-100 border-0 shadow-sm">
                    <div class="blog-card-img card-img-top overflow-hidden">
                        <img src="https://i.postimg.cc/9Q4v8sjN/image.png" alt="Blog 9" class="img-fluid">
                    </div>
                    <div class="blog-card-content card-body d-flex flex-column">
                        <h5 class="blog-card-title card-title">Importance of correct posture and how to improve it</h5>
                        <a href="#" class="blog-read btn btn-outline-info btn-sm rounded-pill mt-auto">
                            Read more <span class="ms-1">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection