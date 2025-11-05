@extends('adminDashboard.index')
@section('adminDashboard.content')
<div class="dashboard-main-body">
  <!-- Breadcrumb -->
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0">Services Page Management</h6>
    <ul class="d-flex align-items-center gap-2">
      <li class="fw-medium">
        <a href="{{ route('index') }}" class="d-flex align-items-center gap-1 hover-text-primary">
          <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
          Dashboard
        </a>
      </li>
      <li>-</li>
      <li class="fw-medium">Services Page</li>
    </ul>
  </div>

  <!-- Success/Error Messages -->
  @if(session('success'))
  <div class="alert alert-success bg-success-100 text-success-600 border-success-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-3 fw-semibold text-lg radius-4 d-flex align-items-center justify-content-between" role="alert">
    <div class="d-flex align-items-center gap-2">
      <iconify-icon icon="solar:check-circle-bold" class="icon text-xl"></iconify-icon>
      {{ session('success') }}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if($errors->any())
  <div class="alert alert-danger bg-danger-100 text-danger-600 border-danger-600 border-start-width-4-px border-top-0 border-end-0 border-bottom-0 px-24 py-13 mb-3 radius-4" role="alert">
    <h6 class="fw-semibold mb-2">Please fix the following errors:</h6>
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- Tabs Navigation -->
  <div class="tabs-wrapper mb-24">
    <ul class="nav nav-pills-modern" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-header-tab" data-bs-toggle="pill" data-bs-target="#pills-header" type="button" role="tab" aria-controls="pills-header" aria-selected="true">
          <div class="nav-link-icon">
            <iconify-icon icon="solar:home-bold-duotone" class="icon"></iconify-icon>
          </div>
          <div class="nav-link-content">
            <span class="nav-link-title">Page Header</span>
            <span class="nav-link-desc">Title & Stats</span>
          </div>
          <div class="nav-link-indicator"></div>
        </button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-services-tab" data-bs-toggle="pill" data-bs-target="#pills-services" type="button" role="tab" aria-controls="pills-services">
          <div class="nav-link-icon">
            <iconify-icon icon="solar:server-bold-duotone" class="icon"></iconify-icon>
          </div>
          <div class="nav-link-content">
            <span class="nav-link-title">Main Services</span>
            <span class="nav-link-desc">
              <span class="badge bg-primary-600 text-white px-2 py-1 text-xs radius-4">{{ $services->count() }}</span>
            </span>
          </div>
          <div class="nav-link-indicator"></div>
        </button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-additional-tab" data-bs-toggle="pill" data-bs-target="#pills-additional" type="button" role="tab" aria-controls="pills-additional">
          <div class="nav-link-icon">
            <iconify-icon icon="solar:widget-add-bold-duotone" class="icon"></iconify-icon>
          </div>
          <div class="nav-link-content">
            <span class="nav-link-title">Additional Services</span>
            <span class="nav-link-desc">
              <span class="badge bg-success-600 text-white px-2 py-1 text-xs radius-4">{{ $additionalServices->count() }}</span>
            </span>
          </div>
          <div class="nav-link-indicator"></div>
        </button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-cta-tab" data-bs-toggle="pill" data-bs-target="#pills-cta" type="button" role="tab" aria-controls="pills-cta">
          <div class="nav-link-icon">
            <iconify-icon icon="solar:hand-shake-bold-duotone" class="icon"></iconify-icon>
          </div>
          <div class="nav-link-content">
            <span class="nav-link-title">CTA Section</span>
            <span class="nav-link-desc">Call to Action</span>
          </div>
          <div class="nav-link-indicator"></div>
        </button>
      </li>
    </ul>
  </div>

  <form action="{{ route('services.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="tab-content" id="pills-tabContent">
      <!-- Page Header Tab -->
      <div class="tab-pane fade show active" id="pills-header" role="tabpanel">
        <div class="card">
          <div class="card-header border-bottom bg-base py-16 px-24">
            <h6 class="text-lg fw-semibold mb-0">Page Header Section</h6>
          </div>
          <div class="card-body p-24">
            <div class="row gy-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                  Page Badge <span class="text-danger-600">*</span>
                </label>
                <input type="text" name="page_badge" class="form-control radius-8" value="{{ old('page_badge', $services->first()->page_badge ?? 'Our Services') }}" required>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                  Page Title <span class="text-danger-600">*</span>
                </label>
                <input type="text" name="page_title" class="form-control radius-8" value="{{ old('page_title', $services->first()->page_title ?? 'Complete Digital Solutions') }}" required>
              </div>

              <div class="col-md-12">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Page Subtitle</label>
                <textarea name="page_subtitle" class="form-control radius-8" rows="3">{{ old('page_subtitle', $services->first()->page_subtitle ?? '') }}</textarea>
              </div>

              <div class="col-md-4">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                  Services Offered <span class="text-danger-600">*</span>
                </label>
                <input type="number" name="services_offered" class="form-control radius-8" value="{{ old('services_offered', $services->first()->services_offered ?? 50) }}" required>
              </div>

              <div class="col-md-4">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                  Client Satisfaction % <span class="text-danger-600">*</span>
                </label>
                <input type="number" name="client_satisfaction" class="form-control radius-8" value="{{ old('client_satisfaction', $services->first()->client_satisfaction ?? 100) }}" required>
              </div>

              <div class="col-md-4">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                  Support Availability <span class="text-danger-600">*</span>
                </label>
                <input type="text" name="support_availability" class="form-control radius-8" value="{{ old('support_availability', $services->first()->support_availability ?? '24/7') }}" required>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Services Tab -->
      <div class="tab-pane fade" id="pills-services" role="tabpanel">
        <div class="card mb-3">
          <div class="card-header border-bottom bg-base py-16 px-24 d-flex justify-content-between align-items-center">
            <h6 class="text-lg fw-semibold mb-0">Main Services</h6>
            <button type="button" class="btn btn-primary-600 radius-8" data-bs-toggle="modal" data-bs-target="#addServiceModal">
              <iconify-icon icon="solar:add-circle-bold" class="icon"></iconify-icon>
              Add Service
            </button>
          </div>
          <div class="card-body p-24">
            <div class="row g-4">
              @forelse($services as $service)
              <div class="col-lg-6">
                <div class="card border h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                      <span class="badge bg-primary-600 text-white">{{ $service->section_badge }}</span>
                      <div class="d-flex gap-2">
                        <span class="badge bg-{{ $service->is_active ? 'success' : 'danger' }}-100 text-{{ $service->is_active ? 'success' : 'danger' }}-600">
                          {{ $service->is_active ? 'Active' : 'Inactive' }}
                        </span>
                        @if($service->show_on_homepage)
                        <span class="badge bg-info-100 text-info-600">Homepage</span>
                        @endif
                      </div>
                    </div>
                    
                    @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-100 rounded mb-3" style="height: 150px; object-fit: cover;">
                    @endif
                    
                    <h5 class="mb-2">{{ $service->title }}</h5>
                    <p class="text-sm text-secondary-light mb-3">{{ Str::limit($service->description, 100) }}</p>
                    
                    <!-- Features -->
                    <div class="mb-3">
                      <h6 class="text-sm fw-semibold mb-2">Features ({{ $service->features->count() }})</h6>
                      <div class="d-flex flex-wrap gap-2">
                        @foreach($service->features->take(3) as $feature)
                        <span class="badge bg-neutral-100 text-neutral-600 text-xs">
                          <i class="{{ $feature->icon }}"></i> {{ $feature->title }}
                        </span>
                        @endforeach
                        @if($service->features->count() > 3)
                        <span class="badge bg-neutral-100 text-neutral-600 text-xs">+{{ $service->features->count() - 3 }} more</span>
                        @endif
                      </div>
                    </div>
                    
                    <!-- Technologies -->
                    <div class="mb-3">
                      <h6 class="text-sm fw-semibold mb-2">Technologies ({{ $service->technologies->count() }})</h6>
                      <div class="d-flex flex-wrap gap-2">
                        @foreach($service->technologies->take(4) as $tech)
                        <span class="badge bg-warning-100 text-warning-600 text-xs">
                          @if($tech->icon)<i class="{{ $tech->icon }}"></i>@endif {{ $tech->name }}
                        </span>
                        @endforeach
                        @if($service->technologies->count() > 4)
                        <span class="badge bg-warning-100 text-warning-600 text-xs">+{{ $service->technologies->count() - 4 }} more</span>
                        @endif
                      </div>
                    </div>
                    
                    <div class="d-flex gap-2">
                      <button type="button" class="btn btn-sm btn-outline-primary-600 flex-fill" onclick='viewService({{ $service->id }})'>
                        <iconify-icon icon="solar:eye-bold"></iconify-icon> View
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success-600 flex-fill" onclick='editService(@json($service))'>
                        <iconify-icon icon="solar:pen-bold"></iconify-icon> Edit
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-danger-600" onclick="deleteService({{ $service->id }})">
                        <iconify-icon icon="solar:trash-bin-trash-bold"></iconify-icon>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <div class="col-12">
                <p class="text-center text-secondary-light">No services added yet</p>
              </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Services Tab -->
      <div class="tab-pane fade" id="pills-additional" role="tabpanel">
        <div class="card mb-3">
          <div class="card-header border-bottom bg-base py-16 px-24 d-flex justify-content-between align-items-center">
            <h6 class="text-lg fw-semibold mb-0">Additional Services</h6>
            <button type="button" class="btn btn-primary-600 radius-8" data-bs-toggle="modal" data-bs-target="#addAdditionalModal">
              <iconify-icon icon="solar:add-circle-bold" class="icon"></iconify-icon>
              Add Service
            </button>
          </div>
          <div class="card-body p-24">
            <div class="row g-4">
              @forelse($additionalServices as $additional)
              <div class="col-md-4">
                <div class="card h-100 border">
                  <div class="card-body text-center">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                      <span class="badge bg-neutral-100 text-neutral-600 text-xs">Order: {{ $additional->order }}</span>
                      <span class="badge bg-{{ $additional->is_active ? 'success' : 'danger' }}-100 text-{{ $additional->is_active ? 'success' : 'danger' }}-600">
                        {{ $additional->is_active ? 'Active' : 'Inactive' }}
                      </span>
                    </div>
                    
                    <div class="bg-primary-100 text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                      <i class="{{ $additional->icon }} text-xxl"></i>
                    </div>
                    
                    <h6 class="mb-2">{{ $additional->title }}</h6>
                    <p class="text-sm text-secondary-light mb-3">{{ Str::limit($additional->description, 80) }}</p>
                    
                    <div class="d-flex gap-2 justify-content-center">
                      <button type="button" class="btn btn-sm btn-outline-primary-600" onclick='editAdditional(@json($additional))'>
                        <iconify-icon icon="solar:pen-bold"></iconify-icon>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-danger-600" onclick="deleteAdditional({{ $additional->id }})">
                        <iconify-icon icon="solar:trash-bin-trash-bold"></iconify-icon>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <div class="col-12">
                <p class="text-center text-secondary-light">No additional services added yet</p>
              </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section Tab -->
      <div class="tab-pane fade" id="pills-cta" role="tabpanel">
        <div class="card">
          <div class="card-header border-bottom bg-base py-16 px-24">
            <h6 class="text-lg fw-semibold mb-0">Call to Action Section</h6>
          </div>
          <div class="card-body p-24">
            <div class="row gy-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">CTA Title</label>
                <input type="text" name="cta_title" class="form-control radius-8" value="{{ old('cta_title', $services->first()->cta_title ?? 'Ready to Get Started?') }}">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">CTA Subtitle</label>
                <input type="text" name="cta_subtitle" class="form-control radius-8" value="{{ old('cta_subtitle', $services->first()->cta_subtitle ?? '') }}">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Primary Button Text</label>
                <input type="text" name="cta_primary_button_text" class="form-control radius-8" value="{{ old('cta_primary_button_text', $services->first()->cta_primary_button_text ?? 'Request a Quote') }}">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Primary Button URL</label>
                <input type="text" name="cta_primary_button_url" class="form-control radius-8" value="{{ old('cta_primary_button_url', $services->first()->cta_primary_button_url ?? '') }}">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Secondary Button Text</label>
                <input type="text" name="cta_secondary_button_text" class="form-control radius-8" value="{{ old('cta_secondary_button_text', $services->first()->cta_secondary_button_text ?? 'View Portfolio') }}">
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Secondary Button URL</label>
                <input type="text" name="cta_secondary_button_url" class="form-control radius-8" value="{{ old('cta_secondary_button_url', $services->first()->cta_secondary_button_url ?? '') }}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Submit Button -->
    <div class="d-flex align-items-center justify-content-end gap-3 mt-24">
      <button type="submit" class="btn btn-primary-600 radius-8 px-32 py-11">
        <iconify-icon icon="solar:diskette-bold" class="icon"></iconify-icon>
        Save Services Page
      </button>
    </div>
  </form>
