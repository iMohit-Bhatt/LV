<?php

use App\Http\Controllers\ProfileController;;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Public\BlogController as PublicBlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Public\ContactController as PublicContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('public.index');
})->name('public.index');

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/about/company-director', function () {
    return view('public.company-director');
});

Route::get('/about/our-team', function () {
    return view('public.our-team');
});

Route::get('/properties', function () {
    return view('public.properties');
});

Route::get('/properties/commercial-property', function () {
    return view('public.commercial');
});

Route::get('/properties/plots-villa', function () {
    return view('public.plots-villa');
});

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
