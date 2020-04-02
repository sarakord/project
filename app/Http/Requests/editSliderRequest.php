<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editSliderRequest extends FormRequest
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
            'title' => 'min:2 | max:100',
            'image' => 'mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'title.min'=>"عنوان باید 2 تا 100 کاراکتر باشد",
            'title.max'=>"عنوان باید 2 تا 100 کاراکتر باشد",
            'image.mimes'=>"عکس باید از نوع png | jpeg | jpg  باشد"
        ];
    }
}
