<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{

    public function index(): View
    {
        $posts = Post::query()->where('active', '=', 1)->whereDate('published_at', '<', Carbon::now())->orderBy('published_at', 'desc')->paginate(10);
        return view('home', compact('posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
