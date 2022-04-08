<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Resources\User\MainResource;
use App\Http\Resources\User\MainCollection;

class UserController extends Controller
{
    public function index()
    {
        return new MainCollection(User::all());
    }

    public function show(User $user)
    {
        return new MainResource($user);
    }

    public function store(UserRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $password = 12345678;
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($password)
            ]);
            $user->profile()->create([
                'google_id' => $request->google_id,
                'avatar' => $request->avatar,
            ]);
        }
        return [
            'status' => 'saved',
            'message' => 'user saved successfully',
            'user' => new MainResource($user)
        ];
    }
}
