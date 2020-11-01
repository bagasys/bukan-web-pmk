<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\ProfileId;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        $profile = ProfileId::query()
            ->with(['parentable' => function (MorphTo $morphTo) {
                $morphTo->morphWith([
                    Student::class => ['calendar'],
                    Alumni::class => ['tags'],
                    Lecturer::class => ['author'],
                ]);
            }])->get();
    }
}
