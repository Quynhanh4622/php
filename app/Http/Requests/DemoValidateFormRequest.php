<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemoValidateFormRequest extends FormRequest
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
            'name'=>'required|min:5|max:20',
            'description'=>'required',
            'price'=>'numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'name.min'=>'Tên phải tối thiểu 5 ký tự.',
            'name.max'=>'Tên phải tối đa 20 ký tự.',
            'description.required'=>'Vui lòng nhập mô tả.',
            'price.numeric'=>'Tiền phải nhập bằng số.'
        ];
    }
    public function withValidator($validator){
        $validator->after(function ($validator){
            if ($this->get('name')=='Quynh'){
                $validator->errors()->add('name', 'khong the nhap ten quynh');
            };
        });
    }
}
