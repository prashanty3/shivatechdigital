<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display settings form
     */
    public function index()
    {
        $settings = Setting::getSettings();
        return view('adminDashboard.pages.sitedetails', compact('settings'));
    }

    /**
     * Update settings
     */
    public function update(Request $request)
    {
        // dd($request->all());
        // Validation
        $validator = Validator::make($request->all(), [
            'site_name' => 'required|string|max:255',
            'site_tagline' => 'nullable|string|max:255',
            'site_email' => 'required|email|max:255',
            'site_phone' => 'nullable|string|max:20',
            'site_address' => 'nullable|string|max:500',
            'site_url' => 'nullable|url|max:255',
            'site_description' => 'nullable|string|max:1000',
            
            // Social Media
            'facebook_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            
            // Files
            'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'site_icon' => 'nullable|image|mimes:png,ico,jpg|max:512',
            'og_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            
            // Other
            'footer_text' => 'nullable|string|max:500',
            'timezone' => 'nullable|string',
            'site_status' => 'required|in:active,maintenance,offline',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $settings = Setting::getSettings();
        $data = $request->except(['site_logo', 'site_icon', 'og_image']);

        // Handle Site Logo Upload
        if ($request->hasFile('site_logo')) {
            // Delete old logo
            if ($settings->site_logo && Storage::disk('public')->exists($settings->site_logo)) {
                Storage::disk('public')->delete($settings->site_logo);
            }
            $data['site_logo'] = $request->file('site_logo')->store('settings/logos', 'public');
        }

        // Handle Site Icon Upload
        if ($request->hasFile('site_icon')) {
            // Delete old icon
            if ($settings->site_icon && Storage::disk('public')->exists($settings->site_icon)) {
                Storage::disk('public')->delete($settings->site_icon);
            }
            $data['site_icon'] = $request->file('site_icon')->store('settings/icons', 'public');
        }

        // Handle OG Image Upload
        if ($request->hasFile('og_image')) {
            // Delete old OG image
            if ($settings->og_image && Storage::disk('public')->exists($settings->og_image)) {
                Storage::disk('public')->delete($settings->og_image);
            }
            $data['og_image'] = $request->file('og_image')->store('settings/og-images', 'public');
        }

        // Update settings
        $settings->update($data);

        return redirect()->route('settings.index')
            ->with('success', 'Settings updated successfully!');
    }

    /**
     * Reset settings to default
     */
    public function reset()
    {
        try {
            $settings = Setting::getSettings();
            
            // Delete uploaded files
            if ($settings->site_logo) {
                Storage::disk('public')->delete($settings->site_logo);
            }
            if ($settings->site_icon) {
                Storage::disk('public')->delete($settings->site_icon);
            }
            if ($settings->og_image) {
                Storage::disk('public')->delete($settings->og_image);
            }

            // Reset to defaults
            $settings->update([
                'site_name' => config('app.name', 'Laravel'),
                'site_tagline' => null,
                'site_logo' => null,
                'site_icon' => null,
                'site_email' => config('mail.from.address'),
                'site_phone' => null,
                'site_address' => null,
                'site_url' => null,
                'site_description' => null,
                'facebook_url' => null,
                'twitter_url' => null,
                'linkedin_url' => null,
                'instagram_url' => null,
                'youtube_url' => null,
                'og_image' => null,
                'footer_text' => null,
                'timezone' => 'UTC',
                'site_status' => 'active',
            ]);

            return redirect()->route('settings.index')
                ->with('success', 'Settings reset to default values!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to reset settings. Please try again.');
        }
    }
}