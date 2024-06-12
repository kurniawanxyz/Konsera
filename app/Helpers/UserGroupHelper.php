<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserGroupHelper
{
    public static function getUserGroups()
    {
        if ($user = Auth::user()) {
            return User::findOrFail($user->id)
                ->groups()
                ->withPivot('created_at')
                ->orderBy('pivot_created_at', 'desc')
                ->get();
        }

        return collect();
    }
}
