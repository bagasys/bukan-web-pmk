<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Meeting;

class EventController extends Controller
{
    public function index()
    {
        $meetings = Meeting::all();

        return view('landing-page/events')
            ->with(['meetings' => $meetings]);
    }
}
