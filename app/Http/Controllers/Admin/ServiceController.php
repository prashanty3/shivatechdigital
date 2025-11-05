<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\ServiceTechnology;
use App\Models\AdditionalService;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /* -------------------- PAGE MAIN VIEW -------------------- */
    public function index(Request $request)
    {
        $services = Service::with(['features', 'technologies'])->orderBy('order')->get();
        $additionalServices = AdditionalService::orderBy('order')->get();

        // If AJAX request -> return only HTML portion for refreshing UI
        if ($request->ajax()) {
            return view('adminDashboard.pages.services-list', compact('services'))->render();
        }

        return view('adminDashboard.pages.services', compact('services', 'additionalServices'));
    }

    /* -------------------- UPDATE PAGE HEADER & CTA -------------------- */
    public function update(Request $request)
    {
        $request->validate([
            'page_badge' => 'required',
            'page_title' => 'required',
        ]);

        // Get first record (this holds page header settings)
        $service = Service::first();

        // If no service exists, create a dummy header holder row
        if (!$service) {
            $service = Service::create([
                'slug' => 'service-page-header', // must be unique
                'section_badge' => 'Header',
                'title' => 'Page Header Container',
                'description' => 'This record stores page header and CTA settings. Do not delete.',
                'is_active' => false,
                'show_on_homepage' => false,
            ]);
        }

        // Now update header + CTA fields
        $service->update([
            'page_badge' => $request->page_badge,
            'page_title' => $request->page_title,
            'page_subtitle' => $request->page_subtitle,
            'services_offered' => $request->services_offered,
            'client_satisfaction' => $request->client_satisfaction,
            'support_availability' => $request->support_availability,
            'cta_title' => $request->cta_title,
            'cta_subtitle' => $request->cta_subtitle,
            'cta_primary_button_text' => $request->cta_primary_button_text,
            'cta_primary_button_url' => $request->cta_primary_button_url,
            'cta_secondary_button_text' => $request->cta_secondary_button_text,
            'cta_secondary_button_url' => $request->cta_secondary_button_url,
        ]);

        return back()->with('success', 'Services Page Updated Successfully ✅');
    }


    /* -------------------- MAIN SERVICE CRUD -------------------- */

    public function storeService(Request $request)
    {
        $request->validate([
            'section_badge' => 'required',
            'title' => 'required',
            'description' => 'required',
            'order' => 'required|numeric',
        ]);

        $data = $request->only(['section_badge', 'title', 'description', 'order', 'button_text', 'button_url']);
        $data['is_active'] = 1;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($data);

        return response()->json(['success' => true, 'message' => 'Service Added Successfully ✅']);
    }

    public function updateService(Request $request, Service $service)
    {
        $request->validate([
            'section_badge' => 'required',
            'title' => 'required',
            'description' => 'required',
            'order' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image) Storage::disk('public')->delete($service->image);
            $service->image = $request->file('image')->store('services', 'public');
        }

        $service->update([
            'section_badge' => $request->section_badge,
            'title' => $request->title,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'order' => $request->order,
            'is_active' => $request->has('is_active'),
            'show_on_homepage' => $request->has('show_on_homepage'),
        ]);
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Service Updated Successfully ✅'
            ]);
        }

        return back()->with('success', 'Service Updated Successfully ✅');

        
    }

    public function deleteService(Service $service)
    {
        if ($service->image) Storage::disk('public')->delete($service->image);

        $service->features()->delete();
        $service->technologies()->delete();
        $service->delete();

        return response()->json(['success' => true, 'message' => 'Service Deleted Successfully ✅']);
    }

    public function view(Service $service)
    {
        return response()->json([
            'service' => $service->load('features', 'technologies')
        ]);
    }

    /* -------------------- FEATURE CRUD -------------------- */

    public function storeFeature(Request $request)
    {
        ServiceFeature::create($request->all());
        return back()->with('success', 'Feature Added ✅');
    }

    public function updateFeature(Request $request, ServiceFeature $feature)
    {
        $feature->update($request->all());
        return back()->with('success', 'Feature Updated ✅');
    }

    public function deleteFeature(ServiceFeature $feature)
    {
        $feature->delete();
        return back()->with('success', 'Feature Deleted ✅');
    }

    /* -------------------- TECHNOLOGY CRUD -------------------- */

    public function storeTechnology(Request $request)
    {
        ServiceTechnology::create($request->all());
        return back()->with('success', 'Technology Added ✅');
    }

    public function updateTechnology(Request $request, ServiceTechnology $technology)
    {
        $technology->update($request->all());
        return back()->with('success', 'Technology Updated ✅');
    }

    public function deleteTechnology(ServiceTechnology $technology)
    {
        $technology->delete();
        return back()->with('success', 'Technology Deleted ✅');
    }

    /* -------------------- ADDITIONAL SERVICE CRUD -------------------- */

    public function storeAdditional(Request $request)
    {
        AdditionalService::create($request->all());
        return response()->json(['success' => true, 'message' => 'Additional Service Added ✅']);
    }

    public function updateAdditional(Request $request, AdditionalService $additionalService)
    {
        $additionalService->update($request->all());
        return response()->json(['success' => true, 'message' => 'Additional Service Updated ✅']);
    }

    public function deleteAdditional(AdditionalService $additionalService)
    {
        $additionalService->delete();
        return response()->json(['success' => true, 'message' => 'Additional Service Deleted ✅']);
    }
}
