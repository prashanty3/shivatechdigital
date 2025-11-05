@extends('website.index')
@section('title', 'Services - ShivaTechDigital')
@section('website.content')
    <!-- Page Header -->
    <section class="page-header-creative">
        <div class="page-header-bg">
            <div class="header-orb orb-1"></div>
            <div class="header-orb orb-2"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="page-badge">Our Services</span>
                    <h1 class="page-title">{{ $pageData->title ?? 'Complete Digital Solutions' }}</h1>
                    <p class="page-subtitle">{{ $pageData->description ?? 'From web development to digital marketing, we provide comprehensive services to help your business thrive in the digital world.' }}</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="header-stats">
                        <div class="header-stat-item">
                            <h3>{{ $services->count() }}+</h3>
                            <p>Services Offered</p>
                        </div>
                        <div class="header-stat-item">
                            <h3>100%</h3>
                            <p>Client Satisfaction</p>
                        </div>
                        <div class="header-stat-item">
                            <h3>24/7</h3>
                            <p>Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    @foreach($services as $service)
    <section class="service-detail-section py-5 {{ $loop->even ? 'bg-alternate' : '' }}" id="service-{{ $service->id }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 {{ $loop->even ? 'order-lg-2' : '' }}" data-aos="{{ $loop->even ? 'fade-left' : 'fade-right' }}">
                    <div class="service-detail-visual">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid">
                        @else
                            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/web-development-4986316-4159834.png" alt="{{ $service->name }}" class="img-fluid">
                        @endif
                        <div class="visual-decoration">
                            <div class="deco-circle circle-1"></div>
                            <div class="deco-circle circle-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 {{ $loop->even ? 'order-lg-1' : '' }}" data-aos="{{ $loop->even ? 'fade-right' : 'fade-left' }}">
                    <div class="service-detail-content">
                        <span class="service-badge-detail">{{ $service->name }}</span>
                        <h2>{{ $service->title ?? $service->name }}</h2>
                        <p class="service-desc">{{ $service->description }}</p>
                        
                        @if($service->features && $service->features->count() > 0)
                        <div class="service-features-grid">
                            @foreach($service->features->take(4) as $feature)
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>{{ $feature->title }}</h5>
                                    <p>{{ $feature->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        @if($service->technologies && $service->technologies->count() > 0)
                        <div class="tech-stack-detail">
                            <h5>Technologies We Use:</h5>
                            <div class="tech-badges">
                                @foreach($service->technologies as $technology)
                                <span class="tech-badge-detail">
                                    @if($technology->icon)
                                        <i class="{{ $technology->icon }}"></i>
                                    @endif
                                    {{ $technology->name }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <a href="{{ route('contact') }}" class="btn-service-detail">
                            <span>Get Started</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Additional Services Grid -->
    @if($additionalServices && $additionalServices->count() > 0)
    <section class="additional-services py-5 bg-alternate">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">More Services</span>
                <h2 class="section-title-creative">Additional Solutions We Offer</h2>
                <p class="section-subtitle-creative">Comprehensive services to cover all your digital needs</p>
            </div>
            <div class="row g-4">
                @foreach($additionalServices as $additionalService)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        @if($additionalService->icon)
                            <i class="{{ $additionalService->icon }}"></i>
                        @else
                            <i class="fas fa-cog"></i>
                        @endif
                        <h4>{{ $additionalService->name }}</h4>
                        <p>{{ $additionalService->description }}</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="cta-creative">
        <div class="cta-bg-animation">
            <div class="cta-orb orb-1"></div>
            <div class="cta-orb orb-2"></div>
            <div class="cta-orb orb-3"></div>
        </div>
        
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <div class="cta-icon-large">
                    <i class="fas fa-rocket"></i>
                </div>
                <h2>Ready to Get Started?</h2>
                <p>Let's discuss your project and bring your vision to life with our expert team</p>
                
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn-cta-primary">
                        <span>Request a Quote</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn-cta-secondary">
                        <span>View Portfolio</span>
                        <i class="fas fa-briefcase"></i>
                    </a>
                </div>
                
                <div class="cta-features">
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Free Consultation</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Flexible Pricing</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Expert Team</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
// Smooth scroll to anchor sections
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Check if there's a hash in the URL
    if (window.location.hash) {
        setTimeout(function() {
            const element = document.querySelector(window.location.hash);
            if (element) {
                element.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'start' 
                });
            }
        }, 100);
    }
    
    // Handle anchor link clicks
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            
            if (target) {
                target.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'start' 
                });
                
                // Update URL without scrolling
                history.pushState(null, null, targetId);
            }
        });
    });
});
</script>
@endpush