<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\ServiceTechnology;
use App\Models\AdditionalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with(['features', 'technologies'])->ordered()->get();
        $additionalServices = AdditionalService::ordered()->get();
        
        return view('adminDashboard.services.index', compact('services', 'additionalServices'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'page_badge' => 'nullable|string|max:255',
            'page_title' => 'nullable|string|max:255',
            'page_subtitle' => 'nullable|string',
            'services_offered' => 'nullable|integer',
            'client_satisfaction' => 'nullable|integer',
            'support_availability' => 'nullable|string|max:255',
            'cta_title' => 'nullable|string|max:255',
            'cta_subtitle' => 'nullable|string',
            'cta_primary_button_text' => 'nullable|string|max:255',
            'cta_primary_button_url' => 'nullable|string|max:255',
            'cta_secondary_button_text' => 'nullable|string|max:255',
            'cta_secondary_button_url' => 'nullable|string|max:255',
        ]);

        // Update first service record or create if doesn't exist
        $service = Service::first();
        if ($service) {
            $service->update($validated);
        }

        return redirect()->back()->with('success', 'Services page updated successfully!');
    }

    public function storeService(Request $request)
    {
        $validated = $request->validate([
            'section_badge' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validated);

        return redirect()->back()->with('success', 'Service added successfully!');
    }

    public function updateService(Request $request, Service $service)
    {
        $validated = $request->validate([
            'section_badge' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'boolean',
            'show_on_homepage' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['show_on_homepage'] = $request->has('show_on_homepage');

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validated);

        return redirect()->back()->with('success', 'Service updated successfully!');
    }

    public function destroyService(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }
        
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully!');
    }

    // Feature Methods
    public function storeFeature(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        ServiceFeature::create($validated);

        return redirect()->back()->with('success', 'Feature added successfully!');
    }

    public function updateFeature(Request $request, ServiceFeature $feature)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $feature->update($validated);

        return redirect()->back()->with('success', 'Feature updated successfully!');
    }

    public function destroyFeature(ServiceFeature $feature)
    {
        $feature->delete();
        return redirect()->back()->with('success', 'Feature deleted successfully!');
    }

    // Technology Methods
    public function storeTechnology(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        ServiceTechnology::create($validated);

        return redirect()->back()->with('success', 'Technology added successfully!');
    }

    public function updateTechnology(Request $request, ServiceTechnology $technology)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $technology->update($validated);

        return redirect()->back()->with('success', 'Technology updated successfully!');
    }

    public function destroyTechnology(ServiceTechnology $technology)
    {
        $technology->delete();
        return redirect()->back()->with('success', 'Technology deleted successfully!');
    }

    // Additional Service Methods
    public function storeAdditional(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link_text' => 'nullable|string|max:255',
            'link_url' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        AdditionalService::create($validated);

        return redirect()->back()->with('success', 'Additional service added successfully!');
    }

    public function updateAdditional(Request $request, AdditionalService $additional)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link_text' => 'nullable|string|max:255',
            'link_url' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $additional->update($validated);

        return redirect()->back()->with('success', 'Additional service updated successfully!');
    }

    public function destroyAdditional(AdditionalService $additional)
    {
        $additional->delete();
        return redirect()->back()->with('success', 'Additional service deleted successfully!');
    }


    public function viewService(Service $service)
    {
        $service->load(['features' => function($query) {
            $query->orderBy('order');
        }, 'technologies' => function($query) {
            $query->orderBy('order');
        }]);
        return response()->json(['service' => $service]);
    }
}