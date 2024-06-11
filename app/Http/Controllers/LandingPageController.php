<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Group;
use App\Models\Instrumen;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $instruments = Instrumen::query()->count();
        $criterias = Criteria::query()->count();
        $groups = Group::query()->count();

        return view('welcome', [
            'users' => $users,
            'instruments' => $instruments,
            'criterias' => $criterias,
            'groups' => $groups
        ]);
    }
}
