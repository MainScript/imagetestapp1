<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('dashboard.dashboard',
        [
            'posts' => $posts,
        ]
    );
    }
}
