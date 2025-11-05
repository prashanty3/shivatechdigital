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
    public function index(Request $request)
    {
        $services = Service::with(['features', 'technologies'])->ordered()->get();
        $additionalServices = AdditionalService::ordered()->get();
        
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'services' => $services,
                'additionalServices' => $additionalServices
            ]);
        }
        
        return view('adminDashboard.pages.services', compact('services', 'additionalServices'));
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

        $service = Service::first();
        if ($service) {
            $service->update($validated);
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Services page updated successfully!'
            ]);
        }

        return redirect()->back()->with('success', 'Services page updated successfully!');
    }

    public function storeService(Request $request)
    {
        try {
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
            $validated['is_active'] = true;

            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('services', 'public');
            }

            $service = Service::create($validated);
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Service added successfully!',
                    'service' => $service->load(['features', 'technologies'])
                ]);
            }
            
            return redirect()->back()->with('success', 'Service added successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to add service: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->back()->with('error', 'Failed to add service');
        }
    }

    public function updateService(Request $request, Service $service)
    {
        try {
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

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Service updated successfully!',
                    'service' => $service->load(['features', 'technologies'])
                ]);
            }

            return redirect()->back()->with('success', 'Service updated successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update service: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to update service');
        }
    }

    public function destroyService(Request $request, Service $service)
    {
        try {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            
            $service->delete();

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Service deleted successfully!'
                ]);
            }

            return redirect()->back()->with('success', 'Service deleted successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete service: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to delete service');
        }
    }

    // Feature Methods
    public function storeFeature(Request $request)
    {
        try {
            $validated = $request->validate([
                'service_id' => 'required|exists:services,id',
                'icon' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string|max:255',
                'order' => 'required|integer',
            ]);

            $feature = ServiceFeature::create($validated);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Feature added successfully!',
                    'feature' => $feature
                ]);
            }

            return redirect()->back()->with('success', 'Feature added successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to add feature: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to add feature');
        }
    }

    public function updateFeature(Request $request, ServiceFeature $feature)
    {
        try {
            $validated = $request->validate([
                'icon' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string|max:255',
                'order' => 'required|integer',
                'is_active' => 'boolean',
            ]);

            $validated['is_active'] = $request->has('is_active');

            $feature->update($validated);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Feature updated successfully!',
                    'feature' => $feature
                ]);
            }

            return redirect()->back()->with('success', 'Feature updated successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update feature: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to update feature');
        }
    }

    public function destroyFeature(Request $request, ServiceFeature $feature)
    {
        try {
            $feature->delete();

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Feature deleted successfully!'
                ]);
            }

            return redirect()->back()->with('success', 'Feature deleted successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete feature: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to delete feature');
        }
    }

    // Technology Methods
    public function storeTechnology(Request $request)
    {
        try {
            $validated = $request->validate([
                'service_id' => 'required|exists:services,id',
                'name' => 'required|string|max:255',
                'icon' => 'nullable|string|max:255',
                'order' => 'required|integer',
            ]);

            $technology = ServiceTechnology::create($validated);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Technology added successfully!',
                    'technology' => $technology
                ]);
            }

            return redirect()->back()->with('success', 'Technology added successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to add technology: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to add technology');
        }
    }

    public function updateTechnology(Request $request, ServiceTechnology $technology)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'icon' => 'nullable|string|max:255',
                'order' => 'required|integer',
                'is_active' => 'boolean',
            ]);

            $validated['is_active'] = $request->has('is_active');

            $technology->update($validated);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Technology updated successfully!',
                    'technology' => $technology
                ]);
            }

            return redirect()->back()->with('success', 'Technology updated successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update technology: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to update technology');
        }
    }

    public function destroyTechnology(Request $request, ServiceTechnology $technology)
    {
        try {
            $technology->delete();

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Technology deleted successfully!'
                ]);
            }

            return redirect()->back()->with('success', 'Technology deleted successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete technology: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to delete technology');
        }
    }

    // Additional Service Methods
    public function storeAdditional(Request $request)
    {
        try {
            $validated = $request->validate([
                'icon' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'link_text' => 'nullable|string|max:255',
                'link_url' => 'nullable|string|max:255',
                'order' => 'required|integer',
            ]);

            $additional = AdditionalService::create($validated);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Additional service added successfully!',
                    'additional' => $additional
                ]);
            }

            return redirect()->back()->with('success', 'Additional service added successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to add additional service: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to add additional service');
        }
    }

    public function updateAdditional(Request $request, AdditionalService $additional)
    {
        try {
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

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Additional service updated successfully!',
                    'additional' => $additional
                ]);
            }

            return redirect()->back()->with('success', 'Additional service updated successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update additional service: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to update additional service');
        }
    }

    public function destroyAdditional(Request $request, AdditionalService $additional)
    {
        try {
            $additional->delete();

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Additional service deleted successfully!'
                ]);
            }

            return redirect()->back()->with('success', 'Additional service deleted successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete additional service: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()->with('error', 'Failed to delete additional service');
        }
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