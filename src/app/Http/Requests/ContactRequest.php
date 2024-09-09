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
            'tell_1' => 'required|max:5|regex:/^[0-9]+$/',
            'tell_2' => 'required|max:5|regex:/^[0-9]+$/',
            'tell_3' => 'required|max:5|regex:/^[0-9]+$/',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string',
            'detail' => 'required|string|max:2000',
        ];
    }

    public function messages()
    {
        return[
            'name_first.required' => '姓を入力してください',
            'name_last.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tell_1.required' => '電話番号を入力してください',
            'tell_1.regex' => '電話番号は半角数字で入力してください',
            'tell_1.max' => '電話番号は5桁までの数字で入力してください',
            'tell_2.required' => '電話番号を入力してください',
            'tell_2.regex' => '電話番号は半角数字で入力してください',
            'tell_2.max' => '電話番号は5桁までの数字で入力してください',
            'tell_3.required' => '電話番号を入力してください',
            'tell_3.regex' => '電話番号は半角数字で入力してください',
            'tell_3.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}
