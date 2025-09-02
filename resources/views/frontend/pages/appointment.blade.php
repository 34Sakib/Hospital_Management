@extends('frontend.layout.masterlayout')

@section('title', 'Book an Appointment - Hospital Management')

@section('styles')
    {{-- All styles moved to external stylesheet: /frontend/style.css --}}
@endsection

@section('content')
<section class="appointment-container py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="appointment-title text-center mb-4">Book an Appointment</h1>
                
                <div class="appointment-form card border-0 shadow-lg p-4">
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
                    
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" class="form-label">First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name" class="form-label">Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date" class="form-label">Preferred Date <span class="required">*</span></label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="time" class="form-label">Preferred Time <span class="required">*</span></label>
                                    <select class="form-select form-control" id="time" name="time" required>
                                        <option value="">Select Time</option>
                                        <option value="09:00" {{ old('time') == '09:00' ? 'selected' : '' }}>9:00 AM</option>
                                        <option value="10:00" {{ old('time') == '10:00' ? 'selected' : '' }}>10:00 AM</option>
                                        <option value="11:00" {{ old('time') == '11:00' ? 'selected' : '' }}>11:00 AM</option>
                                        <option value="14:00" {{ old('time') == '14:00' ? 'selected' : '' }}>2:00 PM</option>
                                        <option value="15:00" {{ old('time') == '15:00' ? 'selected' : '' }}>3:00 PM</option>
                                        <option value="16:00" {{ old('time') == '16:00' ? 'selected' : '' }}>4:00 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="department" class="form-label">Department <span class="required">*</span></label>
                                    <select class="form-select form-control" id="department" name="department" required>
                                        <option value="">Select Department</option>
                                        <option value="cardiology" {{ old('department') == 'cardiology' ? 'selected' : '' }}>Cardiology</option>
                                        <option value="neurology" {{ old('department') == 'neurology' ? 'selected' : '' }}>Neurology</option>
                                        <option value="orthopedics" {{ old('department') == 'orthopedics' ? 'selected' : '' }}>Orthopedics</option>
                                        <option value="pediatrics" {{ old('department') == 'pediatrics' ? 'selected' : '' }}>Pediatrics</option>
                                        <option value="general" {{ old('department') == 'general' ? 'selected' : '' }}>General Medicine</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doctor" class="form-label">Preferred Doctor</label>
                                    <select class="form-select form-control" id="doctor" name="doctor">
                                        <option value="">Any Available Doctor</option>
                                        <option value="dr_smith" {{ old('doctor') == 'dr_smith' ? 'selected' : '' }}>Dr. John Smith</option>
                                        <option value="dr_johnson" {{ old('doctor') == 'dr_johnson' ? 'selected' : '' }}>Dr. Sarah Johnson</option>
                                        <option value="dr_brown" {{ old('doctor') == 'dr_brown' ? 'selected' : '' }}>Dr. Michael Brown</option>
                                        <option value="dr_davis" {{ old('doctor') == 'dr_davis' ? 'selected' : '' }}>Dr. Emily Davis</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="message" class="form-label">Additional Notes</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Please describe your symptoms or reason for visit...">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-info btn-lg rounded-3 fw-semibold w-100">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