</div>

<!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="{{ route('services.service.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Add Main Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Section Badge <span class="text-danger">*</span></label>
              <input type="text" name="section_badge" class="form-control" placeholder="e.g., Web Development" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Order <span class="text-danger">*</span></label>
              <input type="number" name="order" class="form-control" value="0" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Title <span class="text-danger">*</span></label>
              <input type="text" name="title" class="form-control" placeholder="e.g., Custom Web Application Development" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Description <span class="text-danger">*</span></label>
              <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="col-md-12">
              <label class="form-label">Service Image</label>
              <input type="file" name="image" class="form-control" accept="image/*">
            </div>
            <div class="col-md-6">
              <label class="form-label">Button Text</label>
              <input type="text" name="button_text" class="form-control" value="Get Started">
            </div>
            <div class="col-md-6">
              <label class="form-label">Button URL</label>
              <input type="text" name="button_url" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Add Service</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Service Modal -->
<div class="modal fade" id="editServiceModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="editServiceForm" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Section Badge <span class="text-danger">*</span></label>
              <input type="text" name="section_badge" id="edit_section_badge" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Order <span class="text-danger">*</span></label>
              <input type="number" name="order" id="edit_order" class="form-control" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Title <span class="text-danger">*</span></label>
              <input type="text" name="title" id="edit_title" class="form-control" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Description <span class="text-danger">*</span></label>
              <textarea name="description" id="edit_description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="col-md-12">
              <label class="form-label">Service Image</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              <div id="edit_current_image" class="mt-2"></div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Button Text</label>
              <input type="text" name="button_text" id="edit_button_text" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Button URL</label>
              <input type="text" name="button_url" id="edit_button_url" class="form-control">
            </div>
            <div class="col-md-6">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="edit_is_active">
                <label class="form-check-label" for="edit_is_active">Active</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="show_on_homepage" value="1" id="edit_show_on_homepage">
                <label class="form-check-label" for="edit_show_on_homepage">Show on Homepage</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Service</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- View Service Modal -->
