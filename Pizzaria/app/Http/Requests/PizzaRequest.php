<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PizzaRequest extends FormRequest
{
        public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'erros' => $validator->errors()
        ], 422));
    }

    
    public function rules(): array
    {

        return [
            'name' => 'required',
            'ingredients' => 'required',
            'preco_base' => 'required',
            'tamanho' => 'required',
        ];
    }
}
