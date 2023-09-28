<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models collegati
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
   

    public function show( string $slug)
    {
        $posts = Post::where('slug', $slug)->firstOrFail();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

}


