<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function all()
    {
        $data = Tag::with('posts')->get();

        return response([
            'data' => TagResource::collection($data)
        ]);
    }

    public function show($id)
    {
        $data = Tag::where('id', $id)->get();

        return response([
            'data' => TagResource::collection($data)
        ]);
    }
}
