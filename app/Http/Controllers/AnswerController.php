<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use Exception;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($instrumen_id)
    {
        $answers = Answer::where("instrumen_id",$instrumen_id)->paginate(5);
        return view("admin.instrumen.answer.index",compact("answers","instrumen_id"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($instrumen_id)
    {
        return view("admin.instrumen.answer.create",compact("instrumen_id"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnswerRequest $request,$instrumen_id)
    {
        try {
            $validated = $request->validated();
            $validated["instrumen_id"] = $instrumen_id;
            Answer::create($validated);
            return redirect()->route('answer.index',$validated['instrumen_id'])->with('success', 'Answer created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $answer)
    {
        $answer = Answer::findOrFail($answer);
        return view("admin.instrumen.answer.edit",compact("answer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnswerRequest $request, int $answer)
    {
        try {
            $validated = $request->validated();
            $answer = Answer::findOrFail($answer);
            $answer->update($validated);
            return redirect()->route('answer.index', $answer->instrumen_id)->with('success', 'Answer created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $answer)
    {
        try{
            $answer = Answer::findOrFail($answer);
            $instrumen_id = $answer->instrumen_id;
            $answer->delete();
            return redirect()->route('answer.index',$instrumen_id)->with("success","Successfully deleted answer");
        }catch(Exception $e)
        {
            return back()->with("error",$e->getMessage());
        }
    }
}
