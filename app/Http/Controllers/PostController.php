<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function search()
    {
        return view('search');
    }

    public function index()
    {
        $posts = Post::all();

        return view('index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('edit', ['post' => $post]);
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

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');

        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        $post->save();

        return redirect('/posts');
    }

    public function ajax(Request $request)
    {
        $post = Post::find(1);

        return response()->json($post);
    }
}
