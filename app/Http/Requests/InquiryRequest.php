<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
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
            'name'      => ['required', 'max:20'],
            'email'     => ['required', 'email:rfc'],
            'message'   => ['required', 'max:1024'],
            'g-recaptcha-response' => ['required', new \Arcanedev\NoCaptcha\Rules\CaptchaRule],
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attributeは必須です。',
            'max'       => ':attributeは最大:max文字で入力してください。',
            'email'       => '正しいメールアドレスを入力してください。',
            'g-recaptcha-response.required' => 'チェックボックスをチェックして下さい。',
            'g-recaptcha-response.captcha'  => '通信エラーです。',
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'お名前',
            'email'     => 'メールアドレス',
            'message'   => 'メッセージ',
        ];
    }
}
