<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editReportRequest extends FormRequest
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
            'title'=>'min:5|max:50',
            'brief'=>'min:10|max:100',
            'description'=>'string|min:50|max:2000',
            'image'=>'mimes:jpg,png,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'title.min'=>"عنوان باید 5 تا 50 کاراکتر باشد",
            'title.max'=>"تعداد کاراکتر عنوان بیش از حد مجاز است",
            'brief.min'=>"خلاصه باید 10 تا 100 کاراکتر باشد",
            'brief.max'=>"تعداد کاراکتر خلاصه بیش از حد مجاز است",
            'description.min'=>"متن باید بیش از 50 کاراکتر داشته باشد",
            'description.max'=>"تعدا کاراکتر بیش از حد مجاز است",
            'image.mimes'=>"عکس باید از نوع png | jpeg | jpg  باشد"
        ];
    }
}
