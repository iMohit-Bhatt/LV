<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display residential properties page
     */
    public function residential()
    {
        $properties = Property::active()
            ->residential()
            ->ordered()
            ->get();

        return view('public.residential-property', compact('properties'));
    }

    /**
     * Display commercial properties page
     */
    public function commercial()
    {
        $properties = Property::active()
            ->where('type', 'commercial')
            ->ordered()
            ->get();

        return view('public.commercial', compact('properties'));
    }

    /**
     * Display plots and villa properties page
     */
    public function plotsVilla()
    {
        $properties = Property::active()
            ->whereIn('type', ['plot', 'villa'])
            ->ordered()
            ->get();

        return view('public.plots-villa', compact('properties'));
    }

    /**
     * Display all properties page
     */
    public function index()
    {
        $properties = Property::active()
            ->ordered()
            ->get();

        return view('public.properties', compact('properties'));
    }
}
