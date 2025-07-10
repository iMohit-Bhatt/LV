<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display the team page with team members
     */
    public function index()
    {
        $teamMembers = TeamMember::active()
            ->ordered()
            ->get();

        return view('public.our-team', compact('teamMembers'));
    }
}
