<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Admin\ContactManagementController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\ServicePageController;

Route::get('/', function () {
    return view('website.pages.home');
})->name('home');
// Route::get('about', function () {
//     return view('website.pages.about');
// })->name('about');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServicePageController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('portfolio', function () {
    return view('website.pages.portfolio');
})->name('portfolio'); 


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('index', function () {
        return view('adminDashboard.pages.homepage');
        // return view('adminDashboard.index');
    })->name('index');
    
    Route::get('/contacts', [ContactManagementController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactManagementController::class, 'show'])->name('contacts.show');
    Route::put('/contacts/{contact}/status', [ContactManagementController::class, 'updateStatus'])->name('contacts.status');
    Route::put('/contacts/{contact}/notes', [ContactManagementController::class, 'updateNotes'])->name('contacts.notes');
    Route::delete('/contacts/{contact}', [ContactManagementController::class, 'destroy'])->name('contacts.destroy');
    
    // Bulk actions
    Route::post('/contacts/bulk-delete', [ContactManagementController::class, 'bulkDelete'])->name('contacts.bulk-delete');
    Route::post('/contacts/bulk-status', [ContactManagementController::class, 'bulkUpdateStatus'])->name('contacts.bulk-status');

        // Settings Routes
    Route::get('/sitesettings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/sitesettings', [SettingController::class, 'update'])->name('settings.update');
    Route::post('/sitesettings/reset', [SettingController::class, 'reset'])->name('settings.reset');
    
    // Route::get('sitedetails', function () {
    //     return view('adminDashboard.pages.sitedetails');
    // })->name('sitedetails');

    Route::get('sitedetails', [SettingController::class, 'index'])->name('sitedetails');
    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');


    // About Page Management
    Route::get('/admin/about/', [AboutPageController::class, 'index'])->name('about.index');
    Route::post('/admin/about/update', [AboutPageController::class, 'update'])->name('about.update');

    // Team Members
    Route::post('/admin/about/team/store', [AboutPageController::class, 'storeTeamMember'])->name('about.team.store');
    Route::put('/admin/about/team/{teamMember}', [AboutPageController::class, 'updateTeamMember'])->name('about.team.update');
    Route::delete('/admin/about/team/{teamMember}', [AboutPageController::class, 'deleteTeamMember'])->name('about.team.delete');

    // Timeline
    Route::post('/admin/about/timeline/store', [AboutPageController::class, 'storeTimeline'])->name('about.timeline.store');
    Route::put('/admin/about/timeline/{timeline}', [AboutPageController::class, 'updateTimeline'])->name('about.timeline.update');
    Route::delete('/admin/about/timeline/{timeline}', [AboutPageController::class, 'deleteTimeline'])->name('about.timeline.delete');

    // Core Values
    Route::post('/admin/about/value/store', [AboutPageController::class, 'storeCoreValue'])->name('about.value.store');
    Route::put('/admin/about/value/{coreValue}', [AboutPageController::class, 'updateCoreValue'])->name('about.value.update');
    Route::delete('/admin/about/value/{coreValue}', [AboutPageController::class, 'deleteCoreValue'])->name('about.value.delete');

    Route::get('/admin/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/admin/services/update', [ServiceController::class, 'update'])->name('services.update');

    Route::post('/admin/services/service/store', [ServiceController::class, 'storeService'])->name('services.service.store');
    Route::put('/admin/services/service/{service}', [ServiceController::class, 'updateService'])->name('services.service.update');
    Route::delete('/admin/services/service/{service}', [ServiceController::class, 'deleteService'])->name('services.service.delete');
    Route::get('/admin/services/service/{service}/view', [ServiceController::class, 'view']);

    Route::post('/admin/services/feature/store', [ServiceController::class, 'storeFeature'])->name('services.feature.store');
    Route::put('/admin/services/feature/{feature}', [ServiceController::class, 'updateFeature']);
    Route::delete('/admin/services/feature/{feature}', [ServiceController::class, 'deleteFeature']);

    Route::post('/admin/services/technology/store', [ServiceController::class, 'storeTechnology'])->name('services.technology.store');
    Route::put('/admin/services/technology/{technology}', [ServiceController::class, 'updateTechnology']);
    Route::delete('/admin/services/technology/{technology}', [ServiceController::class, 'deleteTechnology']);

    Route::post('/admin/services/additional/store', [ServiceController::class, 'storeAdditional'])->name('services.additional.store');
    Route::put('/admin/services/additional/{additionalService}', [ServiceController::class, 'updateAdditional']);
    Route::delete('/admin/services/additional/{additionalService}', [ServiceController::class, 'deleteAdditional']);

});