<div class="modal fade" id="viewServiceModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Service Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="viewServiceContent">
        <!-- Content will be loaded dynamically -->
      </div>
    </div>
  </div>
</div>

<!-- Add Feature Modal -->
<div class="modal fade" id="addFeatureModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('services.feature.store') }}" method="POST">
        @csrf
        <input type="hidden" name="service_id" id="feature_service_id">
        <div class="modal-header">
          <h5 class="modal-title">Add Feature</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Icon <span class="text-danger">*</span></label>
            <input type="text" name="icon" class="form-control" placeholder="fas fa-check-circle" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Order <span class="text-danger">*</span></label>
            <input type="number" name="order" class="form-control" value="0" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Add Feature</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Feature Modal -->
<div class="modal fade" id="editFeatureModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editFeatureForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit Feature</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Icon <span class="text-danger">*</span></label>
            <input type="text" name="icon" id="edit_feature_icon" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" id="edit_feature_title" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" id="edit_feature_description" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Order <span class="text-danger">*</span></label>
            <input type="number" name="order" id="edit_feature_order" class="form-control" required>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" id="edit_feature_active">
            <label class="form-check-label" for="edit_feature_active">Active</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Feature</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Add Technology Modal -->
<div class="modal fade" id="addTechnologyModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('services.technology.store') }}" method="POST">
        @csrf
        <input type="hidden" name="service_id" id="technology_service_id">
        <div class="modal-header">
          <h5 class="modal-title">Add Technology</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="e.g., React" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Icon</label>
            <input type="text" name="icon" class="form-control" placeholder="fab fa-react">
          </div>
          <div class="mb-3">
            <label class="form-label">Order <span class="text-danger">*</span></label>
            <input type="number" name="order" class="form-control" value="0" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Add Technology</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Technology Modal -->
