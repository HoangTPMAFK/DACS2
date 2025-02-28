<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgencyFormRequest extends FormRequest
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
            'agency_name' => 'required',
            'address' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'agency_name.required' => 'Không được để trống tên chi nhánh',
            'address.required' => 'Không được để trống địa chỉ chi nhánh'
        ];
    }
}
