<?php

namespace App\Http\Requests\Mesociclos;

use Illuminate\Foundation\Http\FormRequest;

class CrearMesociclosRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'macro_id'  => 'required|exists:macros,id',
            'acento_id' => 'required|exists:acentos,id',
            'etapa'     => 'required|in:GEN,ESP,COMP'
        ];
    }
}
