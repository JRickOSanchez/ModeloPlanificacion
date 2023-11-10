<?php

namespace App\Http\Requests\Macros;

use Illuminate\Foundation\Http\FormRequest;

class StoreMacroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:255',
            'branch'   => 'required|string|max:255',
            'sport'    => 'required|string|max:255',
            'start_at' => 'required|date|max:255',
            'end_at'   => 'required|after:start_at'
        ];
    }
}
