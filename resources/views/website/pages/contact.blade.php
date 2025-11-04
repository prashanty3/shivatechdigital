@extends('website.index')
@section('title', 'Contact Us - ' . ($settings->site_name ?? ''))
@section('website.content')
    <!-- Page Header -->
    <section class="page-header-creative">
        <div class="page-header-bg">
            <div class="header-orb orb-1"></div>
            <div class="header-orb orb-2"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <span class="page-badge">Get In Touch</span>
                    <h1 class="page-title">Let's Start Your Project</h1>
                    <p class="page-subtitle">Have a project in mind? We'd love to hear from you. Let's discuss how we can help bring your vision to life.</p>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="contact-quick-info">
                        <div class="quick-info-item">
                            <i class="fas fa-phone"></i>
                            <span>{{$settings->site_phone ?? '+1 (555) 123-4567'}}</span>
                        </div>
                        <div class="quick-info-item">
                            <i class="fas fa-envelope"></i>
                            <span>{{$settings->site_email ?? 'info@ShivaTechDigi.com'}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-creative">
                        <h3>Contact Information</h3>
                        <p>Get in touch with us. We're here to help and answer any questions you might have.</p>
                        
                        <div class="contact-info-items">
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Address</h5>
                                    <p>{{$settings->site_address ?? ''}}</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Phone</h5>
                                    <p>{{$settings->site_phone ?? '+1 (555) 123-4567'}}<br>{{$settings->site_phone_alt ?? ''}}</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Email</h5>
                                    <p>{{$settings->site_email ?? 'info@ShivaTechDigi.com'}}</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Business Hours</h5>
                                    <p>We are working 24*7</p>
                                </div>
                            </div>
                        </div>

                        <div class="social-links-contact">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-creative">
                        <h3>Send Us a Message</h3>
                        <p>Fill out the form below and we'll get back to you within 24 hours</p>
                        
                        <form id="contactForm" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group-creative">
                                        <label for="name">Full Name *</label>
                                        <div class="input-wrapper">
                                            <i class="fas fa-user"></i>
                                            <input type="text" class="form-control-creative @error('name') is-invalid @enderror" 
                                                   id="name" name="name" value="{{ old('name') }}" required>
                                        </div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group-creative">
                                        <label for="email">Email Address *</label>
                                        <div class="input-wrapper">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" class="form-control-creative @error('email') is-invalid @enderror" 
                                                   id="email" name="email" value="{{ old('email') }}" required>
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group-creative">
                                        <label for="phone">Phone Number</label>
                                        <div class="input-wrapper">
                                            <i class="fas fa-phone"></i>
                                            <input type="tel" class="form-control-creative @error('phone') is-invalid @enderror" 
                                                   id="phone" name="phone" value="{{ old('phone') }}">
                                        </div>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group-creative">
                                        <label for="service">Service Interested In *</label>
                                        <div class="input-wrapper">
                                            <i class="fas fa-briefcase"></i>
                                            <select class="form-control-creative @error('service') is-invalid @enderror" 
                                                    id="service" name="service" required>
                                                <option value="">Select a service</option>
                                                <option value="web" {{ old('service') == 'web' ? 'selected' : '' }}>Web Application</option>
                                                <option value="mobile" {{ old('service') == 'mobile' ? 'selected' : '' }}>Mobile Application</option>
                                                <option value="marketing" {{ old('service') == 'marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                                <option value="seo" {{ old('service') == 'seo' ? 'selected' : '' }}>SEO Services</option>
                                                <option value="ui" {{ old('service') == 'ui' ? 'selected' : '' }}>UI/UX Design</option>
                                                <option value="other" {{ old('service') == 'other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                        @error('service')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group-creative">
                                        <label for="subject">Subject *</label>
                                        <div class="input-wrapper">
                                            <i class="fas fa-tag"></i>
                                            <input type="text" class="form-control-creative @error('subject') is-invalid @enderror" 
                                                   id="subject" name="subject" value="{{ old('subject') }}" required>
                                        </div>
                                        @error('subject')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group-creative">
                                        <label for="message">Your Message *</label>
                                        <div class="input-wrapper">
                                            <i class="fas fa-comment"></i>
                                            <textarea class="form-control-creative @error('message') is-invalid @enderror" 
                                                      id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                                        </div>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn-submit-creative" id="submitBtn">
                                        <span>Send Message</span>
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Success/Error Messages -->
                        <div id="form-message" class="mt-3" style="display: none;"></div>

                        @if(session('success'))
                            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container-fluid p-0">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3502.3495145180937!2d77.36763517550028!3d28.619285075672007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDM3JzA5LjQiTiA3N8KwMjInMTIuOCJF!5e0!3m2!1sen!2sin!4v1761968119860!5m2!1sen!2sin" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5 bg-alternate">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">FAQ</span>
                <h2 class="section-title-creative">Frequently Asked Questions</h2>
                <p class="section-subtitle-creative">Quick answers to common questions</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-creative" id="faqAccordion">
                        <div class="accordion-item-creative" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="accordion-header">
                                <button class="accordion-button-creative" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    <i class="fas fa-question-circle"></i>
                                    <span>What services do you offer?</span>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body-creative">
                                    We offer comprehensive digital solutions including web application development, mobile app development (iOS & Android), digital marketing, SEO, UI/UX design, and cloud solutions.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-creative" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="accordion-header">
                                <button class="accordion-button-creative collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    <i class="fas fa-question-circle"></i>
                                    <span>How long does a typical project take?</span>
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body-creative">
                                    Project timelines vary based on scope and complexity. A typical web application takes 8-12 weeks, mobile apps 10-16 weeks, and digital marketing campaigns are ongoing. We'll provide a detailed timeline during consultation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-creative" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="accordion-header">
                                <button class="accordion-button-creative collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    <i class="fas fa-question-circle"></i>
                                    <span>Do you provide ongoing support?</span>
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body-creative">
                                    Yes! We offer 24/7 support and maintenance packages to ensure your digital solutions run smoothly. Our support includes bug fixes, updates, security patches, and technical assistance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-creative" data-aos="fade-up" data-aos-delay="400">
                            <h2 class="accordion-header">
                                <button class="accordion-button-creative collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    <i class="fas fa-question-circle"></i>
                                    <span>What is your pricing model?</span>
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body-creative">
                                    We offer flexible pricing models including fixed-price projects, hourly rates, and retainer packages. Pricing depends on project scope, complexity, and requirements. Contact us for a custom quote.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item-creative" data-aos="fade-up" data-aos-delay="500">
                            <h2 class="accordion-header">
                                <button class="accordion-button-creative collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    <i class="fas fa-question-circle"></i>
                                    <span>Do you work with startups?</span>
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body-creative">
                                    Absolutely! We love working with startups and offer special packages designed for early-stage companies. We understand the unique challenges startups face and provide flexible solutions to help you grow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- ✅ CORRECT WAY: Push Scripts --}}
@push('scripts')
<script>
(function() {
    'use strict';
    
    // AJAX Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = document.getElementById('submitBtn');
            const formMessage = document.getElementById('form-message');
            
            // Disable submit button
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin"></i>';
            
            // Get CSRF token from meta tag or form
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') 
                            || document.querySelector('input[name="_token"]')?.value;
            
            // Send AJAX request
            fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                return response.json().then(data => ({
                    status: response.status,
                    ok: response.ok,
                    data: data
                }));
            })
            .then(({status, ok, data}) => {
                if (ok && data.success) {
                    // Show success message
                    formMessage.className = 'alert alert-success alert-dismissible fade show';
                    formMessage.innerHTML = `
                        <i class="fas fa-check-circle"></i> ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    formMessage.style.display = 'block';
                    
                    // Reset form
                    contactForm.reset();
                    
                    // Scroll to message
                    formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    
                    // Hide message after 8 seconds
                    setTimeout(() => {
                        formMessage.style.display = 'none';
                    }, 8000);
                    
                } else {
                    // Show error message
                    let errorMessage = data.message || 'Something went wrong. Please try again.';
                    
                    // Handle validation errors
                    if (data.errors) {
                        errorMessage = '<strong>Please fix the following errors:</strong><ul class="mb-0 mt-2">';
                        Object.values(data.errors).forEach(errors => {
                            errors.forEach(error => {
                                errorMessage += `<li>${error}</li>`;
                            });
                        });
                        errorMessage += '</ul>';
                    }
                    
                    formMessage.className = 'alert alert-danger alert-dismissible fade show';
                    formMessage.innerHTML = `
                        <i class="fas fa-exclamation-circle"></i> ${errorMessage}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    formMessage.style.display = 'block';
                    
                    // Scroll to message
                    formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                formMessage.className = 'alert alert-danger alert-dismissible fade show';
                formMessage.innerHTML = `
                    <i class="fas fa-exclamation-circle"></i> An error occurred. Please try again later.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                formMessage.style.display = 'block';
            })
            .finally(() => {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Send Message</span> <i class="fas fa-paper-plane"></i>';
            });
        });
    }
})();
</script>
@endpush