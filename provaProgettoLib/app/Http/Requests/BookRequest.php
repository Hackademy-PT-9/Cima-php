<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'pages'=>'required|integer',
            'year'=>'required|integer',
            'image'=>'mimes:png,bmp,png'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'il nome è obbligatorio',
            'name.string'=>'il nome è una stringa',
            'pages.required'=>'le pagine sono obbligatorie',
            'pages.integer'=>'le pagine devono essere un numero',
            'year.required'=>'anno obbligatorio',
            'year.integer'=>'anno deve essere un numero',
            'image.mimes'=>'estensione sbagliata'
        ];
    }
}
