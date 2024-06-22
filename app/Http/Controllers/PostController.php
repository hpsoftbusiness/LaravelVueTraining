<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function new()
    {
        return view('post/edit', ['edit' => false]);
    }

    public function index()
    {
        $posts = Post::all();

        return view('post/index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post/edit', ['edit' => $post]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('post/post');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $id = $request->input('id') ?? null;

        if (isset($id)) {
            $title = $request->input('title') ?? null;
            $body = $request->input('body') ?? null;

            $post = Post::find($id);
            $post->title = $title;
            $post->body = $body;
            $post->save();

            return response()->json(['message' => 'Post saved successfully'], 201);
        }

        Post::create($request->only(['title', 'body']));
        return response()->json(['message' => 'New post added successfully'], 201);
    }
}
