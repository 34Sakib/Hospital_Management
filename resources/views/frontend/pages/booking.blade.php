@extends('frontend.layout.masterlayout')

@section('title', 'Book Appointment - Hospital Management')

@section('styles')
<style>
    /* Page-specific styles only */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    
    body {
        margin: 0;
        padding: 0;
        background: #fff;
        font-family: 'Poppins', sans-serif;
    }
    
    .main-wrap {
        min-height: calc(100vh - 120px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 32px;
        margin-top: 60px;
    }
    
    .booking-container {
        display: flex;
        align-items: flex-start;
        background: transparent;
        gap: 60px;
        max-width: 1200px;
        width: 100%;
    }
    
    .booking-image {
        width: 370px;
        height: 370px;
        border-radius: 20px;
        overflow: hidden;
        background: #f7f7f7;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .booking-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
    }
    
    .booking-content {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding: 40px;
        min-width: 600px;
        flex: 1;
    }
    
    .booking-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 8px;
        line-height: 1.2;
    }
    
    .booking-subtitle {
        font-size: 1rem;
        color: #666;
        margin-bottom: 40px;
        line-height: 1.5;
    }
    
    .booking-form {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    
    .form-row {
        display: flex;
        gap: 20px;
    }
    
    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .form-group label {
        font-size: 0.9rem;
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 14px 16px;
        border: 1.5px solid #e5e5e5;
        border-radius: 8px;
        font-size: 0.95rem;
        font-family: 'Poppins', sans-serif;
        transition: border-color 0.3s ease;
        background: #fff;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #00bcd4;
        box-shadow: 0 0 0 3px rgba(0, 188, 212, 0.1);
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }
    
    .submit-btn {
        background: #00bcd4;
        color: white;
        padding: 16px 32px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 20px;
        align-self: flex-start;
    }
    
    .submit-btn:hover {
        background: #009cb0;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 188, 212, 0.3);
    }
    
    .required {
        color: #e74c3c;
    }
    
    /* Alert Messages */
    .alert {
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 0.9rem;
    }
    
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    
    /* Comprehensive Responsive Breakpoints */
    /* Desktop Large (1200px+) - Default styles above */
    
    /* Desktop Medium (992px - 1199px) */
    @media (max-width: 1199px) {
        .main-wrap {
            padding: 50px 25px;
        }
        
        .booking-container {
            gap: 50px;
        }
        
        .booking-image {
            width: 350px;
            height: 350px;
        }
        
        .booking-content {
            padding: 36px;
            min-width: 550px;
        }
        
        .booking-title {
            font-size: 2.3rem;
        }
    }
    
    /* Tablet (768px - 991px) */
    @media (max-width: 991px) {
        .main-wrap {
            padding: 40px 20px;
            margin-top: 40px;
        }
        
        .booking-container {
            flex-direction: column;
            gap: 40px;
            align-items: center;
        }
        
        .booking-image {
            width: 320px;
            height: 320px;
            order: 1;
        }
        
        .booking-content {
            min-width: auto;
            width: 100%;
            max-width: 600px;
            padding: 32px;
            order: 2;
        }
        
        .form-row {
            flex-direction: column;
            gap: 16px;
        }
        
        .booking-title {
            font-size: 2.2rem;
            text-align: center;
        }
        
        .booking-subtitle {
            text-align: center;
        }
        
        .submit-btn {
            align-self: stretch;
        }
    }
    
    /* Mobile Large (600px - 767px) */
    @media (max-width: 767px) {
        .main-wrap {
            padding: 30px 15px;
            margin-top: 30px;
            min-height: calc(100vh - 100px);
        }
        
        .booking-container {
            gap: 30px;
        }
        
        .booking-image {
            width: 280px;
            height: 280px;
        }
        
        .booking-content {
            max-width: 500px;
            padding: 28px;
        }
        
        .booking-title {
            font-size: 2rem;
        }
        
        .booking-subtitle {
            font-size: 0.95rem;
            margin-bottom: 32px;
        }
        
        .booking-form {
            gap: 20px;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 12px 14px;
            font-size: 0.9rem;
        }
        
        .submit-btn {
            padding: 14px 28px;
            font-size: 0.95rem;
        }
    }
    
    /* Mobile Medium (480px - 599px) */
    @media (max-width: 599px) {
        .main-wrap {
            padding: 25px 12px;
        }
        
        .booking-image {
            width: 250px;
            height: 250px;
        }
        
        .booking-content {
            padding: 24px;
            max-width: 450px;
        }
        
        .booking-title {
            font-size: 1.8rem;
        }
        
        .booking-subtitle {
            font-size: 0.9rem;
            margin-bottom: 28px;
        }
        
        .form-group label {
            font-size: 0.85rem;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 11px 13px;
            font-size: 0.85rem;
        }
        
        .form-group textarea {
            min-height: 80px;
        }
        
        .submit-btn {
            padding: 13px 24px;
            font-size: 0.9rem;
        }
        
        .alert {
            padding: 10px 14px;
            font-size: 0.85rem;
        }
    }
    
    /* Mobile Small (320px - 479px) */
    @media (max-width: 479px) {
        .main-wrap {
            padding: 20px 10px;
            margin-top: 20px;
        }
        
        .booking-container {
            gap: 25px;
        }
        
        .booking-image {
            width: 220px;
            height: 220px;
            border-radius: 16px;
        }
        
        .booking-content {
            padding: 20px;
            border-radius: 16px;
            max-width: 100%;
        }
        
        .booking-title {
            font-size: 1.6rem;
        }
        
        .booking-subtitle {
            font-size: 0.85rem;
            margin-bottom: 24px;
        }
        
        .booking-form {
            gap: 16px;
        }
        
        .form-group label {
            font-size: 0.8rem;
            margin-bottom: 6px;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px 12px;
            font-size: 0.8rem;
            border-radius: 6px;
        }
        
        .form-group textarea {
            min-height: 70px;
        }
        
        .submit-btn {
            padding: 12px 20px;
            font-size: 0.85rem;
            border-radius: 6px;
            margin-top: 16px;
        }
        
        .alert {
            padding: 8px 12px;
            font-size: 0.8rem;
            border-radius: 6px;
        }
    }
</style>
@endsection

@section('content')
<div class="main-wrap">
    <div class="booking-container">
        <div class="booking-image">
            <img src="https://i.postimg.cc/yN0NFzRH/image.png" alt="booking-image">
        </div>
        
        <div class="booking-content">
            <h1 class="booking-title">Book Your Appointment</h1>
            <p class="booking-subtitle">Schedule your visit with our experienced medical professionals. Fill out the form below and we'll get back to you shortly.</p>
            
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
            
            <form class="booking-form" action="{{ route('booking.store') }}" method="POST">
                @csrf
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name <span class="required">*</span></label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name <span class="required">*</span></label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="appointment_date">Preferred Date <span class="required">*</span></label>
                        <input type="date" id="appointment_date" name="appointment_date" required>
                    </div>
                    <div class="form-group">
                        <label for="appointment_time">Preferred Time <span class="required">*</span></label>
                        <select id="appointment_time" name="appointment_time" required>
                            <option value="">Select Time</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="16:00">4:00 PM</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="department">Department <span class="required">*</span></label>
                        <select id="department" name="department" required>
                            <option value="">Select Department</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="neurology">Neurology</option>
                            <option value="orthopedics">Orthopedics</option>
                            <option value="pediatrics">Pediatrics</option>
                            <option value="general">General Medicine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="doctor">Preferred Doctor</label>
                        <select id="doctor" name="doctor">
                            <option value="">Any Available Doctor</option>
                            <option value="dr_smith">Dr. John Smith</option>
                            <option value="dr_johnson">Dr. Sarah Johnson</option>
                            <option value="dr_brown">Dr. Michael Brown</option>
                            <option value="dr_davis">Dr. Emily Davis</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message">Additional Message</label>
                    <textarea id="message" name="message" placeholder="Please describe your symptoms or reason for visit..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Book Appointment</button>
            </form>
        </div>
    </div>
</div>
@endsection
