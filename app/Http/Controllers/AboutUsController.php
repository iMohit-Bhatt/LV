<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('admin.about-us.index', compact('aboutUs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'about_content' => 'required|string',
            'journey_content' => 'required|string',
            'hero_title' => 'required|string|max:255',
            'section_title' => 'required|string|max:255',
            'section_description' => 'required|string',
            'section_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'feature1_title' => 'required|string|max:255',
            'feature1_description' => 'required|string',
            'feature2_title' => 'required|string|max:255',
            'feature2_description' => 'required|string',
            'feature3_title' => 'required|string|max:255',
            'feature3_description' => 'required|string',
            'buy_properties_count' => 'required|integer|min:0',
            'sell_properties_count' => 'required|integer|min:0',
            'all_properties_count' => 'required|integer|min:0',
            'agents_count' => 'required|integer|min:0',
            'vision_title' => 'required|string|max:255',
            'vision_content' => 'required|string',
            'mission_title' => 'required|string|max:255',
            'mission_content' => 'required|string',
            'values_title' => 'required|string|max:255',
            'values_content' => 'required|string',
            'gallery_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_buy_count' => 'required|integer|min:0',
            'gallery_sell_count' => 'required|integer|min:0',
            'gallery_all_count' => 'required|integer|min:0',
            'gallery_agents_count' => 'required|integer|min:0',
        ]);

        $data = $request->except(['section_image', 'gallery_image1', 'gallery_image2', 'gallery_image3', 'is_active']);
        
        // Handle checkbox - if checkbox is checked, set to true, otherwise false
        $data['is_active'] = $request->has('is_active');

        // Handle section image upload
        if ($request->hasFile('section_image')) {
            if (AboutUs::first() && AboutUs::first()->section_image) {
                Storage::disk('public')->delete(AboutUs::first()->section_image);
            }
            $data['section_image'] = $request->file('section_image')->store('about-us', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_image1')) {
            if (AboutUs::first() && AboutUs::first()->gallery_image1) {
                Storage::disk('public')->delete(AboutUs::first()->gallery_image1);
            }
            $data['gallery_image1'] = $request->file('gallery_image1')->store('about-us', 'public');
        }

        if ($request->hasFile('gallery_image2')) {
            if (AboutUs::first() && AboutUs::first()->gallery_image2) {
                Storage::disk('public')->delete(AboutUs::first()->gallery_image2);
            }
            $data['gallery_image2'] = $request->file('gallery_image2')->store('about-us', 'public');
        }

        if ($request->hasFile('gallery_image3')) {
            if (AboutUs::first() && AboutUs::first()->gallery_image3) {
                Storage::disk('public')->delete(AboutUs::first()->gallery_image3);
            }
            $data['gallery_image3'] = $request->file('gallery_image3')->store('about-us', 'public');
        }

        $aboutUs = AboutUs::first();
        if ($aboutUs) {
            $aboutUs->update($data);
        } else {
            AboutUs::create($data);
        }

        return redirect()->route('admin.about-us.index')->with('success', 'About Us content updated successfully!');
    }
}
