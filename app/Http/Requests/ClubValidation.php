<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubValidation extends FormRequest
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
           'business_name' => 'required|max:50',
           'club_number' => 'required|max:10',
           'club_name' => 'required|max:100',
           'club_state' => 'required|max:100',
           'club_description' => 'required|max:100',
           'website_title' => 'required|max:100',
           'club_logo' => 'required|mimes:jpg,bmp,png,pdf,docx',
           'club_banner' => 'required|mimes:jpg,bmp,png,pdf,docx',
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
            'business_name.required' => 'title is required!',
            'business_name.max' => 'title is of maximum 50 characters',
            'club_number.required' => 'product_title is required!',
            'club_number.max' => 'Number must not be more than 10',
            'club_name.required' => 'Club Name is required!',
            'club_name.max' => 'club_name must not be greater than 100 characters!',
            'club_state.required' => 'Club State is required!',
            'club_state.max' => 'club_state must not be greater than 100 characters!',
            'club_description.required' => 'Club Name is required!',
            'club_description.max' => 'club_name must not be greater than 100 characters!',
            'website_title.required' => 'Website Title is required!',
            'website_title.max' => 'club_name must not be greater than 100 characters!',
            'club_logo.required' => 'club logo is required!',
            'club_logo.mimes' => 'Logo file must be of jpg,bmp,png,pdf or docx',
            'club_banner.required' => 'club banner is required!',
            'club_banner.mimes' => 'Logo file must be of jpg,bmp,png,pdf or docx',
        ];
    }
}
