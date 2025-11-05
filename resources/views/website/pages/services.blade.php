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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// CSRF Token for AJAX
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Show Alert Function
function showAlert(message, type = 'success') {
    const alertHtml = `
        <div class="alert alert-${type} bg-${type}-100 text-${type}-600 border-${type}-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-3 fw-semibold text-lg radius-4 d-flex align-items-center justify-content-between" role="alert">
            <div class="d-flex align-items-center gap-2">
                <iconify-icon icon="solar:${type === 'success' ? 'check-circle' : 'danger-circle'}-bold" class="icon text-xl"></iconify-icon>
                ${message}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    document.getElementById('ajaxAlert').innerHTML = alertHtml;
    
    setTimeout(() => {
        const alert = document.querySelector('#ajaxAlert .alert');
        if (alert) {
            alert.remove();
        }
    }, 5000);
}

// ========== MAIN SERVICES ==========

// Add Main Service via AJAX
document.getElementById('addServiceForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = document.getElementById('addServiceBtn');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Adding...';
    submitBtn.disabled = true;
    
    fetch('{{ route("services.service.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('addServiceModal')).hide();
            document.getElementById('addServiceForm').reset();
            fetchServices();
            showAlert(data.message || 'Service added successfully!');
        } else {
            throw new Error(data.message || 'Failed to add service');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Edit Service via AJAX
document.getElementById('editServiceForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Updating...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'X-HTTP-Method-Override': 'PUT'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('editServiceModal')).hide();
            fetchServices();
            showAlert(data.message || 'Service updated successfully!');
        } else {
            throw new Error(data.message || 'Failed to update service');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Delete Service via AJAX
function deleteService(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This will also delete all features and technologies!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/admin/services/service/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-HTTP-Method-Override': 'DELETE',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById(`service-${id}`).remove();
                    updateServicesCount();
                    showAlert(data.message || 'Service deleted successfully!');
                } else {
                    throw new Error(data.message || 'Failed to delete service');
                }
            })
            .catch(error => {
                showAlert(error.message, 'danger');
            });
        }
    });
}

// ========== ADDITIONAL SERVICES ==========

// Add Additional Service via AJAX
document.getElementById('addAdditionalForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = document.getElementById('addAdditionalBtn');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Adding...';
    submitBtn.disabled = true;
    
    fetch('{{ route("services.additional.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('addAdditionalModal')).hide();
            document.getElementById('addAdditionalForm').reset();
            fetchAdditionalServices();
            showAlert(data.message || 'Additional service added successfully!');
        } else {
            throw new Error(data.message || 'Failed to add additional service');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Edit Additional Service via AJAX
document.getElementById('editAdditionalForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Updating...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'X-HTTP-Method-Override': 'PUT'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('editAdditionalModal')).hide();
            fetchAdditionalServices();
            showAlert(data.message || 'Additional service updated successfully!');
        } else {
            throw new Error(data.message || 'Failed to update additional service');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Delete Additional Service via AJAX
function deleteAdditional(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/admin/services/additional/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-HTTP-Method-Override': 'DELETE',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById(`additional-${id}`).remove();
                    updateAdditionalCount();
                    showAlert(data.message || 'Additional service deleted successfully!');
                } else {
                    throw new Error(data.message || 'Failed to delete additional service');
                }
            })
            .catch(error => {
                showAlert(error.message, 'danger');
            });
        }
    });
}

// ========== FEATURES ==========

// Add Feature via AJAX
document.querySelector('#addFeatureModal form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Adding...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('addFeatureModal')).hide();
            this.reset();
            viewService(document.getElementById('feature_service_id').value);
            showAlert(data.message || 'Feature added successfully!');
        } else {
            throw new Error(data.message || 'Failed to add feature');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Edit Feature via AJAX
document.getElementById('editFeatureForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Updating...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'X-HTTP-Method-Override': 'PUT'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('editFeatureModal')).hide();
            const serviceId = new URL(this.action).pathname.split('/').pop();
            viewService(serviceId);
            showAlert(data.message || 'Feature updated successfully!');
        } else {
            throw new Error(data.message || 'Failed to update feature');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Delete Feature via AJAX
function deleteFeature(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/admin/services/feature/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-HTTP-Method-Override': 'DELETE',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const serviceId = document.getElementById('feature_service_id').value;
                    viewService(serviceId);
                    showAlert(data.message || 'Feature deleted successfully!');
                } else {
                    throw new Error(data.message || 'Failed to delete feature');
                }
            })
            .catch(error => {
                showAlert(error.message, 'danger');
            });
        }
    });
}

// ========== TECHNOLOGIES ==========

// Add Technology via AJAX
document.querySelector('#addTechnologyModal form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Adding...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('addTechnologyModal')).hide();
            this.reset();
            viewService(document.getElementById('technology_service_id').value);
            showAlert(data.message || 'Technology added successfully!');
        } else {
            throw new Error(data.message || 'Failed to add technology');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Edit Technology via AJAX
document.getElementById('editTechnologyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span> Updating...';
    submitBtn.disabled = true;
    
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'X-HTTP-Method-Override': 'PUT'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            bootstrap.Modal.getInstance(document.getElementById('editTechnologyModal')).hide();
            const serviceId = new URL(this.action).pathname.split('/').pop();
            viewService(serviceId);
            showAlert(data.message || 'Technology updated successfully!');
        } else {
            throw new Error(data.message || 'Failed to update technology');
        }
    })
    .catch(error => {
        showAlert(error.message, 'danger');
    })
    .finally(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

// Delete Technology via AJAX
function deleteTechnology(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/admin/services/technology/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-HTTP-Method-Override': 'DELETE',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const serviceId = document.getElementById('technology_service_id').value;
                    viewService(serviceId);
                    showAlert(data.message || 'Technology deleted successfully!');
                } else {
                    throw new Error(data.message || 'Failed to delete technology');
                }
            })
            .catch(error => {
                showAlert(error.message, 'danger');
            });
        }
    });
}

// ========== HELPER FUNCTIONS ==========

// Fetch and update services list
function fetchServices() {
    fetch('{{ route("services.index") }}?ajax=1')
        .then(response => response.json())
        .then(data => {
            // Update services container
            fetch('/admin/services/partials/services-list')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('servicesContainer').innerHTML = html;
                    updateServicesCount();
                });
        })
        .catch(error => {
            console.error('Error fetching services:', error);
        });
}

// Fetch and update additional services list
function fetchAdditionalServices() {
    fetch('{{ route("services.index") }}?ajax=1')
        .then(response => response.json())
        .then(data => {
            // Update additional services container
            fetch('/admin/services/partials/additional-services-list')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('additionalServicesContainer').innerHTML = html;
                    updateAdditionalCount();
                });
        })
        .catch(error => {
            console.error('Error fetching additional services:', error);
        });
}

// Update services count
function updateServicesCount() {
    const servicesCount = document.querySelectorAll('#servicesContainer .col-lg-6').length;
    document.getElementById('servicesCount').textContent = servicesCount;
}

// Update additional services count
function updateAdditionalCount() {
    const additionalCount = document.querySelectorAll('#additionalServicesContainer .col-md-4').length;
    document.getElementById('additionalCount').textContent = additionalCount;
}

// ========== EXISTING FUNCTIONS ==========

// Service Functions
function editService(service) {
    document.getElementById('editServiceForm').action = `/admin/services/service/${service.id}`;
    document.getElementById('edit_section_badge').value = service.section_badge;
    document.getElementById('edit_title').value = service.title;
    document.getElementById('edit_description').value = service.description;
    document.getElementById('edit_button_text').value = service.button_text || '';
    document.getElementById('edit_button_url').value = service.button_url || '';
    document.getElementById('edit_order').value = service.order;
    document.getElementById('edit_is_active').checked = !!service.is_active;
    document.getElementById('edit_show_on_homepage').checked = !!service.show_on_homepage;

    if (service.image) {
        document.getElementById('edit_current_image').innerHTML = `
            <img src="/storage/${service.image}" alt="${service.title}" style="max-width: 200px;" class="rounded">
            <div class="mt-2">
                <small class="text-muted">Current image</small>
            </div>
        `;
    } else {
        document.getElementById('edit_current_image').innerHTML = '';
    }

    new bootstrap.Modal(document.getElementById('editServiceModal')).show();
}

function viewService(serviceId) {
    fetch(`/admin/services/service/${serviceId}/view`)
        .then(response => response.json())
        .then(data => {
            const service = data.service;
            let content = `
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h4>${service.title}</h4>
                        <span class="badge bg-primary-600 text-white">${service.section_badge}</span>
                    </div>
                    ${service.image ? `
                        <div class="col-md-12 mb-3">
                            <img src="/storage/${service.image}" alt="${service.title}" class="w-100 rounded" style="max-height: 300px; object-fit: cover;">
                        </div>
                    ` : ''}
                    <div class="col-md-12 mb-4">
                        <p>${service.description}</p>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6>Features (${service.features.length})</h6>
                            <button class="btn btn-sm btn-primary-600" onclick="addFeature(${service.id})">
                                <iconify-icon icon="solar:add-circle-bold"></iconify-icon> Add
                            </button>
                        </div>
                        <div class="list-group">
                            ${service.features.map(feature => `
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="${feature.icon} text-primary-600"></i>
                                        <strong>${feature.title}</strong>
                                        ${feature.description ? `<br><small class="text-secondary-light">${feature.description}</small>` : ''}
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary-600" onclick='editFeature(${JSON.stringify(feature)})'>
                                            <iconify-icon icon="solar:pen-bold"></iconify-icon>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger-600" onclick="deleteFeature(${feature.id})">
                                            <iconify-icon icon="solar:trash-bin-trash-bold"></iconify-icon>
                                        </button>
                                    </div>
                                </div>
                            `).join('') || '<p class="text-secondary-light">No features added</p>'}
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6>Technologies (${service.technologies.length})</h6>
                            <button class="btn btn-sm btn-primary-600" onclick="addTechnology(${service.id})">
                                <iconify-icon icon="solar:add-circle-bold"></iconify-icon> Add
                            </button>
                        </div>
                        <div class="list-group">
                            ${service.technologies.map(tech => `
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        ${tech.icon ? `<i class="${tech.icon}"></i>` : ''} ${tech.name}
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary-600" onclick='editTechnology(${JSON.stringify(tech)})'>
                                            <iconify-icon icon="solar:pen-bold"></iconify-icon>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger-600" onclick="deleteTechnology(${tech.id})">
                                            <iconify-icon icon="solar:trash-bin-trash-bold"></iconify-icon>
                                        </button>
                                    </div>
                                </div>
                            `).join('') || '<p class="text-secondary-light">No technologies added</p>'}
                        </div>
                    </div>
                </div>
            `;
            
            document.getElementById('viewServiceContent').innerHTML = content;
            new bootstrap.Modal(document.getElementById('viewServiceModal')).show();
        });
}

// Feature Functions
function addFeature(serviceId) {
    document.getElementById('feature_service_id').value = serviceId;
    bootstrap.Modal.getInstance(document.getElementById('viewServiceModal')).hide();
    new bootstrap.Modal(document.getElementById('addFeatureModal')).show();
}

function editFeature(feature) {
    document.getElementById('editFeatureForm').action = `/admin/services/feature/${feature.id}`;
    document.getElementById('edit_feature_icon').value = feature.icon;
    document.getElementById('edit_feature_title').value = feature.title;
    document.getElementById('edit_feature_description').value = feature.description || '';
    document.getElementById('edit_feature_order').value = feature.order;
    document.getElementById('edit_feature_active').checked = !!feature.is_active;
    
    bootstrap.Modal.getInstance(document.getElementById('viewServiceModal')).hide();
    new bootstrap.Modal(document.getElementById('editFeatureModal')).show();
}

// Technology Functions
function addTechnology(serviceId) {
    document.getElementById('technology_service_id').value = serviceId;
    bootstrap.Modal.getInstance(document.getElementById('viewServiceModal')).hide();
    new bootstrap.Modal(document.getElementById('addTechnologyModal')).show();
}

function editTechnology(tech) {
    document.getElementById('editTechnologyForm').action = `/admin/services/technology/${tech.id}`;
    document.getElementById('edit_tech_name').value = tech.name;
    document.getElementById('edit_tech_icon').value = tech.icon || '';
    document.getElementById('edit_tech_order').value = tech.order;
    document.getElementById('edit_tech_active').checked = !!tech.is_active;
    
    bootstrap.Modal.getInstance(document.getElementById('viewServiceModal')).hide();
    new bootstrap.Modal(document.getElementById('editTechnologyModal')).show();
}

// Additional Service Functions
function editAdditional(additional) {
    document.getElementById('editAdditionalForm').action = `/admin/services/additional/${additional.id}`;
    document.getElementById('edit_add_icon').value = additional.icon;
    document.getElementById('edit_add_title').value = additional.title;
    document.getElementById('edit_add_description').value = additional.description;
    document.getElementById('edit_add_link_text').value = additional.link_text || '';
    document.getElementById('edit_add_link_url').value = additional.link_url || '';
    document.getElementById('edit_add_order').value = additional.order;
    document.getElementById('edit_add_active').checked = !!additional.is_active;
    
    new bootstrap.Modal(document.getElementById('editAdditionalModal')).show();
}
</script>
@endpush