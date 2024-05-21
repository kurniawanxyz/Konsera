<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;

class GroupController extends Controller
{
    /**
     * Menampilkan daftar grup.
     */
    public function index()
    {
        $groups = Group::paginate(5);
        return view('admin.groups.index', compact('groups'));
    }

    /**
     * Menampilkan form untuk membuat grup baru.
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Menyimpan grup baru ke dalam penyimpanan.
     */
    public function store(StoreGroupRequest $request)
    {
        Group::create($request->all());
        return redirect()->route('groups.index')->with('success', 'Grup berhasil ditambahkan');
    }

    /**
     * Menampilkan grup yang ditentukan.
     */
    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    /**
     * Menampilkan form untuk mengedit grup yang ditentukan.
     */
    public function edit(Group $group)
    {
        return view('admin.groups.edit', compact('group'));
    }

    /**
     * Memperbarui grup yang ditentukan di dalam penyimpanan.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $data = $request->validated();
        $group->update($data);
        return redirect()->route('groups.index')->with('success', 'Grup berhasil diperbarui');
    }

    /**
     * Menghapus grup yang ditentukan dari penyimpanan.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index')->with('success', 'Grup berhasil dihapus');
    }
}
