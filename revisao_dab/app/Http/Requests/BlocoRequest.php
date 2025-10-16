<?php

namespace App\Http\Requests;

use App\Rules\UsuarioRule;
use Illuminate\Foundation\Http\FormRequest;

class BlocoRequest extends FormRequest
{
    protected $rule;

    public function __construct(UsuarioRule $rule) {
        $this->rule = $rule;
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();
        if (!$user) return false;

        $adminId = \App\Models\TipoUsuario::where('tipo', 'Admin')->value('id') ?? 1;
        $propId = \App\Models\TipoUsuario::where('tipo', 'Proprietário')->value('id') ?? 2;

        $tipoNome = optional($user->tipo)->tipo;
        return ((int)$user->tipo_usuario_id === (int)$propId)
            || ((int)$user->tipo_usuario_id === (int)$adminId)
            || ($tipoNome === 'Proprietário')
            || ($tipoNome === 'Admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'bloco' => 'required|string',
            'descricao' => 'sometimes|nullable|string',
            // expects foreign key ids
            'condominio' => 'required|integer|exists:condominios,id'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute deve ser uma string.',
            'integer' => 'O campo :attribute deve ser um inteiro.',
            'exists' => 'O :attribute informado não existe.'
        ];
    }
}
