<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Using Sanctum
    public function register(RegisterRequest $request) {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response() -> noContent();
    }
    public function login(LoginRequest $request) {
        if (Auth::attempt([
                'name' => $request->input('name'),
                'password' => $request->input('password')
        ])) {
            $request->session()->regenerate();

            return response() -> noContent();
        }
        return response() -> noContent(403);
    }
    public function logout() {
        $user = Auth::user();

        Auth::logout();

        return response() -> json(['name'=>$user->name]);
    }
}
