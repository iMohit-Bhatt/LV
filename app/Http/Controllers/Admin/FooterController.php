<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::first();
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'instagram_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
            'facebook_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'pinterest_url' => 'nullable|string|max:255',
            'dribbble_url' => 'nullable|string|max:255',
            'copyright_text' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        Footer::create($request->all());

        return redirect()->route('admin.footer.index')
            ->with('success', 'Footer settings created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footer.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footer = Footer::findOrFail($id);
        return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $footer = Footer::findOrFail($id);

        $request->validate([
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'instagram_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
            'facebook_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'pinterest_url' => 'nullable|string|max:255',
            'dribbble_url' => 'nullable|string|max:255',
            'copyright_text' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $footer->update($request->all());

        return redirect()->route('admin.footer.index')
            ->with('success', 'Footer settings updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();

        return redirect()->route('admin.footer.index')
            ->with('success', 'Footer settings deleted successfully.');
    }
}
