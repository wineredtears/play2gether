<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:35|min:5|unique:users',
            'email' => 'required|string|email|max:255|unique:users|confirmed:confirmEmail',
            'confirmEmail' => 'required',
            'password' => 'required|string|min:8|confirmed:confirmPassword',
            'confirmPassword' => 'required',
        ];
    }
}
