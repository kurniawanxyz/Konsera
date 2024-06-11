<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Http\Requests\StoreCriteriaRequest;
use App\Http\Requests\UpdateCriteriaRequest;
use App\Models\Instrumen;
use Exception;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $instrumen_id)
    {
            $instrumen = Instrumen::findOrFail($instrumen_id);
            $criteria = $instrumen->criteria;
            return view("admin.instrumen.criteria.index", compact('criteria','instrumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $instrumen_id)
    {
        try {
            return view("admin.instrumen.criteria.create", compact("instrumen_id"));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to load create form.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriteriaRequest $request, int $instrumen_id)
    {
        try {
            $validated = $request->validated();
            $validated['instrumen_id'] = $instrumen_id;
            Criteria::create($validated);
            return redirect()->route('criteria.index',$instrumen_id)->with('success', 'Criteria created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Criteria $criteria)
    {
        try {
            return view("admin.instrumen.show_criteria", compact('criteria'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to load criteria.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criteria $criteria)
    {
        try {
            return view("admin.instrumen.criteria.edit", compact('criteria'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to load edit form.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCriteriaRequest $request, Criteria $criteria)
    {
        try {
            $validated = $request->validated();
            $criteria->update($validated);
            return redirect()->route('criteria.index',$criteria->instrumen_id)->with('success', 'Criteria updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update criteria.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $criteria)
    {

        try {
            $criteria = Criteria::findOrFail($criteria);
            $criteria->delete();
        return redirect()->back()->with('success', 'Criteria deleted successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete criteria.');
        }
    }
}
