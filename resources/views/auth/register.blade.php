@extends('frontend.layout.masterlayout')

@section('title', 'Register - Hospital Management')

@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    
    body {
        margin: 0;
        padding: 0;
        background: #fff;
        font-family: 'Poppins', sans-serif;
    }
    
    .register-wrap {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }
    
    .register-card {
        background: #fff;
        border: 1px solid #3BAFBF;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(59, 175, 191, 0.1);
        padding: 44px 48px 36px 48px;
        min-width: 400px;
        max-width: 500px;
        width: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .close-btn {
        background: transparent;
        border: none;
        color: #222;
        font-size: 22px;
        cursor: pointer;
        position: absolute;
        top: 24px;
        right: 28px;
        transition: color 0.3s;
    }
    
    .close-btn:hover {
        color: #22B8CF;
    }
    
    .register-title {
        font-size: 22px;
        font-weight: 600;
        color: #222;
        margin-bottom: 36px;
        margin-top: 8px;
        text-align: center;
    }
    
    .register-form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .form-row {
        display: flex;
        gap: 16px;
    }
    
    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .form-group label {
        font-size: 14px;
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }
    
    .form-group input,
    .form-group select {
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        transition: border-color 0.3s ease;
        background: #fff;
    }
    
    .form-group input:focus,
    .form-group select:focus {
        outline: none;
        border-color: #22B8CF;
        box-shadow: 0 0 0 3px rgba(34, 184, 207, 0.1);
    }
    
    .required {
        color: #e74c3c;
    }
    
    .register-btn {
        background: #22B8CF;
        color: white;
        border: none;
        padding: 14px 24px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Poppins', sans-serif;
        margin-top: 8px;
    }
    
    .register-btn:hover {
        background: #1ea3b8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(34, 184, 207, 0.3);
    }
    
    .terms-group {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-top: 8px;
    }
    
    .terms-group input[type="checkbox"] {
        margin-top: 4px;
        width: 16px;
        height: 16px;
        accent-color: #22B8CF;
        flex-shrink: 0;
    }
    
    .terms-text {
        font-size: 14px;
        color: #666;
        line-height: 1.5;
        cursor: pointer;
    }
    
    .terms-text a {
        color: #22B8CF;
        text-decoration: none;
        font-weight: 500;
    }
    
    .terms-text a:hover {
        text-decoration: underline;
    }
    
    .signin-link {
        text-align: center;
        margin-top: 24px;
        font-size: 14px;
        color: #666;
    }
    
    .signin-link a {
        color: #22B8CF;
        text-decoration: none;
        font-weight: 600;
    }
    
    .signin-link a:hover {
        text-decoration: underline;
    }
    
    .alert {
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
        width: 100%;
    }
    
    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    
    @media (max-width: 768px) {
        .register-card {
            min-width: auto;
            margin: 0 10px;
            padding: 32px 24px;
        }
        
        .form-row {
            flex-direction: column;
            gap: 20px;
        }
        
        .register-title {
            font-size: 20px;
        }
    }
    
    @media (max-width: 480px) {
        .register-wrap {
            padding: 20px 10px;
        }
        
        .register-card {
            padding: 24px 16px;
        }
        
        .register-title {
            font-size: 18px;
            margin-bottom: 24px;
        }
    }
</style>
@endsection

@section('content')
<div class="register-wrap">
    <div class="register-card">
        <button class="close-btn" onclick="window.history.back()">
            <i class="fas fa-times"></i>
        </button>
        
        <h1 class="register-title">Create Your Account</h1>
        
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
            
            <div class="form-row">
                <div class="form-group">
                    <label for="first_name">First Name <span class="required">*</span></label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name <span class="required">*</span></label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone Number <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="blood_group">Blood Group</label>
                    <select id="blood_group" name="blood_group">
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
            
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="Enter your full address">
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password <span class="required">*</span></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
            </div>
            
            <div class="terms-group">
                <input type="checkbox" id="terms" name="terms" required {{ old('terms') ? 'checked' : '' }}>
                <label for="terms" class="terms-text">
                    I agree to the <a href="#" target="_blank">Terms of Service</a> and <a href="#" target="_blank">Privacy Policy</a>
                </label>
            </div>
            
            <button type="submit" class="register-btn">Create Account</button>
        </form>
        
        <div class="signin-link">
            Already have an account? <a href="{{ route('login') }}">Sign in here</a>
        </div>
    </div>
</div>
@endsection
