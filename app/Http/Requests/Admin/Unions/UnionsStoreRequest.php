<?php

namespace App\Http\Requests\Admin\Unions;

use Illuminate\Foundation\Http\FormRequest;

class UnionsStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'sub_district_id' => 'required|exists:sub_districts,id',
            'district_id' => 'required|exists:districts,id',
            'division_id' => 'required|exists:divisions,id',
        ];
    }
}
