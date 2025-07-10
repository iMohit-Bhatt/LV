<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\CompanyDirector;
use Illuminate\Http\Request;

class CompanyDirectorController extends Controller
{
    /**
     * Display the company director page with directors
     */
    public function index()
    {
        $directors = CompanyDirector::active()
            ->ordered()
            ->get();

        return view('public.company-director', compact('directors'));
    }
}
