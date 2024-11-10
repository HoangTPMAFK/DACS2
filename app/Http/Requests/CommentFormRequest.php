<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentFormRequest extends FormRequest
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
            'rating' => 'required',
            'title' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'rating.required' => 'Chưa đánh gía chất lượng',
            'title.required' => 'Không được để trống tiêu đề đánh giá'
        ];
    }
}
