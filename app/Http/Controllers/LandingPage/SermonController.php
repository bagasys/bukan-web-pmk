<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\FridayServiceReport;

class SermonController extends Controller
{
    public function index()
    {
        $fridayservicereports = FridayServiceReport::all();

        return view('landing-page.sermons')
            ->with(['fridayservicereports' => $fridayservicereports]);
    }
}
