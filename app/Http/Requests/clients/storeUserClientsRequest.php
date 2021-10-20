<?php

namespace App\Http\Requests\clients;

use Illuminate\Foundation\Http\FormRequest;

class storeUserClientsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            "name" => 'required',
            "email" => '',
            "phone" => '',
            "address" => ''
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Se requiere un nombre',
        ];
    }
}
