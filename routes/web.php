<?php

use App\Http\Controllers\ProfileController;;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Public\BlogController as PublicBlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Public\ContactController as PublicContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\Public\PropertyController as PublicPropertyController;
use App\Http\Controllers\Admin\TeamMemberController as AdminTeamMemberController;
use App\Http\Controllers\Public\TeamController as PublicTeamController;
use App\Http\Controllers\Public\HomeController as PublicHomeController;
use App\Http\Controllers\Admin\CompanyDirectorController as AdminCompanyDirectorController;
use App\Http\Controllers\Public\CompanyDirectorController as PublicCompanyDirectorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [PublicHomeController::class, 'index'])->name('public.index');

Route::get('/about', function () {
    return view('public.about');
});

// Company Director route
Route::get('/about/company-director', [PublicCompanyDirectorController::class, 'index'])->name('public.company-director');

// Team route
Route::get('/about/our-team', [PublicTeamController::class, 'index'])->name('public.our-team');

// Property routes
Route::get('/properties', [PublicPropertyController::class, 'index'])->name('public.properties');
Route::get('/properties/residential-property', [PublicPropertyController::class, 'residential'])->name('public.residential-property');
Route::get('/properties/commercial-property', [PublicPropertyController::class, 'commercial'])->name('public.commercial-property');
Route::get('/properties/plots-villa', [PublicPropertyController::class, 'plotsVilla'])->name('public.plots-villa');

Route::get('/services', function () {
    return view('public.services');
});

Route::get('/services/advisory-investment', function () {
    return view('public.advisory-investment');
});

Route::get('/services/leasing-property', function () {
    return view('public.leasing-property');
});

Route::get('/services/acquisition-land', function () {
    return view('public.acquisition-land');
});


Route::get('/services/valuation-research', function () {
    return view('public.valuation-research');
});

Route::get('/services/leasing-retail', function () {
    return view('public.leasing-retail');
});

Route::get('/services/assistance-loan', function () {
    return view('public.assistance-loan');
});

Route::get('/mission', function () {
    return view('public.mission');
});

Route::get('/privacy-policy', function () {
    return view('public.privacy-policy');
});

Route::name('public.')->group(function () {
    // Blog
    Route::resource('blog', PublicBlogController::class);
    
    // Contact
    Route::resource('contact', PublicContactController::class);
});

// Contact form submission
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // Blog
    Route::resource('blog', AdminBlogController::class);

    // Contact
    Route::resource('contact', AdminContactController::class);

    // Property
    Route::resource('property', AdminPropertyController::class);

    // Team Member
    Route::resource('team-member', AdminTeamMemberController::class);

    // Company Director
    Route::resource('company-director', AdminCompanyDirectorController::class);

    // Testimonial
    Route::resource('testimonial', \App\Http\Controllers\Admin\TestimonialController::class);

    // Footer
    Route::resource('footer', \App\Http\Controllers\Admin\FooterController::class);

    // About Us
    Route::get('about-us', [AboutUsController::class, 'index'])->name('about-us.index');
    Route::post('about-us', [AboutUsController::class, 'store'])->name('about-us.store');

    // Contact Submissions
    Route::get('contact-submissions', [\App\Http\Controllers\Admin\ContactSubmissionController::class, 'index'])->name('contact-submissions.index');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
