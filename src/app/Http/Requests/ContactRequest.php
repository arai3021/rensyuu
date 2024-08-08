<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name_first' => 'required|string|max:255',
            'name_last' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'address' => 'required|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string',
            'textarea' => 'required|string|max:2000',
        ];
    }

    public function messages()
    {
        return[
            'name_first.required' => '姓を入力してください',
            'name_last.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'phone.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'textarea.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}
