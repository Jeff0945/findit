<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name'  => ['required'],
            'middle_name' => ['nullable'],
            'last_name'   => ['required'],
            'email'       => ['required', 'email', 'unique:users,email'],
            'password'    => ['required', 'confirmed', 'min:8'],
        ];
    }
    
    public function authorize(): bool
    {
        return !Auth::check();
    }
}
