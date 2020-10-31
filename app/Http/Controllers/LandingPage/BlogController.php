<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('landing-page/blog')
            ->with(['posts' => $posts]);
    }
}
