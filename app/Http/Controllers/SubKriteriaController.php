<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestImportStatements;
use App\Models\SubKriteria;
use App\Http\Requests\StoreSubKriteriaRequest;
use App\Http\Requests\UpdateSubKriteriaRequest;
use App\Imports\PernyataanImport;
use Exception;
use Maatwebsite\Excel\Facades\Excel;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($instrumen_id)
    {
        $subCriterias = SubKriteria::where("instrumen_id",$instrumen_id)->paginate(5);
        return view('admin.instrumen.subCriteria.index',compact("subCriterias","instrumen_id"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($instrumen_id)
    {
        return view("admin.instrumen.subCriteria.create",compact("instrumen_id"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubKriteriaRequest $request,$instrumen_id)
    {
        try{
            $data = $request->validated();
            $data["instrumen_id"] = $instrumen_id;
            SubKriteria::create($data);
            return redirect()->route("subCriteria.index",$instrumen_id)->with("success","Berhasil menambahkan Sub Kriteria");
        }catch(Exception $e)
        {
            return back()->with("error",$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubKriteria $subKriteria)
    {
        //
    }

    public function import(RequestImportStatements $req ,$instrumen_id)
    {
        try{
            $excel = $req->file("excel");
            Excel::import(new PernyataanImport($instrumen_id),$excel);
            return back()->with("success","Berhasil menambahkan data");
        }catch(Exception $e)
        {
            return back()->with("error",$e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $subKriteria)
    {
        $subCriteria = SubKriteria::findOrFail($subKriteria);
        return view("admin.instrumen.subCriteria.edit",compact("subCriteria"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubKriteriaRequest $request, int $subKriteria)
    {
        try{
            $data = $request->validated();
            $subCriteria = SubKriteria::findOrFail($subKriteria);
            $subCriteria->update($data);
            return redirect()->route("subCriteria.index",$subCriteria->instrumen_id)->with("success","Berhasil menambahkan Sub Kriteria");
        }catch(Exception $e)
        {
            return back()->with("error",$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $subKriteria)
    {
        try{

            SubKriteria::findOrFail($subKriteria)->delete();
            return back()->with("success","Berhasil menghapus Sub Kriteria");
        }catch(Exception $e)
        {
            return back()->with("error",$e->getMessage());
        }
    }
}
