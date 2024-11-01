<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validaciones extends FormRequest
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
            'isbn' => 'required|numeric|digits:13',            
            'Titulo' => 'required|string|max:150',            
            'Autor' => 'required|string|max:255',             
            'Paginas' => 'required|integer|min:1',            
            'Año' => 'required','integer','digits:4','min:1000',   
                'max:' . date('Y'),
            'Editorial' => 'required|string|max:255',         
            'Correo' => 'required|email'  
        ];
    }
}
