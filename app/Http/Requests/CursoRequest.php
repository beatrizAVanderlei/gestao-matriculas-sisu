<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class CursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role == User::ROLE_ENUM['admin'];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'  => 'required|string|max:255',
            'codigo'=> 'required|string|min:5',
            'turno' => 'required',
            'quantidade_de_vagas' => 'required|integer|min:30|max:200',
        ];
    }
}
