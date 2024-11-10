<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryFormRequest extends FormRequest
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
            'product_id' => 'required',
            'agency_id' => 'required',
            'quantity' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'product_id.required' => 'Không được để trống tên sản phẩm',
            'agency_id.required' => 'Không được để trống tên chi nhánh',
            'quantity.required' => 'Không được để trống số lượng',
        ];
    }
}
