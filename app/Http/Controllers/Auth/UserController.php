<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\UserLoginRequest;
use App\Http\Requests\V1\UserRegisterRequest;
use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use ApiResponses;

    public function register(UserRegisterRequest $request): Response
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth-token');

        event(new Registered($user));

        Auth::login($user);

        return $this->success('User registered successfully', ['access_token' => $token->plainTextToken, 'user' => $user], 201);
    }

    public function login(UserLoginRequest $request): array | JsonResponse
    {
        $request->validated($request->all());

        if (!Auth::attempt($request->only('email', 'password'))) {
            return $this->error('Invalid email or password', 401);
        }

        $user = User::firstWhere('email', $request->email);

        return $this->success('Authenticated', [
            'token' => $user->createToken('API token for '. $user->email)->plainTextToken,
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @return RedirectResponse|Response|Redirector
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return $this->success('User logged out successfully');
    }
}
