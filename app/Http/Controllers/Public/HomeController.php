<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with team members and testimonials
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

        return view('public.index', compact('teamMembers', 'testimonials'));
    }
}
