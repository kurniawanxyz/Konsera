<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAddAccessGroup;
use App\Models\Instrumen;
use App\Http\Requests\StoreInstrumenRequest;
use App\Http\Requests\UpdateInstrumenRequest;
use App\Models\Group;

class InstrumenController extends Controller
{
    /**
     * Menampilkan daftar instrumen.
     */
    public function index()
    {
            $instrumens = Instrumen::paginate(5);
            return view('admin.instrumen.index',compact('instrumens'));
    }

    public function addGroup(RequestAddAccessGroup $req, $instrumen_id)
    {

    }

    /**
     * Menampilkan form untuk membuat instrumen baru.
     */
    public function create()
    {
        try {
            return view('admin.instrumen.create');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menyimpan instrumen baru ke dalam penyimpanan.
     */
    public function store(StoreInstrumenRequest $request)
    {
        try {
            Instrumen::create($request->all());
            return redirect()->route('instruments.index')->with('success', 'Instrumen berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menampilkan instrumen yang ditentukan.
     */
    public function show(Instrumen $instrumen)
    {
        try {
            return view('admin.instrumen.show', compact('instrumen'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menampilkan form untuk mengedit instrumen yang ditentukan.
     */
    public function edit(int $instrumen)
    {
        try {
            $instrumen = Instrumen::findOrFail($instrumen);
            $groups = Group::all();
            return view('admin.instrumen.edit', compact('instrumen','groups'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Memperbarui instrumen yang ditentukan di dalam penyimpanan.
     */
    public function update(UpdateInstrumenRequest $request, int $instrumen)
    {
        try {
            $data = $request->validated();
            $instrumen = Instrumen::findOrFail($instrumen);
            if(isset($data['groups'])){
                $groups = $data['groups'];
                unset($data["groups"]);
            }else{
                $instrumen->groups()->sync([]);
            }
            $instrumen->update($data);
            return redirect()->route('instruments.index')->with('success', 'Instrumen berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Menghapus instrumen yang ditentukan dari penyimpanan.
     */
    public function destroy(Instrumen $instrumen)
    {
        try {
            $instrumen->delete();
            return redirect()->route('admin.instrumen.index')->with('success', 'Instrumen berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}

