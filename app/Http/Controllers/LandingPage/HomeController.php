<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();

        return view('landing-page/index')
            ->with(['banners' => $banners]);
    }
}
