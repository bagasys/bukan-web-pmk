<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Lecturer;
use App\Models\ProfileId;
use App\Models\Student;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user()->profileIds[0];
        // $profiles = ProfileId::query()
        //     ->with(['model' => function (MorphTo $morphTo) {
        //         $morphTo->morphWith([
        //             Student::class,
        //             Lecturer::class,
        //             Alumni::class,
        //         ]);
        //     }])->get();
        // dd($user->profileIds[0]->model);
        return view('profile.index', compact('profile'));
    }

    public function edit(ProfileId $profile)
    {
        return view('profile.edit', compact('profile'));
    }
}
