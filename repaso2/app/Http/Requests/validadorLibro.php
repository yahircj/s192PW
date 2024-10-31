<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
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
            'txtisbn' => 'required|digits:13|numeric',
            'txttitulo' => 'required|string|min:3|max:150',
            'txtautor' => 'required',
            'txtpaginas' => 'required|integer|min:1',
            'txtano' => 'required|integer|digits:4|min:1000|max:' . date('Y'),
            'txteditorial' => 'required',
            'txtemail' => 'required|email:rfc,dns',
        ];
    }    
}
