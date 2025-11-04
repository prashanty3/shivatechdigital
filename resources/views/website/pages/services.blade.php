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
                    <h1 class="page-title">Complete Digital Solutions</h1>
                    <p class="page-subtitle">From web development to digital marketing, we provide comprehensive services to help your business thrive in the digital world.</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="header-stats">
                        <div class="header-stat-item">
                            <h3>50+</h3>
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

    <!-- Web Development Service -->
    <section class="service-detail-section py-5" id="web-app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-detail-visual">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/web-development-4986316-4159834.png" alt="Web Development" class="img-fluid">
                        <div class="visual-decoration">
                            <div class="deco-circle circle-1"></div>
                            <div class="deco-circle circle-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-detail-content">
                        <span class="service-badge-detail">Web Development</span>
                        <h2>Custom Web Application Development</h2>
                        <p class="service-desc">We create powerful, scalable web applications that drive business growth. Our expert team uses the latest technologies to build custom solutions that meet your unique requirements.</p>
                        
                        <div class="service-features-grid">
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Responsive Design</h5>
                                    <p>Perfect on all devices</p>
                                </div>
                            </div>
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Modern Frameworks</h5>
                                    <p>React, Angular, Vue.js</p>
                                </div>
                            </div>
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>SEO Optimized</h5>
                                    <p>Built for visibility</p>
                                </div>
                            </div>
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Fast Performance</h5>
                                    <p>Lightning-fast load times</p>
                                </div>
                            </div>
                        </div>

                        <div class="tech-stack-detail">
                            <h5>Technologies We Use:</h5>
                            <div class="tech-badges">
                                <span class="tech-badge-detail"><i class="fab fa-react"></i> React</span>
                                <span class="tech-badge-detail"><i class="fab fa-angular"></i> Angular</span>
                                <span class="tech-badge-detail"><i class="fab fa-vuejs"></i> Vue.js</span>
                                <span class="tech-badge-detail"><i class="fab fa-node"></i> Node.js</span>
                                <span class="tech-badge-detail"><i class="fab fa-python"></i> Python</span>
                                <span class="tech-badge-detail"><i class="fab fa-php"></i> PHP</span>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="btn-service-detail">
                            <span>Get Started</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Development Service -->
    <section class="service-detail-section py-5 bg-alternate" id="mobile-app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                    <div class="service-detail-visual">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/mobile-app-development-4974401-4159834.png" alt="Mobile Development" class="img-fluid">
                        <div class="visual-decoration">
                            <div class="deco-circle circle-1"></div>
                            <div class="deco-circle circle-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                    <div class="service-detail-content">
                        <span class="service-badge-detail">Mobile Development</span>
                        <h2>iOS & Android App Development</h2>
                        <p class="service-desc">Create stunning mobile experiences for iOS and Android. We develop native and cross-platform apps that engage users and drive business results.</p>
                        
                        <div class="service-features-grid">
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Native iOS Apps</h5>
                                    <p>Swift & Objective-C</p>
                                </div>
                            </div>
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Native Android</h5>
                                    <p>Kotlin & Java</p>
                                </div>
                            </div>
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>Cross-Platform</h5>
                                    <p>React Native, Flutter</p>
                                </div>
                            </div>
                            <div class="feature-grid-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <h5>App Store Optimization</h5>
                                    <p>Maximize visibility</p>
                                </div>
                            </div>
                        </div>

                        <div class="tech-stack-detail">
                            <h5>Technologies We Use:</h5>
                            <div class="tech-badges">
                                <span class="tech-badge-detail"><i class="fab fa-apple"></i> Swift</span>
                                <span class="tech-badge-detail"><i class="fab fa-android"></i> Kotlin</span>
                                <span class="tech-badge-detail"><i class="fab fa-react"></i> React Native</span>
                                <span class="tech-badge-detail">Flutter</span>
                                <span class="tech-badge-detail">Firebase</span>
                                <span class="tech-badge-detail">AWS</span>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="btn-service-detail">
                            <span>Get Started</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Marketing Service -->
    <section class="service-detail-section py-5" id="digital-marketing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-detail-visual">
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/digital-marketing-5713164-4778052.png" alt="Digital Marketing" class="img-fluid">
                        <div class="visual-decoration">
                            <div class="deco-circle circle-1"></div>
                            <div class="deco-circle circle-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-detail-content">
                        <span class="service-badge-detail">Digital Marketing</span>
                        <h2>Complete Digital Marketing Solutions</h2>
                        <p class="service-desc">Grow your online presence and reach your target audience with our comprehensive digital marketing strategies. We combine creativity with data-driven insights.</p>
                        
                        <div class="marketing-services-list">
                            <div class="marketing-service-item">
                                <div class="marketing-icon"><i class="fas fa-search"></i></div>
                                <div>
                                    <h5>SEO & SEM</h5>
                                    <p>Improve rankings and drive qualified traffic</p>
                                </div>
                            </div>
                            <div class="marketing-service-item">
                                <div class="marketing-icon"><i class="fab fa-facebook"></i></div>
                                <div>
                                    <h5>Social Media Marketing</h5>
                                    <p>Engage audiences on all major platforms</p>
                                </div>
                            </div>
                            <div class="marketing-service-item">
                                <div class="marketing-icon"><i class="fas fa-pen"></i></div>
                                <div>
                                    <h5>Content Marketing</h5>
                                    <p>Create compelling content that converts</p>
                                </div>
                            </div>
                            <div class="marketing-service-item">
                                <div class="marketing-icon"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <h5>Email Marketing</h5>
                                    <p>Personalized campaigns that engage</p>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="btn-service-detail">
                            <span>Get Started</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Grid -->
    <section class="additional-services py-5 bg-alternate">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">More Services</span>
                <h2 class="section-title-creative">Additional Solutions We Offer</h2>
                <p class="section-subtitle-creative">Comprehensive services to cover all your digital needs</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        <i class="fas fa-paint-brush"></i>
                        <h4>UI/UX Design</h4>
                        <p>Create beautiful, intuitive interfaces that users love and that drive conversions</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        <i class="fas fa-shopping-cart"></i>
                        <h4>E-commerce Solutions</h4>
                        <p>Build powerful online stores with secure payments and inventory management</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        <i class="fas fa-cloud"></i>
                        <h4>Cloud Solutions</h4>
                        <p>Scalable cloud infrastructure and seamless migration services</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        <i class="fas fa-tools"></i>
                        <h4>Maintenance & Support</h4>
                        <p>Ongoing maintenance and 24/7 technical support for your peace of mind</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        <i class="fas fa-palette"></i>
                        <h4>Brand Strategy</h4>
                        <p>Develop compelling brand identity and messaging that resonates</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="additional-service-card">
                        <div class="service-card-bg"></div>
                        <i class="fas fa-video"></i>
                        <h4>Video Marketing</h4>
                        <p>Engaging video content production for all digital platforms</p>
                        <a href="{{ route('contact') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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