<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Laravel\Sanctum\HasApiTokens;

class AuthenticationController extends BaseController
{
    use HasApiTokens;

    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
            'user_type' => $user->user_type,
            'message' => 'Login successful'
        ]);
    }

    public function registration(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'preset_address' => 'required|string',
            'bio' => 'nullable|string',
            'password' => 'required|string|min:6',
            'user_type' => 'required|in:admin,client,agent' // Validating user_type
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'preset_address' => $request->preset_address,
            'bio' => $request->bio,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type, // Assigning user_type during registration
        ]);
        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
            'user_type' => $user->user_type // Returning user_type in the response
        ]);
    }

    public function forgot(Request $request): JsonResponse
    {
        $request->validate(['email' => 'required|email']);
        $token = bin2hex(random_bytes(50));
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => now()]
        );
        return response()->json(['message' => 'Reset token generated', 'token' => $token]);
    }

    public function reset(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $reset = DB::table('password_resets')->where('email', $request->email)->where('token', $request->token)->first();
        if (!$reset) {
            return response()->json(['message' => 'Invalid token or email'], 400);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where('email', $request->email)->delete();
        return response()->json(['message' => 'Password reset successfully']);
    }

    public function verification(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|digits:6'
        ]);
        $verification = DB::table('verification_codes')->where('email', $request->email)->where('code', $request->code)->first();
        if (!$verification) {
            return response()->json(['message' => 'Invalid verification code'], 400);
        }
        User::where('email', $request->email)->update(['email_verified_at' => now()]);
        DB::table('verification_codes')->where('email', $request->email)->delete();
        return response()->json(['message' => 'Email verified successfully.']);
    }

    public function details(Request $request): JsonResponse
    {
        return response()->json([
            'user' => $request->user(),
            'user_type' => $request->user()->user_type // Return user_type
        ]);
    }

    public function changeDetails(Request $request): JsonResponse
    {
        $user = $request->user();
        $user->update($request->only(['name', 'phone', 'preset_address', 'bio']));
        return response()->json([
            'message' => 'User details updated',
            'user' => $user,
            'user_type' => $user->user_type
        ]);
    }

    public function changePassword(Request $request): JsonResponse
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6',
            'new_confirm_password' => 'required|same:new_password'
        ]);
        $user = $request->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['message' => 'Incorrect current password'], 400);
        }
        $user->update(['password' => Hash::make($request->new_password)]);
        return response()->json(['message' => 'Password changed successfully']);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }

}
