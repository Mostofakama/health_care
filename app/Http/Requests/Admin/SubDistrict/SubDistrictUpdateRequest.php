<?php

namespace App\Http\Requests\Admin\SubDistrict;

use Illuminate\Foundation\Http\FormRequest;

class SubDistrictUpdateRequest extends FormRequest
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
            'name'=>'required|string',
            'district_id'=> 'required|integer',
            'division_id'=> 'required|integer',
        ];
    }
}
