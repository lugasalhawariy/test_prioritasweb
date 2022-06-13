<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all()
    {
        $data = Post::all();

        return response([
            'data' => PostResource::collection($data),
        ]);
    }

    public function show($id)
    {
        $data = Post::where('id', $id)->get();

        return response([
            'data' => PostResource::collection($data)
        ]);
    }
}
