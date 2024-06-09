<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserGroupController extends Controller
{

    public function __construct(private Group $groups)
    {
        $this->groups = $groups;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.groups.index');
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
        $user = User::find(Auth::id());

        if ($user->isMember($id) == true) {
            $group = $this->groups->with('user', 'instrumens')
                ->findOrFail($id);

            return view('user.groups.show', compact('group'));
        } else {
            return redirect()->route('user.dashboard');
        }
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
