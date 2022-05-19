<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPasswordRequest extends FormRequest
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
            'password_new'=>'required|min:8',
            'password_confirm'=>'required|min:8|same:password_new',
            
        ];
    }

    public function messages()
    {
        return [
            'password_new.required'=>'Dữ liệu không được để trống',
            'password_confirm.required'=>'Dữ liệu không được để trống',
            'password_new.min'=>'Nhập ít nhất 8 kí tự',
            'password_confirm.min'=>'Nhập ít nhất 8 kí tự',
            'password_confirm.same'=>'Mật khẩu không khớp',

        ];
    }
}