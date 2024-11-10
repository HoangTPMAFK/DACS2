<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'email' => ['nullable', 'email', 'required_without:phone'],
            'phone' => ['nullable', 'string', 'required_without:email'],
        ];
    }

    public function messages(): array
    {
        return [
            'fname.required' => 'Không được để trống họ',
            'lname.required' => 'Không được để trống tên',
            'email.required_without' => 'Cần có email hoặc điện thoại',
            'phone.required_without' => 'Cần có email hoặc điện thoại',
        ];
    }
}
