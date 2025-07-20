<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainPageController extends Controller
{
    /**
     * Display the main page management form
     */
    public function index()
    {
        $mainPage = MainPage::active()->first() ?? new MainPage();
        return view('admin.main-page.index', compact('mainPage'));
    }

    /**
     * Update the main page content
     */
    public function update(Request $request)
    {
        $request->validate([
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'hero_search_placeholder' => 'nullable|string|max:255',
            'about_title' => 'nullable|string|max:255',
            'about_content' => 'nullable|string',
            'about_journey_content' => 'nullable|string',
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features_title' => 'nullable|string|max:255',
            'features_subtitle' => 'nullable|string',
            'feature1_title' => 'nullable|string|max:255',
            'feature1_description' => 'nullable|string',
            'feature1_icon' => 'nullable|string|max:255',
            'feature2_title' => 'nullable|string|max:255',
            'feature2_description' => 'nullable|string',
            'feature2_icon' => 'nullable|string|max:255',
            'feature3_title' => 'nullable|string|max:255',
            'feature3_description' => 'nullable|string',
            'feature3_icon' => 'nullable|string|max:255',
            'feature4_title' => 'nullable|string|max:255',
            'feature4_description' => 'nullable|string',
            'feature4_icon' => 'nullable|string|max:255',
            'services_title' => 'nullable|string|max:255',
            'service1_title' => 'nullable|string|max:255',
            'service1_description' => 'nullable|string',
            'service1_icon' => 'nullable|string|max:255',
            'service2_title' => 'nullable|string|max:255',
            'service2_description' => 'nullable|string',
            'service2_icon' => 'nullable|string|max:255',
            'service3_title' => 'nullable|string|max:255',
            'service3_description' => 'nullable|string',
            'service3_icon' => 'nullable|string|max:255',
            'find_home_title' => 'nullable|string|max:255',
            'find_home_description' => 'nullable|string',
            'find_home_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'find_home_feature1_title' => 'nullable|string|max:255',
            'find_home_feature1_description' => 'nullable|string',
            'find_home_feature2_title' => 'nullable|string|max:255',
            'find_home_feature2_description' => 'nullable|string',
            'find_home_feature3_title' => 'nullable|string|max:255',
            'find_home_feature3_description' => 'nullable|string',
            'buy_properties_count' => 'nullable|integer|min:0',
            'sell_properties_count' => 'nullable|integer|min:0',
            'all_properties_count' => 'nullable|integer|min:0',
            'agents_count' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $mainPage = MainPage::active()->first();
        
        if (!$mainPage) {
            $mainPage = new MainPage();
        }

        // Handle about image upload
        if ($request->hasFile('about_image')) {
            if ($mainPage->about_image) {
                Storage::disk('public')->delete($mainPage->about_image);
            }
            $aboutImagePath = $request->file('about_image')->store('main-page', 'public');
            $mainPage->about_image = $aboutImagePath;
        }

        // Handle find home image upload
        if ($request->hasFile('find_home_image')) {
            if ($mainPage->find_home_image) {
                Storage::disk('public')->delete($mainPage->find_home_image);
            }
            $findHomeImagePath = $request->file('find_home_image')->store('main-page', 'public');
            $mainPage->find_home_image = $findHomeImagePath;
        }

        // Update other fields
        $mainPage->fill($request->except(['about_image', 'find_home_image']));
        
        // Handle checkbox for is_active
        $mainPage->is_active = $request->has('is_active');
        
        $mainPage->save();

        return redirect()->route('admin.main-page.index')
            ->with('success', 'Main page content updated successfully!');
    }
}
