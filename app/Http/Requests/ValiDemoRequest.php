<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiDemoRequest extends FormRequest
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
            'objective' => 'required|max:20',
            'key_result' => 'required|max:20',
            'detail' => 'max:200',
        ];
    }

    public function messages() {
        return [
            'objective.required' => 'OBJECTIVEを入力してください',
            'objective.max' => '20文字以内で入力してください',
            'key_result.required' => 'KEY_RESULTを入力してください',
            'key_result.max' => '20文字以内で入力してください',
            'detail.max' => '200文字以内で入力してください',
        ];
    }
}
