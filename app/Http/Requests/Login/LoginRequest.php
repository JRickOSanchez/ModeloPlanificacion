<?php

namespace App\Http\Requests\Login;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'    => 'required|email|exists:users|max:255',
            'password' => 'required|string|max:255'
        ];
    }

    /**
     * @return string[]
     */
    public function attributes(): array
    {
        return ['email' => 'Correo electrónico', 'password' => 'Contraseña'];
    }
}
