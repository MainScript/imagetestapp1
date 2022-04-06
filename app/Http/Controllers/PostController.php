<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('layouts.postcreation');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255',
            'title' => 'required',
            'imageurl' => 'required|url',
        ]);

        $post = auth()->user()->posts()->create($request->only(['body', 'title', 'imageurl']));

        return redirect()->route('dashboard')->with('status', 'Post created successfully');
    }
}
