@extends('frontend.layout.masterlayout')

@section('title', 'Register - Hospital Management')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')
<section class="register-wrap py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="register-card card border-info shadow-lg p-4 position-relative">
                    <button class="register-close-btn position-absolute top-0 end-0 mt-3 me-3 btn btn-link p-0" onclick="window.history.back()">
                        <i class="fas fa-times"></i>
                    </button>
                    
                    <h1 class="register-title h4 fw-bold text-center mb-4">Create Your Account</h1>
                    
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
                    
                    <form class="register-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" class="form-label">First Name <span class="register-required">*</span></label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name" class="form-label">Last Name <span class="register-required">*</span></label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address <span class="register-required">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number <span class="register-required">*</span></label>
                                    <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select form-control">
                                        <option value="">Select Gender</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="blood_group" class="form-label">Blood Group</label>
                                    <select id="blood_group" name="blood_group" class="form-select form-control">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                        <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                        <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                        <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                        <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                        <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                        <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                        <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" placeholder="Enter your full address">
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class="form-label">Password <span class="register-required">*</span></label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation" class="form-label">Confirm Password <span class="register-required">*</span></label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="register-terms-group mb-3">
                            <div class="form-check d-flex align-items-start">
                                <input type="checkbox" id="terms" name="terms" class="form-check-input me-2 mt-1" required {{ old('terms') ? 'checked' : '' }}>
                                <label for="terms" class="form-check-label register-terms-text small">
                                    I agree to the <a href="#" target="_blank" class="text-decoration-none">Terms of Service</a> and <a href="#" target="_blank" class="text-decoration-none">Privacy Policy</a>
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="register-btn btn btn-info btn-lg rounded-3 fw-semibold w-100">Create Account</button>
                    </form>
                    
                    <div class="register-signin-link text-center mt-4">
                        Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Sign in here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
