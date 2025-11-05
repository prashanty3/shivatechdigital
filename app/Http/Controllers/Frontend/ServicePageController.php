<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service; // Add this import
use App\Models\AdditionalService; // Add this import
use Illuminate\Http\Request;


class ServicePageController extends Controller
{
    //
     public function index()
    {
        $pageData = Service::first();
        $services = Service::with(['features.active', 'technologies.active'])
            ->active()
            ->ordered()
            ->get();
        $additionalServices = AdditionalService::active()->ordered()->get();

        return view('website.services', compact('pageData', 'services', 'additionalServices'));
    }
}
