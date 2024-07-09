<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        if($validator->fails()){
            return response()->json(['erros' => $validator->errors()]);
        }

        $cr = $request->only('username', 'password');

        if (!Auth::attempt($cr)) {
            $user = User::where('email', $request->email)->first();

            $errorMessage = $user ? 'Password Salah' : 'Email tidak terdaftar';

            return response()->json(['message' => $errorMessage], 401);
        }

        $user = User::where('username', $request->username)->first();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'succes',
            'token' => $token,
            'type' => 'Bearer'
        ]);
    }
}
