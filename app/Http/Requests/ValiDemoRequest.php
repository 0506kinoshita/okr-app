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
            'objective' => 'required',
            'key_result' => 'required',
        ];
    }

    public function messages() {
        return [
            'objective.required' => 'OBJECTIVEを入力してください',
            'key_result.required'  => 'KEY_RESULTを入力してください',
        ];
    }
}