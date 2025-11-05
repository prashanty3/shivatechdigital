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