<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'product_name' => 'required',
            'price' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'product_name.required' => 'Không được để trống tên sản phẩm',
            'price.required' => 'Không được để trống giá sản phẩm'
        ];
    }
}
