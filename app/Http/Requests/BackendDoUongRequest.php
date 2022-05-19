<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackendDoUongRequest extends FormRequest
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
            'tendouong'=>'required|unique:douong,tendouong,'.$this->id,
            'gia'=>'required',
            'mota'=>'required',
            'size'=>'required',
            'loaidouong_id'=>'required',
            'hinhanh'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'tendouong.required'=>'Dữ liệu không được để trống',
            'tendouong.unique'=>'Dữ liệu đã tồn tại',
            'gia.required'=>'Dữ liệu không được để trống',
            'loaidouong_id.required'=>'Dữ liệu không được để trống',
            'mota.required'=>'Dữ liệu không được để trống',
            'hinhanh.required'=>'Hãy chọn ảnh từ máy của bạn'
        ];
    }
}