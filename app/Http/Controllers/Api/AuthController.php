<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Standard Login (Email/Password)
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();

        // Issue Passport Token
        $token = $user->createToken('auth_token')->accessToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    /**
     * Redirect to Social Provider (e.g., Google)
     */
    public function redirectToProvider($provider)
    {
        // stateless() is often used for APIs to avoid session state issues
        return response()->json([
            'url' => Socialite::driver($provider)->stateless()->redirect()->getTargetUrl()
        ]);
    }

    /**
     * Handle Social Provider Callback
     */
    public function handleProviderCallback(Request $request, $provider)
    {
        try {
            // Note: If you are sending the 'code' from a frontend (SPA),
            // you might need to use `Socialite::driver($provider)->stateless()->userFromToken($token)`
            // or handle the code exchange manually depending on your flow.
            // Here we assume the server handles the callback directly.

            $socialUser = Socialite::driver($provider)->stateless()->user();

            // Find or Create User
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                    'password' => Hash::make(str()->random(24)), // Random password for social users
                    'email_verified_at' => now(),
                ]
            );

            // Issue Passport Token
            $token = $user->createToken('auth_token')->accessToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Social login failed',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Logout (Revoke Token)
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get Authenticated User
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
