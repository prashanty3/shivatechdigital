// ========================================
// DIGIMAX JAVASCRIPT - COMPLETE VERSION
// Version: 1.0
// ========================================

(function() {
    'use strict';

    // ========================================
    // Global Variables
    // ========================================
    let autoPlayInterval = null;
    let isScrolling = false;
    let testimonialsAutoPlay = null;

    // ========================================
    // Initialize AOS (Animate On Scroll)
    // ========================================
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: false,
            easing: 'ease-out-cubic'
        });
    }

    // ========================================
    // Utility Functions
    // ========================================
    
    // Debounce function
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Throttle function
    function throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // ========================================
    // Navbar Scroll Effect
    // ========================================
    const handleNavbarScroll = throttle(function() {
        const navbar = document.getElementById('mainNav');
        if (navbar) {
            if (window.pageYOffset > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
    }, 100);

    // ========================================
    // Counter Animation
    // ========================================
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        if (isNaN(target)) return;
        
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target + '+';
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Intersection Observer for counters
    function initCounterObserver() {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number');
                    counters.forEach(counter => {
                        const currentText = counter.textContent.trim();
                        if (currentText === '0' || currentText === '') {
                            animateCounter(counter);
                        }
                    });
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statSections = document.querySelectorAll('.hero-stats, .about-stats, .header-stats, .header-stats-vertical');
        statSections.forEach(section => {
            counterObserver.observe(section);
        });
    }

    // ========================================
    // Portfolio Filter
    // ========================================
    function initPortfolioFilter() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        if (filterButtons.length === 0) return;

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    
                    if (filterValue === 'all' || category === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // ========================================
    // Contact Form Handling
    // ========================================
    function initContactForm() {
        const contactForm = document.getElementById('contactForm');
        if (!contactForm) return;

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const formData = {
                name: document.getElementById('name')?.value.trim(),
                email: document.getElementById('email')?.value.trim(),
                phone: document.getElementById('phone')?.value.trim(),
                service: document.getElementById('service')?.value,
                subject: document.getElementById('subject')?.value.trim(),
                message: document.getElementById('message')?.value.trim()
            };

            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const formMessage = document.getElementById('form-message');

            if (!formData.name || !formData.email || !formData.service || !formData.subject || !formData.message) {
                showFormMessage(formMessage, 'error', 'Please fill in all required fields.');
                return;
            }

            if (!emailRegex.test(formData.email)) {
                showFormMessage(formMessage, 'error', 'Please enter a valid email address.');
                return;
            }

            // Show success message
            showFormMessage(formMessage, 'success', 'Thank you! Your message has been sent successfully. We will get back to you within 24 hours.');
            
            // Reset form
            contactForm.reset();

            // Here you would typically send the data to a server
            console.log('Form Data:', formData);

            // Hide message after 5 seconds
            setTimeout(() => {
                if (formMessage) {
                    formMessage.style.display = 'none';
                }
            }, 5000);
        });
    }

    function showFormMessage(element, type, message) {
        if (!element) return;
        
        element.className = 'form-message ' + type;
        element.textContent = message;
        element.style.display = 'block';
    }

    // ========================================
    // Smooth Scroll for Anchor Links
    // ========================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '') return;

                e.preventDefault();
                const target = document.querySelector(href);
                
                if (target) {
                    const offset = 80;
                    const targetPosition = target.offsetTop - offset;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Handle links to service sections
        document.querySelectorAll('a[href^="services.html#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const hashIndex = href.indexOf('#');
                
                if (hashIndex !== -1 && window.location.pathname.includes('services.html')) {
                    e.preventDefault();
                    const targetId = href.substring(hashIndex + 1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        const offset = 100;
                        const targetPosition = targetElement.offsetTop - offset;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    }

    // ========================================
    // Parallax Effect for Hero Section
    // ========================================
    const handleParallax = throttle(function() {
        const heroSection = document.querySelector('.hero-section');
        if (!heroSection) return;

        const scrolled = window.pageYOffset;
        const parallaxElements = heroSection.querySelectorAll('.hero-image img');
        
        parallaxElements.forEach(element => {
            element.style.transform = `translateY(${scrolled * 0.3}px)`;
        });
    }, 50);

    // ========================================
    // Mobile Menu Close on Link Click
    // ========================================
    function initMobileMenu() {
        document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)').forEach(link => {
            link.addEventListener('click', function() {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const navbarToggler = document.querySelector('.navbar-toggler');
                    if (navbarToggler) {
                        navbarToggler.click();
                    }
                }
            });
        });
    }

    // ========================================
    // Service Button Hover Effects
    // ========================================
    function initServiceButtons() {
        document.querySelectorAll('.btn-service').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
            });
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    }

    // ========================================
    // Form Input Animation
    // ========================================
    function initFormInputs() {
        document.querySelectorAll('.form-control, .form-select, .form-control-creative').forEach(input => {
            input.addEventListener('focus', function() {
                const parent = this.parentElement;
                if (parent) {
                    parent.classList.add('focused');
                }
            });
            
            input.addEventListener('blur', function() {
                const parent = this.parentElement;
                if (!this.value && parent) {
                    parent.classList.remove('focused');
                }
            });
        });
    }

    // ========================================
    // Back to Top Button
    // ========================================
    function initBackToTop() {
        const backToTopButton = document.createElement('button');
        backToTopButton.innerHTML = '<i class="fas fa-arrow-up"></i>';
        backToTopButton.className = 'back-to-top';
        backToTopButton.setAttribute('aria-label', 'Back to top');

        document.body.appendChild(backToTopButton);

        const toggleBackToTop = throttle(function() {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
            }
        }, 200);

        window.addEventListener('scroll', toggleBackToTop);

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        backToTopButton.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });

        backToTopButton.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    }

    // ========================================
    // PROCESS TIMELINE WITH MISSILE ANIMATION
    // ========================================
    function initProcessTimeline() {
        const progressBar = document.getElementById('progressBar');
        const processMissile = document.getElementById('processMissile');
        const processSteps = document.querySelectorAll('.process-step-horizontal');
        const flowDots = document.querySelectorAll('.flow-dot');
        const prevBtn = document.getElementById('prevStep');
        const nextBtn = document.getElementById('nextStep');
        const currentPhaseElement = document.getElementById('currentPhase');
        const progressPercentElement = document.getElementById('progressPercent');
        
        if (!progressBar || !processSteps.length || !processMissile) return;

        let currentStep = 0;
        const totalSteps = processSteps.length;
        let autoPlayInterval = null;
        const phaseNames = ['Consultation', 'Planning', 'Development', 'Launch'];

        // Calculate step positions
        function getStepPositions() {
            const positions = [];
            const isMobile = window.innerWidth < 992;
            
            if (isMobile) {
                // Vertical layout positions
                processSteps.forEach((step, index) => {
                    const stepCircle = step.querySelector('.step-circle-horizontal');
                    if (stepCircle) {
                        const rect = stepCircle.getBoundingClientRect();
                        const containerRect = document.querySelector('.timeline-progress-line').getBoundingClientRect();
                        const relativeTop = rect.top - containerRect.top + rect.height / 2;
                        const percentage = (relativeTop / containerRect.height) * 100;
                        positions.push(Math.min(Math.max(percentage, 0), 100));
                    }
                });
            } else {
                // Horizontal layout positions
                positions.push(0);    // Step 1
                positions.push(33.3); // Step 2
                positions.push(66.6); // Step 3
                positions.push(100);  // Step 4
            }
            
            return positions;
        }

        // Activate a step with missile movement
        function activateStep(stepIndex, immediate = false) {
            if (stepIndex < 0) stepIndex = 0;
            if (stepIndex >= totalSteps) stepIndex = totalSteps - 1;
            
            currentStep = stepIndex;
            const positions = getStepPositions();
            const isMobile = window.innerWidth < 992;

            // Update all steps
            processSteps.forEach((step, index) => {
                step.classList.remove('active', 'completed');
                if (index < stepIndex) {
                    step.classList.add('completed');
                } else if (index === stepIndex) {
                    step.classList.add('active');
                }
            });

            // Update flow dots
            flowDots.forEach((dot, index) => {
                dot.classList.toggle('active', index === stepIndex);
            });

            // Move missile
            if (processMissile) {
                if (immediate) {
                    processMissile.style.transition = 'none';
                } else {
                    processMissile.style.transition = isMobile 
                        ? 'top 2s cubic-bezier(0.4, 0, 0.2, 1)' 
                        : 'left 2s cubic-bezier(0.4, 0, 0.2, 1)';
                }
                
                if (isMobile) {
                    processMissile.style.top = positions[stepIndex] + '%';
                } else {
                    processMissile.style.left = positions[stepIndex] + '%';
                }
                
                if (immediate) {
                    setTimeout(() => {
                        processMissile.style.transition = isMobile 
                            ? 'top 2s cubic-bezier(0.4, 0, 0.2, 1)' 
                            : 'left 2s cubic-bezier(0.4, 0, 0.2, 1)';
                    }, 50);
                }
            }

            // Update progress bar
            const progress = (stepIndex / (totalSteps - 1)) * 100;
            if (isMobile) {
                progressBar.style.height = progress + '%';
                progressBar.style.width = '100%';
            } else {
                progressBar.style.width = progress + '%';
                progressBar.style.height = '100%';
            }

            // Update status text
            if (currentPhaseElement) {
                currentPhaseElement.textContent = phaseNames[stepIndex];
            }
            if (progressPercentElement) {
                progressPercentElement.textContent = Math.round(progress) + '%';
            }

            // Update button states
            if (prevBtn) {
                prevBtn.style.opacity = stepIndex === 0 ? '0.5' : '1';
                prevBtn.style.cursor = stepIndex === 0 ? 'not-allowed' : 'pointer';
                prevBtn.disabled = stepIndex === 0;
            }
            if (nextBtn) {
                nextBtn.style.opacity = stepIndex === totalSteps - 1 ? '0.5' : '1';
                nextBtn.style.cursor = stepIndex === totalSteps - 1 ? 'not-allowed' : 'pointer';
                nextBtn.disabled = stepIndex === totalSteps - 1;
            }

            // Trigger explosion effect at destination
            if (!immediate) {
                setTimeout(() => {
                    createExplosion(stepIndex);
                }, 2000);
            }
        }

        // Create explosion effect when missile reaches destination
        function createExplosion(stepIndex) {
            const step = processSteps[stepIndex];
            if (!step) return;

            const circle = step.querySelector('.step-circle-horizontal');
            if (!circle) return;

            // Create explosion particles
            for (let i = 0; i < 12; i++) {
                const particle = document.createElement('div');
                particle.className = 'explosion-particle';
                particle.style.cssText = `
                    position: absolute;
                    width: 8px;
                    height: 8px;
                    background: radial-gradient(circle, #fff, #6366f1, transparent);
                    border-radius: 50%;
                    top: 50%;
                    left: 50%;
                    pointer-events: none;
                    z-index: 100;
                `;
                
                circle.appendChild(particle);
                
                const angle = (i / 12) * Math.PI * 2;
                const distance = 50;
                const x = Math.cos(angle) * distance;
                const y = Math.sin(angle) * distance;
                
                particle.animate([
                    { transform: 'translate(-50%, -50%) scale(1)', opacity: 1 },
                    { transform: `translate(calc(-50% + ${x}px), calc(-50% + ${y}px)) scale(0)`, opacity: 0 }
                ], {
                    duration: 800,
                    easing: 'cubic-bezier(0.4, 0, 0.2, 1)'
                }).onfinish = () => particle.remove();
            }
        }

        // Auto-play
        function autoPlay() {
            currentStep = (currentStep + 1) % totalSteps;
            activateStep(currentStep);
        }

        function startAutoPlay() {
            stopAutoPlay();
            autoPlayInterval = setInterval(autoPlay, 4000);
        }

        function stopAutoPlay() {
            if (autoPlayInterval) {
                clearInterval(autoPlayInterval);
                autoPlayInterval = null;
            }
        }

        // Initialize
        activateStep(0, true);
        setTimeout(() => startAutoPlay(), 1000);

        // Button controls
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentStep > 0) {
                    stopAutoPlay();
                    activateStep(currentStep - 1);
                    setTimeout(startAutoPlay, 6000);
                }
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                if (currentStep < totalSteps - 1) {
                    stopAutoPlay();
                    activateStep(currentStep + 1);
                    setTimeout(startAutoPlay, 6000);
                }
            });
        }

        // Flow dot controls
        flowDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                stopAutoPlay();
                activateStep(index);
                setTimeout(startAutoPlay, 6000);
            });
        });

        // Step click controls
        processSteps.forEach((step, index) => {
            step.addEventListener('click', () => {
                stopAutoPlay();
                activateStep(index);
                setTimeout(startAutoPlay, 6000);
            });
        });

        // Pause on hover
        const processSection = document.querySelector('.process-timeline-horizontal');
        if (processSection) {
            processSection.addEventListener('mouseenter', stopAutoPlay);
            processSection.addEventListener('mouseleave', () => {
                setTimeout(startAutoPlay, 2000);
            });
        }

        // Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    activateStep(0, true);
                    setTimeout(startAutoPlay, 1000);
                } else {
                    stopAutoPlay();
                }
            });
        }, { threshold: 0.3 });

        if (processSection) {
            observer.observe(processSection);
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            const rect = processSection?.getBoundingClientRect();
            if (!rect) return;
            
            const isInView = rect.top < window.innerHeight && rect.bottom >= 0;
            
            if (isInView) {
                if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                    if (currentStep > 0) {
                        e.preventDefault();
                        stopAutoPlay();
                        activateStep(currentStep - 1);
                        setTimeout(startAutoPlay, 6000);
                    }
                } else if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                    if (currentStep < totalSteps - 1) {
                        e.preventDefault();
                        stopAutoPlay();
                        activateStep(currentStep + 1);
                        setTimeout(startAutoPlay, 6000);
                    }
                }
            }
        });

        // Handle resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                activateStep(currentStep, true);
            }, 250);
        });

        // Cleanup
        window.addEventListener('beforeunload', stopAutoPlay);
    }

    // ========================================
    // MEGA MENU ENHANCEMENT
    // ========================================
    function initMegaMenu() {
        const megaDropdown = document.querySelector('.mega-dropdown');
        const megaMenu = document.querySelector('.mega-menu');
        const dropdownToggle = document.getElementById('servicesDropdown');
        
        if (!megaDropdown || !megaMenu || !dropdownToggle) return;

        let menuTimeout;

        // Desktop hover behavior
        if (window.innerWidth >= 992) {
            megaDropdown.addEventListener('mouseenter', function() {
                clearTimeout(menuTimeout);
                megaMenu.classList.add('show');
                dropdownToggle.setAttribute('aria-expanded', 'true');
            });

            megaDropdown.addEventListener('mouseleave', function() {
                menuTimeout = setTimeout(() => {
                    megaMenu.classList.remove('show');
                    dropdownToggle.setAttribute('aria-expanded', 'false');
                }, 200);
            });
        }

        // Click behavior for mobile
        dropdownToggle.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                if (isExpanded) {
                    megaMenu.classList.remove('show');
                    this.setAttribute('aria-expanded', 'false');
                } else {
                    megaMenu.classList.add('show');
                    this.setAttribute('aria-expanded', 'true');
                }
            }
        });

        // Close menu when clicking dropdown items
        const dropdownItems = megaMenu.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                megaMenu.classList.remove('show');
                dropdownToggle.setAttribute('aria-expanded', 'false');
                
                // Close mobile navbar
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const navbarToggler = document.querySelector('.navbar-toggler');
                    if (navbarToggler) {
                        setTimeout(() => {
                            navbarToggler.click();
                        }, 300);
                    }
                }
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInside = megaDropdown.contains(event.target);
            
            if (!isClickInside && megaMenu.classList.contains('show')) {
                megaMenu.classList.remove('show');
                dropdownToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                if (window.innerWidth >= 992) {
                    megaMenu.classList.remove('show');
                    dropdownToggle.setAttribute('aria-expanded', 'false');
                }
            }, 250);
        });

        // Keyboard accessibility
        dropdownToggle.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });

        // Add animation classes when menu opens
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === 'class') {
                    const isOpen = megaMenu.classList.contains('show');
                    if (isOpen) {
                        document.body.classList.add('mega-menu-open');
                    } else {
                        document.body.classList.remove('mega-menu-open');
                    }
                }
            });
        });

        observer.observe(megaMenu, {
            attributes: true,
            attributeFilter: ['class']
        });
    }

    // ========================================
    // TESTIMONIALS SLIDER
    // ========================================
    function initTestimonialsSlider() {
        const track = document.getElementById('testimonialsTrack');
        const prevBtn = document.getElementById('prevTestimonial');
        const nextBtn = document.getElementById('nextTestimonial');
        const dotsContainer = document.getElementById('testimonialDots');
        
        if (!track || !prevBtn || !nextBtn) return;

        const cards = track.querySelectorAll('.testimonial-card-creative');
        const totalCards = cards.length;
        let currentIndex = 0;
        
        // Determine cards per view based on screen size
        function getCardsPerView() {
            if (window.innerWidth >= 992) return 3;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }
        
        const cardsPerView = getCardsPerView();
        const maxIndex = Math.max(0, totalCards - cardsPerView);

        // Create dots
        function createDots() {
            dotsContainer.innerHTML = '';
            for (let i = 0; i <= maxIndex; i++) {
                const dot = document.createElement('div');
                dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
                dot.addEventListener('click', () => goToSlide(i));
                dotsContainer.appendChild(dot);
            }
        }

        // Update slider position
        function updateSlider() {
            const cardWidth = cards[0].offsetWidth;
            const gap = 32; // 2rem gap
            const offset = -(currentIndex * (cardWidth + gap));
            track.style.transform = `translateX(${offset}px)`;
            
            // Update dots
            const dots = dotsContainer.querySelectorAll('.slider-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        // Go to specific slide
        function goToSlide(index) {
            currentIndex = Math.max(0, Math.min(index, maxIndex));
            updateSlider();
            resetAutoPlay();
        }

        // Next slide
        function nextSlide() {
            currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
            updateSlider();
        }

        // Previous slide
        function prevSlide() {
            currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
            updateSlider();
        }

        // Auto play
        function startAutoPlay() {
            testimonialsAutoPlay = setInterval(nextSlide, 5000);
        }

        function resetAutoPlay() {
            clearInterval(testimonialsAutoPlay);
            startAutoPlay();
        }

        // Event listeners
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoPlay();
        });

        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoPlay();
        });

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        track.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        track.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            if (touchStartX - touchEndX > 50) {
                nextSlide();
                resetAutoPlay();
            }
            if (touchEndX - touchStartX > 50) {
                prevSlide();
                resetAutoPlay();
            }
        }

        // Initialize
        createDots();
        updateSlider();
        startAutoPlay();

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                currentIndex = 0;
                updateSlider();
            }, 250);
        });
    }

    // ========================================
    // HERO EFFECTS
    // ========================================
    
    // Typing Effect
    function initTypingEffect() {
        const typedTextElement = document.getElementById('typedText');
        if (!typedTextElement) return;

        const words = ['Digital', 'Business', 'Brand', 'Online', 'Marketing'];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingSpeed = 150;

        function type() {
            const currentWord = words[wordIndex];
            
            if (isDeleting) {
                typedTextElement.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
                typingSpeed = 100;
            } else {
                typedTextElement.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
                typingSpeed = 150;
            }

            if (!isDeleting && charIndex === currentWord.length) {
                typingSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typingSpeed = 500;
            }

            setTimeout(type, typingSpeed);
        }

        type();
    }

    // Create Particles
    function initParticles() {
        const particlesContainer = document.getElementById('particles');
        if (!particlesContainer) return;

        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (15 + Math.random() * 10) + 's';
            particlesContainer.appendChild(particle);
        }
    }

    // 3D Tilt Effect for Cards
    function init3DTilt() {
        const cards = document.querySelectorAll('[data-tilt]');
        
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
            });
        });
    }

    // Initialize all hero effects
    function initHeroEffects() {
        initTypingEffect();
        initParticles();
        init3DTilt();
    }

    // ========================================
    // Unified Scroll Handler
    // ========================================
    function initScrollHandlers() {
        const scrollHandler = throttle(function() {
            handleNavbarScroll();
            handleParallax();
        }, 100);

        window.addEventListener('scroll', scrollHandler, { passive: true });
    }

    // ========================================
    // Loading Animation
    // ========================================
    function initLoadingAnimation() {
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            
            // Refresh AOS after page load
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        });
    }

    // ========================================
    // MAIN INITIALIZATION
    // ========================================
    function init() {
        // DOM Content Loaded initializations
        document.addEventListener('DOMContentLoaded', function() {
            console.log('🚀 DigiMax Website Initializing...');
            
            initCounterObserver();
            initPortfolioFilter();
            initContactForm();
            initSmoothScroll();
            initMobileMenu();
            initServiceButtons();
            initFormInputs();
            initBackToTop();
            initProcessTimeline();
            initMegaMenu();
            initTestimonialsSlider();
            initHeroEffects();
            
            console.log('✅ DigiMax Website Loaded Successfully! 🚀');
        });

        // Scroll handlers
        initScrollHandlers();
        
        // Loading animation
        initLoadingAnimation();
    }

    // ========================================
    // START APPLICATION
    // ========================================
    init();

    // ========================================
    // Cleanup on page unload
    // ========================================
    window.addEventListener('beforeunload', function() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
        }
        if (testimonialsAutoPlay) {
            clearInterval(testimonialsAutoPlay);
        }
    });

})();

// ========================================
// CONSOLE MESSAGE
// ========================================
console.log('%c DigiMax Digital Agency ', 'background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%); color: white; font-size: 20px; padding: 10px; border-radius: 5px;');
console.log('%c Website by DigiMax Team | Version 1.0 ', 'color: #6366f1; font-size: 12px;');