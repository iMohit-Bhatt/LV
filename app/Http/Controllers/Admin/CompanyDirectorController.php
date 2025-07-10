<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CompanyDirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = CompanyDirector::orderBy('sort_order', 'asc')->orderBy('created_at', 'desc')->get();
        return view('admin.company-directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company-directors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=1200,height=1200',
            'is_active' => 'boolean',
            'sort_order' => 'integer'
        ], [
            'image.dimensions' => 'The image must be exactly 1200x1200 pixels.',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('company-directors', 'public');
            $data['image'] = $imagePath;
        }

        CompanyDirector::create($data);

        return redirect()->route('admin.company-director.index')
            ->with('success', 'Company director created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $director = CompanyDirector::findOrFail($id);
        return view('admin.company-directors.show', compact('director'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $director = CompanyDirector::findOrFail($id);
        return view('admin.company-directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $director = CompanyDirector::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=1200,height=1200',
            'is_active' => 'boolean',
            'sort_order' => 'integer'
        ], [
            'image.dimensions' => 'The image must be exactly 1200x1200 pixels.',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($director->image && Storage::disk('public')->exists($director->image)) {
                Storage::disk('public')->delete($director->image);
            }
            
            $imagePath = $request->file('image')->store('company-directors', 'public');
            $data['image'] = $imagePath;
        }

        $director->update($data);

        return redirect()->route('admin.company-director.index')
            ->with('success', 'Company director updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $director = CompanyDirector::findOrFail($id);
        
        // Delete image
        if ($director->image && Storage::disk('public')->exists($director->image)) {
            Storage::disk('public')->delete($director->image);
        }
        
        $director->delete();

        return redirect()->route('admin.company-director.index')
            ->with('success', 'Company director deleted successfully.');
    }
}
