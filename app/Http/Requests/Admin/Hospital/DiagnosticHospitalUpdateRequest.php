<?php

namespace App\Http\Requests\Admin\Hospital;

use Illuminate\Foundation\Http\FormRequest;

class DiagnosticHospitalUpdateRequest extends FormRequest
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
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
            'subdistrict_id' => 'required|exists:sub_districts,id',
            'contact_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'type' => 'nullable|string|in:Public,Private,Government',
            'license_number' => 'nullable|string|max:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string|max:255',
            'type_hospital' => 'nullable|string',
            'status' => 'integer',
        ];
    }
}
