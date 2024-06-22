<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function ajax(Request $request)
    {
        $query = $request->get('query');
        $post = Post::where('title', $query)->orWhere('body', $query)->first();
        return response()->json($post);
    }
}
