<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return users::all();
    }

    public function show(users $users)
    {
        return $users;
    }

    public function store(Request $request)
    {
        $users = users::create($request->all());

        return response()->json($users, 201);
    }

    public function update(Request $request, users $users)
    {
        $users->update($request->all());

        return response()->json($users, 200);
    }

    public function delete(users $users)
    {
        $users->delete();

        return response()->json(null, 204);
    }
}
