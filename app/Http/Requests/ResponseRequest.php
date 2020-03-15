<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResponseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'レスは必須項目です',
            'content.max' => 'レスは1000文字以内で入力してください'
        ];
    }
}
