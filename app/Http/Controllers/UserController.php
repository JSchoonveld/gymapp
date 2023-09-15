<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request): array
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth-token');

        Auth::login($user);

        return ['token' => $token->plainTextToken];
    }

    public function login(UserLoginRequest $request): array | JsonResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();

            if ($user->tokens()->where('name', 'auth-token')->exists()) {
                $user->tokens()->where('name', 'auth-token')->delete();
            }

            $token = $user->createToken('auth-token');

            return ['token' => $token->plainTextToken];
        }
        return response()->json(['message' => 'Invalid email or password'], 401);
    }
}
