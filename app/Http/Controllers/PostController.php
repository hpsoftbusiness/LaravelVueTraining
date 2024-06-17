<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function newPost()
    {
        return view('newPost');
    }

    public function listPost()
    {
        $users = Post::all();

        return view('listPost', ['users' => $users]);
    }

    public function submit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $post = new Post();
        $post->title = $name;
        $post->body = $email;
        $post->save();

        return back()->with('success', 'Form submitted successfully!');
    }
}
