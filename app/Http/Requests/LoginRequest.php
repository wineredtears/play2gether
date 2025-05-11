<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:35|min:5',
            'password' => 'required|string|min:8',
        ];
    }

}
