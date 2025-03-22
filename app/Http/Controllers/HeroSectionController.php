<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroSectionRequest;
use App\Http\Requests\UpdateHeroSectionRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero_sections = HeroSection::orderBy('order')->paginate(10);
        return view('admin.hero_sections.index', compact('hero_sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero_sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroSectionRequest $request)
    {
        $validated = $request->validated();
        
        if ($request->hasFile('background_image')) {
            $validated['background_image'] = $request->file('background_image')->store('hero-sections/backgrounds', 'public');
        }
        
        if ($request->hasFile('thumbnail_image')) {
            $validated['thumbnail_image'] = $request->file('thumbnail_image')->store('hero-sections/thumbnails', 'public');
        }
        
        $validated['background_class'] = $validated['background_class'] ?? '';
        $validated['order'] = $validated['order'] ?? 1;
        
        HeroSection::create($validated);
        
        return redirect()->route('admin.hero_sections.index')
            ->with('success', 'Hero section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSection $heroSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $heroSection)
    {
        return view('admin.hero_sections.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroSectionRequest $request, HeroSection $heroSection)
    {
        $validated = $request->validated();

        $validated['background_class'] = $validated['background_class'] ?? '';
        
        if ($request->hasFile('background_image')) {
            if ($heroSection->background_image) {
                Storage::disk('public')->delete($heroSection->background_image);
            }
            $validated['background_image'] = $request->file('background_image')->store('hero-sections/backgrounds', 'public');
        }
        
        if ($request->hasFile('thumbnail_image')) {
            if ($heroSection->thumbnail_image) {
                Storage::disk('public')->delete($heroSection->thumbnail_image);
            }
            $validated['thumbnail_image'] = $request->file('thumbnail_image')->store('hero-sections/thumbnails', 'public');
        }
        
        $heroSection->update($validated);
        
        return redirect()->route('admin.hero_sections.index')
            ->with('success', 'Hero section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        if ($heroSection->background_image) {
            Storage::disk('public')->delete($heroSection->background_image);
        }
        
        if ($heroSection->thumbnail_image) {
            Storage::disk('public')->delete($heroSection->thumbnail_image);
        }
        
        $heroSection->delete();
        
        return redirect()->route('admin.hero_sections.index')
            ->with('success', 'Hero section deleted successfully.');
    }

    public function getBannerData()
    {
        $heroSections = HeroSection::orderBy('order')->get();

        $slides = $heroSections->map(function ($section, $index) {
            return [
                'title' => $section->heading,
                'description' => $section->subheading,
                'button_text' => 'Book Appointment',
                'button_link' => 'appoinment.html',
                'shape_image' => asset('storage/' . $section->background_image),
                'class' => $this->getClassByIndex($index)
            ];
        });

        $thumbnails = $heroSections->map(function ($section) {
            return [
                'image' => asset('storage/' . $section->thumbnail_image)
            ];
        });

        return [
            'slides' => $slides,
            'thumbnails' => $thumbnails
        ];
    }

    private function getClassByIndex($index)
    {
        $classes = ['', 'two', 'three', 'five'];
        return $classes[$index % count($classes)];
    }
}