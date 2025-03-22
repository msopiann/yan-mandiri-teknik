<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = Statistic::orderByDesc('id')->paginate(10);
        return view('admin.statistics.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatisticRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('icon')) {
            $path = $request->file('icon')->store('statistics/icons', 'public');
            $validated['icon'] = $path;
        }

        Statistic::create($validated);

        return redirect()->route('admin.statistics.index')
            ->with('success', 'Statistic created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistic $statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistic $statistic)
    {
        return view('admin.statistics.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatisticRequest $request, Statistic $statistic)
    {
        $validated = $request->validated();

        if ($request->hasFile('icon')) {
            if ($statistic->icon && Storage::disk('public')->exists($statistic->icon)) {
                Storage::disk('public')->delete($statistic->icon);
            }

            $path = $request->file('icon')->store('statistics/icons', 'public');
            $validated['icon'] = $path;
        }

        $statistic->update($validated);

        return redirect()->route('admin.statistics.index')
            ->with('success', 'Statistic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistic $statistic)
    {
        if ($statistic->icon && Storage::disk('public')->exists($statistic->icon)) {
            Storage::disk('public')->delete($statistic->icon);
        }

        $statistic->delete();

        return redirect()->route('admin.statistics.index')
            ->with('success', 'Statistic deleted successfully.');
    }
}