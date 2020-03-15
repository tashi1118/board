<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:30',
            'content' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'スレッド名は必須項目です',
            'title.max' => 'スレッド名は30文字以内で入力してください',
            'content.required' => '1レス目は必須項目です',
            'content.max' => '1000文字以内で入力してください',
        ];
    }
}
