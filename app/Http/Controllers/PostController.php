<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show()
    {
        $users = Post::all();
        return view('posts', [
            'users' => $users
        ]);
    }
}
