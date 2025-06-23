@extends('public.layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Modern Contact Page Styling */
        .contact-hero {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 120px 0 60px;
            margin-bottom: 80px;
            margin-top: 80px;
        }
        
        .contact-hero h1 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 3.5rem;
            color: #1a202c;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .contact-hero .subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.25rem;
            color: #64748b;
            margin-bottom: 0;
        }
        
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 80px;
        }
        
        /* Contact Info Section */
        .contact-info-section {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 40px;
            height: fit-content;
        }
        
        .contact-info-header {
            margin-bottom: 32px;
        }
        
        .contact-info-header h2 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 1.75rem;
            color: #1a202c;
            margin-bottom: 8px;
        }
        
        .contact-info-header p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #64748b;
            margin: 0;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 24px 0;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .contact-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .contact-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2eca6a, #22c55e);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(46, 202, 106, 0.3);
        }
        
        .contact-details h4 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.125rem;
            color: #1a202c;
            margin: 0 0 4px 0;
        }
        
        .contact-details p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #64748b;
            margin: 0;
            line-height: 1.5;
        }
        
        /* Contact Form Section */
        .contact-form-section {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }
        
        .contact-form-header {
            margin-bottom: 32px;
        }
        
        .contact-form-header h2 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 1.75rem;
            color: #1a202c;
            margin-bottom: 8px;
        }
        
        .contact-form-header p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #64748b;
            margin: 0;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.95rem;
            color: #374151;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #1a202c;
            background: #ffffff;
            transition: all 0.2s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .form-control:focus {
            outline: none;
            border-color: #2eca6a;
            box-shadow: 0 0 0 3px rgba(46, 202, 106, 0.1);
            transform: translateY(-1px);
        }
        
        .form-control:hover {
            border-color: #d1d5db;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-control::placeholder {
            color: #9ca3af;
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        
        .btn-send-message {
            background: linear-gradient(135deg, #2eca6a, #22c55e);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 50px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(46, 202, 106, 0.3);
        }
        
        .btn-send-message:hover {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(46, 202, 106, 0.4);
        }
        
        .btn-send-message:active {
            transform: translateY(0);
        }
        
        .btn-send-message i {
            font-size: 0.875rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-hero {
                padding: 80px 0 40px;
                margin-bottom: 40px;
            }
            
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .contact-hero .subtitle {
                font-size: 1.125rem;
            }
            
            .contact-container {
                padding: 0 20px 60px;
            }
            
            .contact-info-section,
            .contact-form-section {
                padding: 24px;
                margin-bottom: 24px;
            }
            
            .contact-item {
                padding: 20px 0;
            }
            
            .contact-icon {
                width: 48px;
                height: 48px;
                font-size: 1.125rem;
            }
            
            .form-control {
                padding: 14px 16px;
            }
            
            .btn-send-message {
                width: 100%;
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .contact-hero h1 {
                font-size: 2rem;
            }
            
            .contact-info-section,
            .contact-form-section {
                padding: 20px;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }
            
            .contact-icon {
                align-self: center;
            }
        }
    </style>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Get in Touch</h1>
                    <p class="subtitle">Ready to start your real estate journey? We're here to help you find the perfect property.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <div class="contact-container">
        <div class="row g-5">
            <!-- Contact Information Section -->
            <div class="col-lg-5">
                <div class="contact-info-section">
                    <div class="contact-info-header">
                        <h2>Contact Information</h2>
                        <p>Reach out to us through any of these channels</p>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Noida, Uttar Pradesh, India</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Open Hours</h4>
                            <p>Monday - Sunday<br>11:00 AM - 07:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>info@ekanshrealty.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Call</h4>
                            <p>+91 8377818657</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form Section -->
            <div class="col-lg-7">
                <div class="contact-form-section">
                    <div class="contact-form-header">
                        <h2>Send us a Message</h2>
                        <p>Fill out the form below and we'll get back to you shortly</p>
                    </div>
                    
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        
                        @if(session('success'))
                            <div class="alert alert-success" style="background: #d1fae5; color: #065f46; padding: 16px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #a7f3d0;">
                                <i class="fas fa-check-circle"></i> {{ session('success') }}
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger" style="background: #fee2e2; color: #991b1b; padding: 16px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #fca5a5;">
                                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                            </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert-danger" style="background: #fee2e2; color: #991b1b; padding: 16px; border-radius: 12px; margin-bottom: 24px; border: 1px solid #fca5a5;">
                                <ul style="margin: 0; padding-left: 20px;">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your full name" value="{{ old('name') }}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter your phone number" value="{{ old('phone') }}" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="What's this about?" value="{{ old('subject') }}" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="6" placeholder="Tell us more about your inquiry...">{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-send-message">
                                    <i class="fas fa-paper-plane"></i>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
