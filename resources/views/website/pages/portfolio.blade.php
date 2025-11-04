@extends('website.index')
@section('title', 'Portfolio - ShivaTechDigital')
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
                    <span class="page-badge">Our Portfolio</span>
                    <h1 class="page-title">Success Stories & Achievements</h1>
                    <p class="page-subtitle">Showcasing our best work and the amazing results we've delivered for our clients across the globe.</p>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="header-stats-vertical">
                        <div class="header-stat-item">
                            <h3 class="stat-number" data-count="250">0</h3>
                            <p>Completed Projects</p>
                        </div>
                        <div class="header-stat-item">
                            <h3 class="stat-number" data-count="180">0</h3>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Filter Section -->
    <section class="portfolio-filter-section py-5">
        <div class="container">
            <div class="filter-buttons-wrapper text-center mb-5" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th"></i>
                    <span>All Projects</span>
                </button>
                <button class="filter-btn" data-filter="web">
                    <i class="fas fa-laptop-code"></i>
                    <span>Web Apps</span>
                </button>
                <button class="filter-btn" data-filter="mobile">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Mobile Apps</span>
                </button>
                <button class="filter-btn" data-filter="marketing">
                    <i class="fas fa-chart-line"></i>
                    <span>Digital Marketing</span>
                </button>
                <button class="filter-btn" data-filter="design">
                    <i class="fas fa-paint-brush"></i>
                    <span>UI/UX Design</span>
                </button>
            </div>

            <div class="row g-4" id="portfolio-grid">
                <!-- Portfolio Item 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Web Application</span>
                                    <h4>E-Commerce Platform</h4>
                                    <p>Modern online shopping experience</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fab fa-react"></i> React</span>
                                <span><i class="fab fa-node"></i> Node.js</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Mobile App</span>
                                    <h4>Fitness Tracking App</h4>
                                    <p>Health & wellness on the go</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fab fa-apple"></i> iOS</span>
                                <span><i class="fab fa-android"></i> Android</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="marketing" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Digital Marketing</span>
                                    <h4>SEO Campaign</h4>
                                    <p>300% traffic increase in 6 months</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fas fa-search"></i> SEO</span>
                                <span><i class="fas fa-chart-line"></i> Analytics</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Web Application</span>
                                    <h4>SaaS Dashboard</h4>
                                    <p>Analytics & reporting platform</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fab fa-angular"></i> Angular</span>
                                <span><i class="fab fa-python"></i> Python</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Mobile App</span>
                                    <h4>Food Delivery App</h4>
                                    <p>On-demand delivery solution</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fab fa-react"></i> React Native</span>
                                <span>Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">UI/UX Design</span>
                                    <h4>Banking App Redesign</h4>
                                    <p>Modern & secure interface</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fas fa-pencil-ruler"></i> Figma</span>
                                <span><i class="fas fa-paint-brush"></i> Design</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 7 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Web Application</span>
                                    <h4>Real Estate Portal</h4>
                                    <p>Property listing platform</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fab fa-vuejs"></i> Vue.js</span>
                                <span><i class="fab fa-laravel"></i> Laravel</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 8 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="marketing" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Social Media</span>
                                    <h4>Brand Campaign</h4>
                                    <p>5M+ impressions achieved</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span><i class="fab fa-facebook"></i> Facebook</span>
                                <span><i class="fab fa-instagram"></i> Instagram</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 9 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card-creative">
                        <div class="portfolio-image">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=500&h=400&fit=crop" alt="Project">
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <span class="portfolio-category">Mobile App</span>
                                    <h4>Travel Booking App</h4>
                                    <p>Seamless booking experience</p>
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <div class="portfolio-tags">
                                <span>Flutter</span>
                                <span>Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stats Section -->
    <section class="success-stats-section py-5 bg-alternate">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">Success Metrics</span>
                <h2 class="section-title-creative-dark">Real Results, Real Impact</h2>
                <p class="section-subtitle-creative">Numbers that speak for our excellence</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="success-stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                        <h3>+300%</h3>
                        <p class="metric">Traffic Increase</p>
                        <p class="description">Average for SEO campaigns</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="success-stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <h3>1M+</h3>
                        <p class="metric">App Downloads</p>
                        <p class="description">Across all mobile projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="success-stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>450%</h3>
                        <p class="metric">Average ROI</p>
                        <p class="description">For marketing campaigns</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="success-stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>4.9/5</h3>
                        <p class="metric">Client Rating</p>
                        <p class="description">Average satisfaction score</p>
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
                    <i class="fas fa-briefcase"></i>
                </div>
                <h2>Want to See Your Project Here?</h2>
                <p>Let's create something amazing together and add your success story to our portfolio</p>
                
                <div class="cta-buttons">
                    <a href="contact.html" class="btn-cta-primary">
                        <span>Start Your Project</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="contact.html" class="btn-cta-secondary">
                        <span>Request Quote</span>
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection