<?php

namespace App\Http\Requests\Admin\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'qualifications' => 'required|string',
            'expert_in' => 'required|string',
            'organisation' => 'nullable|string|max:255',
            'email' => 'required|email|unique:doctors,email|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'pinterest_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'contact_number' => 'nullable|string|max:15', // Adjust max length as necessary
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Max 2MB
            'chamber_1_name' => 'nullable|string|max:255',
            'chamber_1_address' => 'nullable|string|max:255',
            'chamber_1_contact_number' => 'nullable|string|max:350',
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
            'sub_district_id' => 'required|exists:sub_districts,id',
            'hospital_id' => 'required|exists:hospitals,id',
        ];
    }
}