<div class="modal fade" id="editTechnologyModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editTechnologyForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit Technology</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="edit_tech_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Icon</label>
            <input type="text" name="icon" id="edit_tech_icon" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Order <span class="text-danger">*</span></label>
            <input type="number" name="order" id="edit_tech_order" class="form-control" required>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" id="edit_tech_active">
            <label class="form-check-label" for="edit_tech_active">Active</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Technology</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Add Additional Service Modal -->
<div class="modal fade" id="addAdditionalModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('services.additional.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Add Additional Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Icon <span class="text-danger">*</span></label>
            <input type="text" name="icon" class="form-control" placeholder="fas fa-paint-brush" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description <span class="text-danger">*</span></label>
            <textarea name="description" class="form-control" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Link Text</label>
            <input type="text" name="link_text" class="form-control" value="Learn More">
          </div>
          <div class="mb-3">
            <label class="form-label">Link URL</label>
            <input type="text" name="link_url" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Order <span class="text-danger">*</span></label>
            <input type="number" name="order" class="form-control" value="0" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Add Service</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Additional Service Modal -->
<div class="modal fade" id="editAdditionalModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editAdditionalForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title">Edit Additional Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Icon <span class="text-danger">*</span></label>
            <input type="text" name="icon" id="edit_add_icon" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" id="edit_add_title" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description <span class="text-danger">*</span></label>
            <textarea name="description" id="edit_add_description" class="form-control" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Link Text</label>
            <input type="text" name="link_text" id="edit_add_link_text" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Link URL</label>
            <input type="text" name="link_url" id="edit_add_link_url" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Order <span class="text-danger">*</span></label>
            <input type="number" name="order" id="edit_add_order" class="form-control" required>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="is_active" value="1" id="edit_add_active">
            <label class="form-check-label" for="edit_add_active">Active</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Service</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  /* Tabs Wrapper */
  .tabs-wrapper {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 8px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(102, 126, 234, 0.2);
    position: relative;
    overflow: hidden;
  }

  .tabs-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
    pointer-events: none;
  }

  /* Modern Nav Pills */
  .nav-pills-modern {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative;
  }

  .nav-pills-modern .nav-item {
    flex: 1;
    min-width: 140px;
  }

  /* Nav Link Base Styles */
  .nav-pills-modern .nav-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    padding: 16px 12px;
    border: 2px solid transparent;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.95);
    color: #64748b;
    font-weight: 500;
    text-align: center;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    width: 100%;
    backdrop-filter: blur(10px);
  }

  /* Icon Wrapper */
  .nav-link-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    transition: all 0.4s ease;
    position: relative;
    z-index: 1;
  }

  .nav-link-icon .icon {
    font-size: 24px;
    transition: all 0.4s ease;
  }

  /* Content Wrapper */
  .nav-link-content {
    display: flex;
    flex-direction: column;
    gap: 4px;
    position: relative;
    z-index: 1;
  }

  .nav-link-title {
    font-size: 13px;
    font-weight: 600;
    line-height: 1.2;
    transition: all 0.3s ease;
  }

  .nav-link-desc {
    font-size: 11px;
    color: #94a3b8;
    font-weight: 400;
    transition: all 0.3s ease;
  }

  /* Indicator Line */
  .nav-link-indicator {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%) scaleX(0);
    width: 80%;
    height: 3px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    border-radius: 3px 3px 0 0;
    transition: transform 0.3s ease;
  }

  /* Hover State */
  .nav-pills-modern .nav-link:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    border-color: rgba(102, 126, 234, 0.2);
  }

  .nav-pills-modern .nav-link:hover .nav-link-icon {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transform: scale(1.1) rotate(-5deg);
  }

  .nav-pills-modern .nav-link:hover .nav-link-icon .icon {
    color: white;
    transform: scale(1.1);
  }

  .nav-pills-modern .nav-link:hover .nav-link-title {
    color: #334155;
  }

  .nav-pills-modern .nav-link:hover .nav-link-indicator {
    transform: translateX(-50%) scaleX(1);
  }

  /* Active State */
  .nav-pills-modern .nav-link.active {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-color: transparent;
    box-shadow: 0 12px 28px rgba(102, 126, 234, 0.35);
    transform: translateY(-4px);
  }

  .nav-pills-modern .nav-link.active .nav-link-icon {
    background: rgba(255, 255, 255, 0.25);
    transform: scale(1.1);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  }

  .nav-pills-modern .nav-link.active .nav-link-icon .icon {
    color: white;
    animation: iconPulse 2s ease-in-out infinite;
  }

  .nav-pills-modern .nav-link.active .nav-link-title {
    color: white;
    font-weight: 700;
  }

  .nav-pills-modern .nav-link.active .nav-link-desc {
    color: rgba(255, 255, 255, 0.8);
  }

  .nav-pills-modern .nav-link.active .nav-link-indicator {
    background: white;
    transform: translateX(-50%) scaleX(1);
  }

  /* Badge Styling */
  .nav-link-desc .badge {
    font-size: 10px;
    padding: 3px 8px;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
  }

  .nav-pills-modern .nav-link.active .nav-link-desc .badge {
    background: white !important;
    color: #667eea !important;
  }

  /* Animations */
  @keyframes iconPulse {
    0%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.15);
    }
  }

  @keyframes slideIn {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .nav-pills-modern .nav-item {
    animation: slideIn 0.4s ease backwards;
  }

  .nav-pills-modern .nav-item:nth-child(1) { animation-delay: 0.05s; }
  .nav-pills-modern .nav-item:nth-child(2) { animation-delay: 0.1s; }
  .nav-pills-modern .nav-item:nth-child(3) { animation-delay: 0.15s; }
  .nav-pills-modern .nav-item:nth-child(4) { animation-delay: 0.2s; }

  /* Focus State for Accessibility */
  .nav-pills-modern .nav-link:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.3);
  }

  /* Responsive Design */
  @media (max-width: 1200px) {
    .nav-pills-modern .nav-item {
      min-width: 120px;
    }

    .nav-link-icon {
      width: 42px;
      height: 42px;
    }

    .nav-link-icon .icon {
      font-size: 20px;
    }

    .nav-link-title {
      font-size: 12px;
    }

    .nav-link-desc {
      font-size: 10px;
    }
  }

  @media (max-width: 768px) {
    .nav-pills-modern {
      flex-direction: column;
    }

    .nav-pills-modern .nav-item {
      width: 100%;
      min-width: unset;
    }

    .nav-pills-modern .nav-link {
      flex-direction: row;
      justify-content: flex-start;
      text-align: left;
      padding: 14px 16px;
    }

    .nav-link-content {
      align-items: flex-start;
      flex: 1;
    }

    .nav-link-indicator {
      left: 0;
      transform: translateX(0) scaleX(0);
      width: 4px;
      height: 100%;
      top: 0;
      border-radius: 0 3px 3px 0;
    }

    .nav-pills-modern .nav-link:hover .nav-link-indicator,
    .nav-pills-modern .nav-link.active .nav-link-indicator {
      transform: translateX(0) scaleY(1);
    }
  }
</style>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
    `;
  } else {
    document.getElementById('edit_current_image').innerHTML = '';
  }

  new bootstrap.Modal(document.getElementById('editServiceModal')).show();
}

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
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = `/admin/services/service/${id}`;
      form.innerHTML = `@csrf @method('DELETE')`;
      document.body.appendChild(form);
      form.submit();
    }
  });
}

function viewService(serviceId) {
  // Fetch service details via AJAX
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
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = `/admin/services/feature/${id}`;
      form.innerHTML = `@csrf @method('DELETE')`;
      document.body.appendChild(form);
      form.submit();
    }
  });
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
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = `/admin/services/technology/${id}`;
      form.innerHTML = `@csrf @method('DELETE')`;
      document.body.appendChild(form);
      form.submit();
    }
  });
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
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = `/admin/services/additional/${id}`;
      form.innerHTML = `@csrf @method('DELETE')`;
      document.body.appendChild(form);
      form.submit();
    }
  });
}
</script>
@endpush
@endsection