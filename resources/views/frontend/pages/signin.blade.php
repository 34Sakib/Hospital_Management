@extends('frontend.layout.masterlayout')

@section('title', 'Sign In - Hospital Management')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')
<section class="signin-main-wrap py-4">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-11">
                <div class="signin-container row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-5 order-lg-1 order-2">
                        <div class="signin-image d-flex justify-content-center">
                            <img src="https://i.postimg.cc/yN0NFzRH/image.png" alt="signin-image" class="img-fluid rounded-4 shadow">
                        </div>
                    </div>
                    
                    <div class="col-lg-7 order-lg-2 order-1">
                        <div class="signin-content card border-0 shadow-lg p-4">
                            <h1 class="signin-title h2 fw-bold mb-2">Welcome Back</h1>
                            <p class="signin-subtitle text-muted mb-4">Sign in to your account to access your healthcare dashboard and manage your appointments.</p>
                            
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            @if($errors->any())
                                <div class="alert alert-error">
                                    @foreach($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            
                            <form class="signin-form" action="{{ route('login') }}" method="POST">
                                @csrf
                                
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address <span class="signin-required">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password <span class="signin-required">*</span></label>
                                        <input type="password" id="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="signin-form-options mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input signin-remember-me" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label signin-remember-me" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="signin-forgot-password text-decoration-none">Forgot Password?</a>
                                </div>
                                
                                <button type="submit" class="signin-btn btn btn-info btn-lg rounded-3 fw-semibold w-100">Sign In</button>
                            </form>
                            
                            <div class="signin-signup-link text-center mt-4">
                                Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
