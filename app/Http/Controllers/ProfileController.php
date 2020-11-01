<?php

namespace App\Http\Controllers;

use App\Models\ProfileId;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user()->profileIds;
        dd($profile->model);

        return view('profile.index', compact('profile'));
    }

    public function edit(ProfileId $profile)
    {
        return view('profile.edit', compact('profile'));
    }
}
