<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackendLoaiDoUongRequest extends FormRequest
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
            'tenloaidouong'=>'required|unique:loaidouong,tenloaidouong,'.$this->id,
            'mota'=>'required',
          
        ];
    }

    public function messages()
    {
        return [
            'tenloaidouong.required'=>'Dữ liệu không được để trống',
            'tenloaidouong.unique'=>'Dữ liệu đã tồn tại',
            'mota.required'=>'Dữ liệu không được để trống',
            
        ];
    }
}