<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts/edit', ['editt' => false]);
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts/index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts/edit', ['editt' => $post]);
    }

    public function save(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');
        $id = $request->input('id');

        $post = Post::find($id);
        $post->title = $title;
        $post->body = $body;
        $post->save();

        return response()->json(['message' => 'Form data saved successfully'], 201);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('posts/posts');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');

        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        $post->save();

        return response()->json(['message' => 'Form data created successfully'], 201);
    }
}
