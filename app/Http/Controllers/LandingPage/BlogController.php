<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $pageNumber = $request->query('page');
        $posts = Post::paginate(1, ['*'], 'page', $pageNumber);

        return view('landing-page/blog')
            ->with(['posts' => $posts]);
    }
}
