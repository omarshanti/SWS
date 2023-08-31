<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use \App\Models\User;

class AuthController extends Controller
{
    //
    public function Login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('mobile', ['role:user'])->plainTextToken
        ]);
    }
//to test it in postman
    /*
     * Send a POST request to your logout route or URL (e.g., /api/logout).
Make sure you include the necessary authentication headers, such as the Authorization header with the user's token.
Send the request and check the response. It should return a JSON response with the message "User logged out successfully."
     */
    public function logout($id)
    {
        $user = Auth::guard('sanctum')->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        return response()->json(['message' => 'User logged out successfully']);
    }
}
