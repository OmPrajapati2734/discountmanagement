<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreValidation extends FormRequest
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
           'title' => 'required|max:50',
           'product_title' => 'required|max:50',
           'type' => 'required|max:100',
        ];
    } 

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'title is required!',
            'title.max' => 'title is of maximum 50 characters',
            'product_title.required' => 'product_title is required!',
            'product_title.max' => 'product_title is of maximum 50 characters!',
            'type.required' => 'type is required!',
            'type.max' => 'type is of maximum 100 characters!',
        ];
    }
}
