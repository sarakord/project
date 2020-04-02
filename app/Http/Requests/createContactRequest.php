<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class createContactRequest extends FormRequest
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
            'name' => 'required | string | min:2 |max :50',
            'title' => 'required |string |min:4 |max:100',
            'email' => 'required|email',
            'text' => 'required|min:10 |max:1000'
        ];
    }

    public function messages()
    {
        return [

            'name.required' => "لطفا نام خود را وراد کنید",
            'name.min' => "نام باید 2 تا 50 کاراکتر داشته باشد",
            'name.max' => "تعداد کاراکتر نام بیش از حد مجاز است",
            'email.required' => "لطفا ایمیل خود را وارد کنید",
            'email.email' => "ایمیل صحیح نمی باشد",
            'title.required' => "لطفا عنوان پیام خود را بنویسید",
            'title.min' => "عنوان باید 4 تا 100 کاراکتر داشته باشد",
            'title.max' => "تعداد کاراکتر عنوان بیش از حد مجاز است",
            'text.required' => "لطفا محتوای پیام خود را بنویسید",
            'text.min' => "محتوا باید بیش از 10 کاراکتر داشته باشد",
            'text.max' => "تعداد کاراکتر محتوا بیش از حد مجاز است"
        ];
    }

}
