<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Property;
use App\Models\AboutUs;
use App\Models\MainPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with team members, testimonials, and recent properties
     */
    public function index()
    {
        $teamMembers = TeamMember::active()
            ->ordered()
            ->limit(3) // Show only 3 team members on homepage
            ->get();

        $testimonials = Testimonial::active()
            ->ordered()
            ->limit(4) // Show only 4 testimonials on homepage
            ->get();

        // Get recent properties (latest 4 properties)
        $recentProperties = Property::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        // Get AboutUs data for dynamic content
        $aboutUs = AboutUs::where('is_active', true)->first();

        // Get MainPage data for dynamic content
        $mainPage = MainPage::where('is_active', true)->first();

        // If no active MainPage record exists, create a default one
        if (!$mainPage) {
            $mainPage = MainPage::first();
        }

        return view('public.index', compact('teamMembers', 'testimonials', 'recentProperties', 'aboutUs', 'mainPage'));
    }
}
