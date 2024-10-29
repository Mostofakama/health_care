<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'visitor_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'voter_id' => 'required|string|max:20|unique:users,voter_id',
            'mobile' => 'required|string|max:15',
            'profession' => 'required|string|max:100',
            'card_number' => 'required|string|max:30|unique:users,card_number',
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
            'sub_district_id' => 'required|exists:sub_districts,id',
            'union_id' => 'required|exists:unions,id',
            'visitor_gender' => 'required|in:male,female',
        ];
    }
}
