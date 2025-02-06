<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateStoreRequest extends FormRequest
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
            'name' => 'required|string|unique:stores,name',
            'phone' => 'required|string|unique:stores,phone',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Field name must be required',
            'name.string' => 'Field name must have only letters',
            'name.unique' => 'Field name must be unique',
            'phone.required' => 'Field phone must be required',
            'phone.string' => 'Field phone must have only letters',
            'phone.unique' => 'Field phone must be unique',
            'category_id.required' => 'Field category must be required',
            'category_id.integer' => 'This category does not exist',
        ];
    }
}
