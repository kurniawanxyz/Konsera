<?php

namespace App\Http\Controllers;

use App\Models\Instrumen;
use Illuminate\Http\Request;

class UserInstrumentController extends Controller
{

    public function __construct(private Instrumen $instruments)
    {
        $this->instruments = $instruments;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.instrument.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $instrument = $this->instruments->with(
            'criteria',
            'sub_criterias',
            'statements',
            'answer',
        )
            ->findOrFail($id);

        return view('user.instrument.show', compact('instrument'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
