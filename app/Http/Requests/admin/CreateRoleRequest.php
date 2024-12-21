<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleRequest extends FormRequest
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
            'name' => 'required|string|max:16|min:4|unique:roles,name',
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'The "name" field must be filled',
            'name.max' => 'The "name" must be less than 32 characters',
            'name.min' => 'The "name" must be at least 4 characters',
            'name.unique' => 'The "name" must be unique',
        ];
    }
}



