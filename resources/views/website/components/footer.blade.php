<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h4><img src="{{ asset('storage/settings/logos/' . basename($settings->site_logo ?? '')) }}" alt="{{ $settings->site_name ?? 'ShivaTechDigital' }}" class="navbar-brand-icon" style="height:40px; width:auto;">{{ $settings->site_name ?? 'ShivaTechDigital'}}</h4>
                    <p>{{ $settings->site_description ?? 'Your trusted partner for web development, mobile apps, and digital marketing solutions.'}}</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Services</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('services') }}#web-app">Web Development</a></li>
                        <li><a href="{{ route('services') }}#mobile-app">Mobile Apps</a></li>
                        <li><a href="{{ route('services') }}#digital-marketing">Digital Marketing</a></li>
                        <li><a href="">SEO Services</a></li>
                        <li><a href="">UI/UX Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact Info</h5>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt"></i>{{ $settings->site_address ?? '123 Business St, NY 10001'}}</li>
                        <li><i class="fas fa-phone"></i>{{ $settings->site_phone ?? '+1 (555) 123-4567'}}</li>
                        <li><i class="fas fa-envelope"></i> {{ $settings->site_email ?? 'info@ShivaTechDigital.com'}}</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy;{{$settings->footer_text ?? ''}} | <a href="#">Privacy Policy</a> | <a href="#">Terms of
                        Service</a></p>
            </div>
        </div>
    </footer>