<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function ajax(Request $request)
    {
        $query = $request->get('query') ?? '';

        if ($query == '') {
            $post = Post::all();
            return response()->json($post);
        }

        $post = Post::where('title', $query)->orWhere('body', $query)->get();
        return response()->json($post);
    }
}
