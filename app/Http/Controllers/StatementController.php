<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use App\Http\Requests\StoreStatementRequest;
use App\Http\Requests\UpdateStatementRequest;
use App\Models\SubKriteria;
use Exception;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $sub_criteria_id)
    {
        $statements = Statement::where("sub_kriteria_id",$sub_criteria_id)->paginate(5);
        $instrumen_id = SubKriteria::findOrFail($sub_criteria_id)->instrumen_id;
        return view("admin.instrumen.statements.index",compact("statements","sub_criteria_id","instrumen_id"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $sub_criteria_id)
    {
        return view("admin.instrumen.statements.create", compact("sub_criteria_id"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatementRequest $request, int $sub_criteria_id)
    {
        try{
            $data = $request->validated();
            $instrumen_id = SubKriteria::findOrFail($sub_criteria_id)->instrumen_id;
            $data['sub_kriteria_id'] = $sub_criteria_id;
            $data['instrumen_id'] = $instrumen_id;
            $statement = Statement::create($data);
            return redirect()->route('statements.index', $sub_criteria_id)->with('success', 'Statement updated successfully.');
        }catch(Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Statement $statement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $statement)
    {
        $statement = Statement::findOrFail($statement);
        return view("admin.instrumen.statements.edit",compact('statement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatementRequest $request, int $statement)
    {
        try{
            $data = $request->validated();
            $statement = Statement::findOrFail($statement);
            $statement->update($data);
            return redirect()->route('statements.index',$statement->sub_kriteria_id)->with('success', 'Statement updated successfully.');
        }catch(Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $statement)
    {
        try{
            Statement::findOrFail($statement)->delete();
            return back()->with("success","Berhasil menghapus Statement");
        }catch(Exception $e)
        {
            return back()->with("error",$e->getMessage());
        }
    }
}
