<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function ajax(Request $request)
    {
        $post = Post::find(1);

        return response()->json($post);
    }
}
