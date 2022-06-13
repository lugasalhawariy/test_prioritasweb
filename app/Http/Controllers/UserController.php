<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all()
    {
        $data = User::with('posts')->get();

        return response([
            'data' => UserResource::collection($data)
        ]);
    }

    public function show($id)
    {
        $data = User::where('id', $id)->get();

        return response([
            'data' => UserResource::collection($data)
        ]);
    }
}
