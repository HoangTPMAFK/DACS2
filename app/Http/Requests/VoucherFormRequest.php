<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoucherFormRequest extends FormRequest
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
            'voucher_code' => 'required', 
            'start_at' => 'required', 
            'end_at' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'voucher_code.required' => 'Không được để trống mã giảm giá',
            'start_at.required' => 'Không được để trống thời gian áp dụng',
            'end_at.required' => 'Không được để trống thời gian hết hiệu lực'
        ];
    }
}
