@extends('website.index')
@section('title', ($settings->site_name ?? '') . ' - Digital Marketing & Web Development Services')
@section('website.content')
<!-- Creative Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-animated-bg">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
        </div>

        <div class="particles-container" id="particles"></div>

        <div class="geometric-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
        </div>

        <div class="grid-background"></div>

        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="hero-content">
                        <div class="hero-badge">
                            <span class="badge-dot"></span>
                            <span class="badge-text">Welcome to the Future of Digital Marketing</span>
                        </div>

                        <h1 class="hero-title">
                            <span class="title-line-1">Transform Your</span>
                            <span class="title-line-2">
                                <span class="gradient-text typed-text" id="typedText"></span>
                                <span class="cursor">|</span>
                            </span>
                            <span class="title-line-3">Presence</span>
                        </h1>

                        <p class="hero-subtitle">
                            We create <span class="highlight-text">stunning web & mobile applications</span>
                            with powerful <span class="highlight-text">digital marketing strategies</span>
                            to grow your business exponentially
                        </p>

                        <div class="hero-tags">
                            <span class="tag" data-aos="fade-up" data-aos-delay="100">
                                <i class="fas fa-check-circle"></i> Web Development
                            </span>
                            <span class="tag" data-aos="fade-up" data-aos-delay="200">
                                <i class="fas fa-check-circle"></i> Mobile Apps
                            </span>
                            <span class="tag" data-aos="fade-up" data-aos-delay="300">
                                <i class="fas fa-check-circle"></i> Digital Marketing
                            </span>
                        </div>

                        <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
                            <a href="contact.html" class="btn btn-primary-gradient">
                                <span class="btn-text">Start Your Project</span>
                                <span class="btn-icon"><i class="fas fa-rocket"></i></span>
                                <span class="btn-shine"></span>
                            </a>
                            <a href="portfolio.html" class="btn btn-glass">
                                <span class="play-icon">
                                    <i class="fas fa-briefcase"></i>
                                </span>
                                <span class="btn-text">View Portfolio</span>
                            </a>
                        </div>

                        <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-number" data-count="250">0</h3>
                                    <p class="stat-label">Projects Completed</p>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-number" data-count="180">0</h3>
                                    <p class="stat-label">Happy Clients</p>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-number" data-count="15">0</h3>
                                    <p class="stat-label">Years Experience</p>
                                </div>
                            </div>
                        </div>

                        <div class="trusted-by" data-aos="fade-up" data-aos-delay="600">
                            <p class="trusted-label">Trusted by leading brands</p>
                            <div class="brand-logos">
                                <img src="https://logo.clearbit.com/google.com" alt="Google" class="brand-logo">
                                <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft" class="brand-logo">
                                <img src="https://logo.clearbit.com/amazon.com" alt="Amazon" class="brand-logo">
                                <img src="https://logo.clearbit.com/meta.com" alt="Meta" class="brand-logo">
                                <img src="https://logo.clearbit.com/apple.com" alt="Apple" class="brand-logo">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-visual">
                        <div class="card-stack">
                            <div class="stack-card card-1" data-tilt>
                                <div class="card-glow"></div>
                                <div class="card-content">
                                    <div class="card-icon">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <h4>Web Development</h4>
                                    <p>Cutting-edge web solutions</p>
                                    <div class="card-stats">
                                        <span><i class="fas fa-check"></i> 150+ Projects</span>
                                    </div>
                                </div>
                            </div>

                            <div class="stack-card card-2" data-tilt>
                                <div class="card-glow"></div>
                                <div class="card-content">
                                    <div class="card-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <h4>Mobile Apps</h4>
                                    <p>iOS & Android Excellence</p>
                                    <div class="card-stats">
                                        <span><i class="fas fa-check"></i> 100+ Apps</span>
                                    </div>
                                </div>
                            </div>

                            <div class="stack-card card-3" data-tilt>
                                <div class="card-glow"></div>
                                <div class="card-content">
                                    <div class="card-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <h4>Digital Marketing</h4>
                                    <p>Data-driven growth</p>
                                    <div class="card-stats">
                                        <span><i class="fas fa-check"></i> 300% ROI</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="floating-elements">
                            <div class="float-item item-1"><i class="fab fa-react"></i></div>
                            <div class="float-item item-2"><i class="fab fa-node"></i></div>
                            <div class="float-item item-3"><i class="fab fa-python"></i></div>
                            <div class="float-item item-4"><i class="fab fa-angular"></i></div>
                            <div class="float-item item-5"><i class="fab fa-aws"></i></div>
                        </div>

                        <div class="animated-rings">
                            <div class="ring ring-1"></div>
                            <div class="ring ring-2"></div>
                            <div class="ring ring-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="800">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <p>Scroll to explore</p>
        </div>

        <div class="social-proof-ticker">
            <div class="ticker-content">
                <span class="ticker-item">🚀 New project launched!</span>
                <span class="ticker-item">⭐ 5-star rated on Clutch</span>
                <span class="ticker-item">🏆 Award-winning agency 2024</span>
                <span class="ticker-item">💼 50+ enterprises trust us</span>
                <span class="ticker-item">🚀 New project launched!</span>
                <span class="ticker-item">⭐ 5-star rated on Clutch</span>
            </div>
        </div>
    </section>

    <!-- Creative Services Section -->
    <section class="services-preview-creative py-5">
        <div class="container">
            <div class="section-bg-elements">
                <div class="bg-circle circle-1"></div>
                <div class="bg-circle circle-2"></div>
            </div>

            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">What We Do</span>
                <h2 class="section-title-creative-dark">Our Core Services</h2>
                <p class="section-subtitle-creative">Comprehensive digital solutions to elevate your business to new
                    heights</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="services.html#web-app" class="service-link-creative">
                        <div class="service-card-creative">
                            <div class="service-card-bg"></div>
                            <div class="service-number">01</div>
                            <div class="service-icon-creative">
                                <div class="icon-bg-pulse"></div>
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3>Web Application</h3>
                            <p>Custom web applications built with latest technologies for optimal performance and
                                seamless user experience</p>

                            <div class="service-hover-effect"></div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="services.html#mobile-app" class="service-link-creative">
                        <div class="service-card-creative">
                            <div class="service-card-bg"></div>
                            <div class="service-number">02</div>
                            <div class="service-icon-creative">
                                <div class="icon-bg-pulse"></div>
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Mobile Application</h3>
                            <p>Native & cross-platform mobile apps for iOS and Android with exceptional performance and
                                UI</p>

                            <div class="service-hover-effect"></div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="services.html#digital-marketing" class="service-link-creative">
                        <div class="service-card-creative">
                            <div class="service-card-bg"></div>
                            <div class="service-number">03</div>
                            <div class="service-icon-creative">
                                <div class="icon-bg-pulse"></div>
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Digital Marketing</h3>
                            <p>Complete digital marketing solutions to boost your online presence and drive measurable
                                results</p>
                            <div class="service-hover-effect"></div>
                        </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="services.html" class="btn-view-all">
                    <span>View All Services</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Process Section with Missile -->
    <section class="process-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">Our Process</span>
                <h2 class="section-title-creative-dark">How We Work</h2>
                <p class="section-subtitle-creative">Watch our rocket journey through each phase</p>
            </div>

            <div class="process-timeline-horizontal" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-progress-line">
                    <div class="timeline-progress-fill" id="progressBar"></div>

                    <div class="process-missile" id="processMissile">
                        <div class="missile-flames">
                            <div class="flame flame-1"></div>
                            <div class="flame flame-2"></div>
                            <div class="flame flame-3"></div>
                        </div>
                        <div class="missile-body">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="missile-trail"></div>
                        <div class="missile-particles">
                            <span class="particle"></span>
                            <span class="particle"></span>
                            <span class="particle"></span>
                            <span class="particle"></span>
                            <span class="particle"></span>
                        </div>
                    </div>
                </div>

                <div class="process-steps-row">
                    <div class="process-step-horizontal" data-step="1">
                        <div class="step-circle-horizontal">
                            <div class="step-pulse"></div>
                            <div class="step-number-badge">01</div>
                            <div class="step-icon-container">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="step-ring"></div>
                        </div>
                        <div class="step-content-horizontal">
                            <h4>Consultation</h4>
                            <p>We listen to your needs and understand your goals</p>
                            <ul class="step-features-horizontal">
                                <li><i class="fas fa-check-circle"></i> Free consultation</li>
                                <li><i class="fas fa-check-circle"></i> Requirement analysis</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-step-horizontal" data-step="2">
                        <div class="step-circle-horizontal">
                            <div class="step-pulse"></div>
                            <div class="step-number-badge">02</div>
                            <div class="step-icon-container">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <div class="step-ring"></div>
                        </div>
                        <div class="step-content-horizontal">
                            <h4>Planning</h4>
                            <p>Create a detailed strategy and project roadmap</p>
                            <ul class="step-features-horizontal">
                                <li><i class="fas fa-check-circle"></i> Strategy development</li>
                                <li><i class="fas fa-check-circle"></i> Timeline creation</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-step-horizontal" data-step="3">
                        <div class="step-circle-horizontal">
                            <div class="step-pulse"></div>
                            <div class="step-number-badge">03</div>
                            <div class="step-icon-container">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="step-ring"></div>
                        </div>
                        <div class="step-content-horizontal">
                            <h4>Development</h4>
                            <p>Build your solution with cutting-edge technology</p>
                            <ul class="step-features-horizontal">
                                <li><i class="fas fa-check-circle"></i> Agile methodology</li>
                                <li><i class="fas fa-check-circle"></i> Regular updates</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-step-horizontal" data-step="4">
                        <div class="step-circle-horizontal">
                            <div class="step-pulse"></div>
                            <div class="step-number-badge">04</div>
                            <div class="step-icon-container">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="step-ring"></div>
                        </div>
                        <div class="step-content-horizontal">
                            <h4>Launch</h4>
                            <p>Deploy and provide ongoing support & maintenance</p>
                            <ul class="step-features-horizontal">
                                <li><i class="fas fa-check-circle"></i> Quality assurance</li>
                                <li><i class="fas fa-check-circle"></i> 24/7 support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="process-controls" data-aos="fade-up" data-aos-delay="500">
                <button class="control-btn" id="prevStep">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="flow-indicators">
                    <div class="flow-dot active" data-flow="1">
                        <span class="dot-label">Start</span>
                    </div>
                    <div class="flow-dot" data-flow="2">
                        <span class="dot-label">Plan</span>
                    </div>
                    <div class="flow-dot" data-flow="3">
                        <span class="dot-label">Build</span>
                    </div>
                    <div class="flow-dot" data-flow="4">
                        <span class="dot-label">Launch</span>
                    </div>
                </div>
                <button class="control-btn" id="nextStep">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="process-status" data-aos="fade-up" data-aos-delay="600">
                <div class="status-info">
                    <span class="status-label">Current Phase:</span>
                    <span class="status-value" id="currentPhase">Consultation</span>
                </div>
                <div class="status-progress">
                    <span class="status-label">Progress:</span>
                    <span class="status-value" id="progressPercent">0%</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Creative Features Section -->
    <section class="features-creative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="features-visual">
                        <div class="dashboard-mockup">
                            <div class="mockup-header">
                                <span class="dot dot-red"></span>
                                <span class="dot dot-yellow"></span>
                                <span class="dot dot-green"></span>
                            </div>
                            <div class="mockup-content">
                                <div class="graph-container">
                                    <svg class="animated-graph" viewBox="0 0 300 150">
                                        <defs>
                                            <linearGradient id="graphGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                <stop offset="0%" style="stop-color:#6366f1;stop-opacity:0.5" />
                                                <stop offset="100%" style="stop-color:#6366f1;stop-opacity:0" />
                                            </linearGradient>
                                        </defs>
                                        <path class="graph-line"
                                            d="M 0 100 L 50 80 L 100 60 L 150 70 L 200 40 L 250 30 L 300 20"
                                            stroke="#6366f1" stroke-width="3" fill="none" />
                                        <path class="graph-fill"
                                            d="M 0 100 L 50 80 L 100 60 L 150 70 L 200 40 L 250 30 L 300 20 L 300 150 L 0 150 Z"
                                            fill="url(#graphGradient)" />
                                    </svg>
                                </div>

                                <div class="mini-stats">
                                    <div class="mini-stat-card">
                                        <i class="fas fa-arrow-up"></i>
                                        <span>+45%</span>
                                    </div>
                                    <div class="mini-stat-card">
                                        <i class="fas fa-users"></i>
                                        <span>2.5K</span>
                                    </div>
                                    <div class="mini-stat-card">
                                        <i class="fas fa-chart-bar"></i>
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="feature-float-icons">
                            <div class="float-icon icon-1"><i class="fas fa-rocket"></i></div>
                            <div class="float-icon icon-2"><i class="fas fa-shield-alt"></i></div>
                            <div class="float-icon icon-3"><i class="fas fa-bolt"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="features-content">
                        <span class="section-label">Why Choose Us</span>
                        <h2 class="section-title-creative-dark">We Deliver Excellence in Every Project</h2>
                        <p class="features-description">We combine creativity, technology, and strategy to deliver
                            exceptional results that drive your business forward.</p>

                        <div class="feature-items">
                            <div class="feature-item-creative" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-icon-box">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="feature-content-box">
                                    <h4>Award-Winning Team</h4>
                                    <p>Our expert team has won multiple industry awards for excellence in design and
                                        development</p>
                                </div>
                            </div>

                            <div class="feature-item-creative" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon-box">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="feature-content-box">
                                    <h4>On-Time Delivery</h4>
                                    <p>We respect deadlines and deliver projects on schedule without compromising
                                        quality</p>
                                </div>
                            </div>

                            <div class="feature-item-creative" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon-box">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="feature-content-box">
                                    <h4>24/7 Support</h4>
                                    <p>Round-the-clock support to ensure your business runs smoothly at all times</p>
                                </div>
                            </div>

                            <div class="feature-item-creative" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-icon-box">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-content-box">
                                    <h4>Security First</h4>
                                    <p>We prioritize security and data protection in every project we undertake</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-creative py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">Testimonials</span>
                <h2 class="section-title-creative-dark">What Our Clients Say</h2>
                <p class="section-subtitle-creative">Real feedback from our satisfied clients around the world</p>
            </div>

            <div class="testimonials-slider" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonials-track" id="testimonialsTrack">
                    <div class="testimonial-card-creative">
                        <div class="testimonial-bg-glow"></div>
                        <div class="client-info-creative mb-1">
                            <div class="client-avatar">
                                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Client">
                                <div class="avatar-ring"></div>
                            </div>
                            <div class="client-details">
                                <h5>John Smith</h5>
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"ShivaTechDigital transformed our online presence completely. Their web
                            application is exactly what we needed. The team was professional and delivered on time!"</p>
                    </div>

                    <div class="testimonial-card-creative">
                        <div class="testimonial-bg-glow"></div>
                        <div class="client-info-creative">
                            <div class="client-avatar">
                                <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Client">
                                <div class="avatar-ring"></div>
                            </div>
                            <div class="client-details">
                                <h5>Sarah Johnson</h5>
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <p class="testimonial-text">"The mobile app they developed for us is amazing! Works flawlessly
                            on both iOS and Android. Their attention to detail and user experience is outstanding."</p>
                    </div>

                    <div class="testimonial-card-creative">
                        <div class="testimonial-bg-glow"></div>
                        <div class="client-info-creative">
                            <div class="client-avatar">
                                <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Client">
                                <div class="avatar-ring"></div>
                            </div>
                            <div class="client-details">
                                <h5>Michael Brown</h5>
                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"Outstanding digital marketing services! Our traffic increased by
                            300% in just 3 months. ShivaTechDigital knows what they're doing and delivers real results!"</p>
                    </div>
                    <div class="testimonial-card-creative">
                        <div class="testimonial-bg-glow"></div>
                        <div class="client-info-creative">
                            <div class="client-avatar">
                                <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Client">
                                <div class="avatar-ring"></div>
                            </div>
                            <div class="client-details">
                                <h5>Emily Davis</h5>

                                <div class="stars-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">"Working with ShivaTechDigital has been a game-changer for our business.
                            Their innovative solutions and customer-first approach set them apart from others."</p>

                    </div>
                </div>

                <div class="slider-controls">
                    <button class="slider-btn prev-btn" id="prevTestimonial">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="slider-dots" id="testimonialDots"></div>
                    <button class="slider-btn next-btn" id="nextTestimonial">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="trust-badges" data-aos="fade-up" data-aos-delay="400">
                <div class="trust-badge">
                    <i class="fas fa-star"></i>
                    <div>
                        <strong>4.9/5</strong>
                        <span>Average Rating</span>
                    </div>
                </div>
                <div class="trust-badge">
                    <i class="fas fa-award"></i>
                    <div>
                        <strong>50+</strong>
                        <span>Awards Won</span>
                    </div>
                </div>
                <div class="trust-badge">
                    <i class="fas fa-users"></i>
                    <div>
                        <strong>500+</strong>
                        <span>Happy Clients</span>
                    </div>
                </div>
                <div class="trust-badge">
                    <i class="fas fa-globe"></i>
                    <div>
                        <strong>30+</strong>
                        <span>Countries Served</span>
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
                <h2 class="section-title-creative-dark">Ready to Transform Your Digital Presence?</h2>
                <p>Let's discuss how we can help you achieve your digital goals and take your business to the next level
                </p>

                <div class="cta-buttons">
                    <a href="contact.html" class="btn-cta-primary">
                        <span>Get Free Consultation</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="portfolio.html" class="btn-cta-secondary">
                        <span>View Our Work</span>
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
                        <span>Money-Back Guarantee</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection