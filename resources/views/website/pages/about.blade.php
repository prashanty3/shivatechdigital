@extends('website.index')
@section('title', 'About Us - ' . ($settings->site_name ?? ''))
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
                    <span class="page-badge">{{ $about->page_badge ?? 'About ShivaTechDigital'}}</span>
                    <h1 class="page-title">{{ $about->page_title?? 'Transforming Businesses Through Innovation'}}</h1>
                    <p class="page-subtitle">{{ $about->page_subtitle?? 'We are a team of passionate experts dedicated to helping businesses thrive in the digital world through cutting-edge technology and creative solutions.'}}</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="header-stats">
                        <div class="header-stat-item">
                            <h3 class="stat-number" data-count="{{ $about->years_experience?? '15'}}">0</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="header-stat-item">
                            <h3 class="stat-number" data-count="{{ $about->projects_delivered?? '250'}}">0</h3>
                            <p>Projects Delivered</p>
                        </div>
                        <div class="header-stat-item">
                            <h3 class="stat-number" data-count="{{ $about->team_members_count?? '50'}}">0</h3>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-content-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image-wrapper">
                        @if($about->about_image ?? '')
                            <img src="{{ asset('storage/' . $about->about_image)?? 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800'}}" alt="About Us" class="img-fluid">
                        @else
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800" alt="About Us" class="img-fluid">
                        @endif
                        <div class="about-image-decoration" style="z-index: 10000;">
                            <div class="deco-element element-1"></div>
                            <div class="deco-element element-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 founder-message" data-aos="fade-left">
                    <span class="section-label">{{ $about->section_label?? 'Who We Are'}}</span>
                    <h2 class="section-title-creative-dark">{{ $about->section_title?? 'We Create Digital Excellence'}}</h2>
                    <p class="lead">{{ $about->lead_text?? 'SivaTechDigital (STD) is a leading digital marketing and development agency committed to transforming businesses through cutting-edge technology and innovative marketing strategies.'}}</p>
                    {!! nl2br(e($about->description ?? 'Founded with a vision to bridge the gap between technology and business growth, we have evolved into a full-service digital agency serving clients across the globe. Our team of passionate professionals brings together expertise in web development, mobile app creation, and comprehensive digital marketing to deliver solutions that drive real results.
                    <br>We believe in the power of digital transformation and work tirelessly to help our clients stay ahead in an increasingly competitive digital landscape. Every project we undertake is treated with the same level of dedication and commitment to excellence, regardless of size or scope.')) !!}
                    
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <i class="{{ $about->highlight_1_icon?? ''}}"></i>
                            <div>
                                <h5>{{ $about->highlight_1_title?? 'Award-Winning'}}</h5>
                                <p>{{ $about->highlight_1_text?? '50+ industry awards'}}</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <i class="{{ $about->highlight_2_icon?? ''}}"></i>
                            <div>
                                <h5>{{ $about->highlight_2_title?? 'Expert Team'}}</h5>
                                <p>{{ $about->highlight_2_text?? '50+ specialists'}}</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <i class="{{ $about->highlight_3_icon?? ''}}"></i>
                            <div>
                                <h5>{{ $about->highlight_3_title?? 'Global Reach'}}</h5>
                                <p>{{ $about->highlight_3_text?? '30+ countries'}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Message Section -->
    <section class="founder-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="founder-image">
                        @if($about->founder_image ?? '')
                            <img src="{{ asset('storage/' . $about->founder_image)?? ''}}" alt="{{ $about->founder_name?? ''}}" class="img-fluid rounded">
                        @else
                            <img src="/images/founder.png" alt="{{ $about->founder_name?? ''}}" class="img-fluid rounded">
                        @endif
                        <div class="founder-badge">
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="founder-content">
                        <span class="founder-label">{{ $about->founder_label?? 'Message from our Founder'}}</span>
                        <h2 class="section-title">{{ $about->founder_name?? 'Shweta Singh'}}</h2>
                        <p class="founder-title">{{ $about->founder_title?? 'Founder & CEO, SivaTechDigital'}}</p>

                        <div class="founder-message">
                            {!! nl2br(e($about->founder_message ?? '')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="mission-vision-card">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>{{ $about->mission_text ?? 'To empower businesses with innovative digital solutions that drive growth and success.'}}</p>
                        <div class="card-decoration"></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-vision-card">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>{{ $about->vision_text ?? 'To be a global leader in digital transformation, helping businesses harness the power of technology to achieve their goals.'}}</p>
                        <div class="card-decoration"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Core Values Section -->
    @if(isset($coreValues) && $coreValues->count() > 0)
    <section class="values-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">Our Values</span>
                <h2 class="section-title-creative">What Drives Us Forward</h2>
                <p class="section-subtitle-creative">The principles that guide everything we do</p>
            </div>
            <div class="row g-4">
                @foreach($coreValues as $value)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="{{ $value->icon ?? 'fas fa-lightbulb' }}"></i>
                        </div>
                        <h4>{{ $value->title ?? 'Innovation' }}</h4>
                        <p>{{ $value->description ?? 'We constantly explore new technologies and creative solutions.' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Team Section -->
    @if(isset($teamMembers) && $teamMembers->count() > 0)
    <section class="team-section py-5 bg-alternate">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">Our Team</span>
                <h2 class="section-title-creative-dark">Meet The Experts</h2>
                <p class="section-subtitle-creative">The talented people behind our success</p>
            </div>
            <div class="row g-4">
                @foreach($teamMembers as $member)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="team-card-creative">
                        <div class="team-image-wrapper">
                            @if($member->image)
                                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($member->name) }}&size=400" alt="{{ $member->name }}">
                            @endif
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="{{ $member->linkedin_url }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $member->twitter_url }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="mailto:{{ $member->email }}"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4>{{ $member->name }}</h4>
                            <p class="role">{{ $member->role }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Timeline Section -->
    @if(isset($timelineItems) && $timelineItems->count() > 0)
    <section class="timeline-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-label">Our Journey</span>
                <h2 class="section-title-creative-dark">{{ $about->years_experience ?? 15 }} Years of Excellence</h2>
                <p class="section-subtitle-creative">Key milestones in our growth story</p>
            </div>
            <div class="timeline">
                @foreach($timelineItems as $timeline)
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="timeline-icon">
                        <i class="{{ $timeline->icon ?? 'fas fa-flag' }}"></i>
                    </div>
                    <div class="timeline-content">
                        <h4>{{ $timeline->year }} - {{ $timeline->title }}</h4>
                        <p>{{ $timeline->description }}</p>
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
                    <i class="fas fa-users"></i>
                </div>
                <h2>{{ $about->cta_title?? 'Want to Join our Team?'}}</h2>
                <p>{{ $about->cta_subtitle?? 'We are always looking for talented individuals to join our team and help us drive innovation and excellence.'}}</p>
                
                <div class="cta-buttons">
                    <a href="{{ route('contact')?? ''}}" class="btn-cta-primary">
                        <span>View Careers</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('contact')?? ''}}" class="btn-cta-secondary">
                        <span>Get In Touch</span>
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection