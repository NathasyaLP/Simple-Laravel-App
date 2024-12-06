<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(10);

        if ($request->expectsJson()) {
            return response()->json($posts);
        }
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);

        $post = Post::create($request->all());

        if ($request->expectsJson()) {
            return response()->json($post);
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Request $request, Post $post)
    {
        if ($request->expectsJson()) {
            return response()->json($post);
        }
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id . '|max:255',
            'content' => 'required',
        ]);

        $post->update($request->all());

        if ($request->expectsJson()) {
            return response()->json($post);
        }

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();

        if ($request->expectsJson()) {
            return response()->json([
                'status' => 'Post deleted successfuly',
            ], 200);
        }

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
